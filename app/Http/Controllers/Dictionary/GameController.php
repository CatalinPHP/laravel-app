<?php namespace App\Http\Controllers\Dictionary;

use App\Dictionary;
use App\Http\Controllers\Controller;
use App\Services\GameService;

class GameController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getWords(){
        $service = new GameService();
        $words = $service->getWordsForGame();
        return view('pages/game')->with( 'words' , $words);
    }

}
