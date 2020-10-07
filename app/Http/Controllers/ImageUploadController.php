<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImageUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function imageUpload()
    {
        return view('imageUpload');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function imageUploadPost()
    {
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);
        return back()
            ->with('success', 'You have successfully upload image.')
            ->with('image', $imageName);
    }

    /**
     * @throws \Exception
     */
    public function imageDelete()
    {
        $fileName = request()->input('delete');
        try
        {
            File::delete(public_path("images/$fileName"));
        }
        catch (\Exception $e)
        {
            throw new \Exception($e->getMessage());
        }
        return redirect('/home?message=Deleted image successfully');
    }
}
