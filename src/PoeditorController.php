<?php
namespace hollanbo\LaravelPoeditor;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use hollanbo\LaravelPoeditor\BaseDriver;
use Xinax\LaravelGettext\LaravelGettext;

class PoeditorController extends Controller
{
    public function index(PoeditorRepository $repo, PluralsRepository $plurals)
    {
        $locale = "sl_SI";
        setlocale(LC_ALL, $locale);
        bindtextdomain('messages', config('laravel-poeditor.source_dir'));

        $data = $repo->getData($locale);
        $data['forms'] = $plurals->getForLocale($locale);

        return view('hollanboLaravelPoeditor::index', $data);
    }

    public function saveTranslation(Request $request, PoeditorRepository $repo)
    {
        $data = $request->all();
        $locale = "sl_SI";

        $response = $repo->saveTranslation($locale, $data['key'], $data['value'], $data['plural']);

        if ($response['status'] === 'error') {
            return response()->json($response, 500);
        }
        return response()->json($response);
    }

    public function saveToFile(PoeditorRepository $repo)
    {
        $locale = "sl_SI";
        $backup = config('laravel-poeditor.backup_save');
        $repo->saveToFile($locale, $backup);
        return response()->json(['status' => 'ok']);
    }

    public function publish()
    {
        $locale = "sl_SI";
        $driver = app()->make('hollanbo\LaravelPoeditor\BaseDriver')->determineDriver();
        $driver->poToMo($locale);
        return response()->json(['status' => 'ok']);
    }

    public function syncTranslations ()
    {
       $driver = app()->make('hollanbo\LaravelPoeditor\BaseDriver')->determineDriver();

       $driver->sync();

       return response()->json(['status' => 'ok']);
    }
}
