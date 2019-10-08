<?php namespace App\Http\Controllers\Dictionary;

use App\Dictionary;
use App\Http\Controllers\Controller;
use App\Imports\DictionaryImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class DictionaryController extends Controller
{

    public function index()
    {
        $dictionary = Dictionary::all()->toArray();
        return $dictionary;
    }

    public function store(Request $request)
    {
        $word            = $request->input('word');
        $translated_word = $request->input('translated_word');

        $dictionaryWords                  = new Dictionary();
        $dictionaryWords->word            = $word;
        $dictionaryWords->translated_word = $translated_word;

        $dictionaryWords->save();
    }

    public function storeFromExcel(){
        Excel::import(new DictionaryImport(), 'dictionary.xlsx');
    }


}
