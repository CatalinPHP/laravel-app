<?php namespace App\Services;

use App\Dictionary;
use function Clue\StreamFilter\append;

class GameService
{
    public function getWordsForGame(){
        $allWords = Dictionary::where('word' , 'like' , '%%')->get()->toArray();
        $words = [];
        for ($i = 0 ; $i < 3 ; $i++){
            $rand = rand(0,count($allWords));
            array_push($words, $allWords[$rand]);
        }
        return $words;
    }

}
