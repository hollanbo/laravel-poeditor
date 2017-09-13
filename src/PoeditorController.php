<?php
namespace hollanbo\LaravelPoeditor;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class PoeditorController extends Controller
{

    public function index()
    {
        return view('hollanboLaravelPoeditor::welcome');
    }

}
