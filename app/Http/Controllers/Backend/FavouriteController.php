<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Ringtone; 
use Auth;

class FavouriteController extends Controller
{
    public function show($id){
        $ringtone = Ringtone::find($id);
        $user_id = Auth::user()->id;
        $title = $ringtone->title;
        $description = $ringtone->description;
        $slug = $ringtone->slug;
        $file = $ringtone->file;
        $format = $ringtone->format;
        $size = $ringtone->size;
        $download = $ringtone->download;
        $category_id = $ringtone->category_id;
        DB::table('favouritesongs')->insert(
            [
                'user_id'=>$user_id,
                'title'=>$title,
                'description'=>$description,
                'slug'=>$slug,
                'file'=>$file,
                'format'=>$format,
                'size'=>$size,
                'download'=>$download,
                'category_id'=>$category_id
                
            ]
            );
        return($title);
    }
}
