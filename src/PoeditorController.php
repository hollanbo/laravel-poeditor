<?php
namespace hollanbo\LaravelPoeditor;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PoeditorController extends Controller
{

    public function index(PoeditorRepository $repo)
    {
        $data = $repo->getData("sl_SI");
        return view('hollanboLaravelPoeditor::index', $data);
    }

    public function saveTranslation(Request $request, PoeditorRepository $repo) {
        $data = $request->all();

        $response = $repo->saveTranslation("sl_SI", $data['key'], $data['value']);

        if ($response['status'] === 'error') {
            return response()->json($response, 500);
        }
        return response()->json($response);
    }

    public function saveToFile(PoeditorRepository $repo) {
        $repo->saveToFile("sl_SI");
        return redirect()->route('hollanbo.poeditor.index');
    }

}
