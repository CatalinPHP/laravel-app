<?php namespace App\Http\Controllers;

use App\Services\DictionaryServices;
use Illuminate\Support\Facades\File;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function homePage()
    {

        $message = request()->input('message') ?? null;
        $images  = File::allFiles(public_path('images'));
        return view("pages.welcome")->with([
            'images'  => $images,
            'message' => $message,
        ]);

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function addWord()
    {
        $service = new DictionaryServices();
//        dd( $service->latestWords());
        return view("pages.add_word")->with('words', $service->latestWords());
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function searchWords()
    {
        return view("pages.search");
    }
}
