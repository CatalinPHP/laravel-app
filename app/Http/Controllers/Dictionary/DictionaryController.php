<?php namespace App\Http\Controllers\Dictionary;

use App\Dictionary;
use App\Http\Controllers\Controller;
use App\Imports\DictionaryImport;
use App\Services\DictionaryServices;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Session;


class DictionaryController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $dictionary = Dictionary::where('word', 'like', '%%')
                                ->orderBy('word')->get()->toArray();
        return view('pages/all_words')->with('response', $dictionary);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $service = new DictionaryServices();
        $service->store($request);

        \Session::put('flash_message', 'The word was add to the dictionary');
        return redirect('home');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function storeFromExcel()
    {
        Excel::import(new DictionaryImport(), 'Cuvinte.xlsx');
        \Session::put('flash_message', 'The word was add to the dictionary');
        return redirect('home');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search(Request $request)
    {
        $service  = new DictionaryServices();
        $response = $service->search($request);
        return view('pages/search')->with('response', $response);
    }
}
