<?php namespace App\Services;

use App\Dictionary;
use Illuminate\Http\Request;

class DictionaryServices
{

    /**
     * @param \Illuminate\Http\Request $request
     */
    public function store(Request $request){
        $word            = $request->input('word');
        $translated_word = $request->input('translated_word');

        $dictionaryWords                  = new Dictionary();
        $dictionaryWords->word            = $word;
        $dictionaryWords->translated_word = $translated_word;

        $dictionaryWords->save();
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function search(Request $request){
        $word = $request->input('word');
        $response = Dictionary::orWhere('word' , 'like' , "%".$word.'%')->get()->toArray();
        return $response;

    }

    /**
     * @return array
     */
    public function latestWords()
    {
        $words = Dictionary::query()->take(10)->orderBy('updated_at', 'desc')->get()->toArray();
        return $words;
    }
}
