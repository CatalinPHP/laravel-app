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

    public function index()
    {
        $dictionary = Dictionary::all()->toArray();
        return $dictionary;
    }

    public function store(Request $request)
    {
        $service = new DictionaryServices();
        $service->store($request);

        \Session::put('flash_message', 'The word was add to the dictionary');
        return redirect('home');
    }

    public function storeFromExcel()
    {
        Excel::import(new DictionaryImport(), 'dictionary.xlsx');
        \Session::put('flash_message', 'The word was add to the dictionary');
        return redirect('home');
    }


}
