<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function upload(){
        return view('gallery.upload');
    }

    public function uploadImage(Request $request){
        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images', $filename , 'public');

            Gallery::create([
                'image' => $filename
            ]);
            return redirect('gallery');
        }
        else{
            return "Select an image";
        }
    }

    public function viewImage() {

        return view('gallery.gallery', [
            'image' => Gallery::all(),]);
    }
}
