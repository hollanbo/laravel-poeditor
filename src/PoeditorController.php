<?php
namespace hollanbo\LaravelPoeditor;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class PoeditorController extends Controller
{

    public function index(PoeditorRepository $repo)
    {
        $data = $repo->getData("sl_SI");
        return view('hollanboLaravelPoeditor::index', $data);
    }

}
