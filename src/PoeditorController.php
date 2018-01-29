<?php
namespace hollanbo\LaravelPoeditor;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use hollanbo\LaravelPoeditor\BaseDriver;
use Xinax\LaravelGettext\LaravelGettext;

class PoeditorController extends Controller
{
    /**
     * Editor page
     *
     * @param   PoeditorRepository $repo    DEPENDENCY
     * @param   PluralsRepository  $plurals INJECTION
     *
     * @return  View
     *
     * @author Borut Hollan <borut.hollan@easistent.com>
     *
     * @version 1.0
     */
    public function index(PoeditorRepository $repo, PluralsRepository $plurals, $locale)
    {
        $data = $repo->getData($locale);
        $data['forms'] = $plurals->getForLocale($locale);
        $data['locale'] = $locale;

        return view('hollanbo/LaravelPoeditor::index', $data);
    }

    /**
     * Save translation to cache endpoint
     * (automatic Ajax)
     *
     * @param   Request            $request DEPENDENCY
     * @param   PoeditorRepository $repo    INJECTION
     *
     * @return  JSON Response
     *
     * @author Borut Hollan <borut.hollan@easistent.com>
     *
     * @version 1.0
     */
    public function saveTranslation(Request $request, PoeditorRepository $repo, $locale)
    {

        $data = $request->all();

        $response = $repo->saveTranslation($locale, $data['key'], $data['value'], $data['plural']);

        if ($response['status'] === 'error') {
            return response()->json($response, 500);
        }
        return response()->json($response);
    }

    /**
     * Save translation to file endpoint
     * (Save button clicked)
     *
     * @param   PoeditorRepository $repo Dependency injection
     *
     * @return  JSON Response
     *
     * @author Borut Hollan <borut.hollan@easistent.com>
     *
     * @version 1.0
     */
    public function saveToFile(PoeditorRepository $repo, $locale)
    {

        $backup = config('laravel-poeditor.backup_save');
        $repo->saveToFile($locale, $backup);
        return response()->json(['status' => 'ok']);
    }

    /**
     * Publish translations endpoint
     * (Publish button clicked)
     *
     * @return  JSON Response
     *
     * @author Borut Hollan <borut.hollan@easistent.com>
     *
     * @version 1.0
     */
    public function publish(\hollanbo\LaravelPoeditor\BaseDriver $base_driver, $locale)
    {
        $driver = $base_driver->determineDriver();
        $driver->poToMo($locale);

        bindtextdomain('messages12341234', config('laravel-poeditor.source_dir'));
        bindtextdomain(config('laravel-poeditor.domain'), config('laravel-poeditor.source_dir'));

        return response()->json(['status' => 'ok']);
    }

    /**
     * Sync po files with new strings from sources
     *
     * @return  JSON Response
     *
     * @author Borut Hollan <borut.hollan@easistent.com>
     *
     * @version 1.0
     */
    public function syncTranslations(\hollanbo\LaravelPoeditor\BaseDriver $base_driver, $locale)
    {

       $driver = $base_driver->determineDriver();
       $driver->sync();

       return redirect()->route('hollanbo.poeditor.index', ['locale' => $locale]);
    }
}
