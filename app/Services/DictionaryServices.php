<?php namespace App\Services;

use App\Dictionary;
use Illuminate\Http\Request;

class DictionaryServices
{

    public function store(Request $request){
        $word            = $request->input('word');
        $translated_word = $request->input('translated_word');

        $dictionaryWords                  = new Dictionary();
        $dictionaryWords->word            = $word;
        $dictionaryWords->translated_word = $translated_word;

        $dictionaryWords->save();
    }

}
