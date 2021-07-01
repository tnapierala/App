<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ringtone; 

class FavouriteController extends Controller
{
    public function show($id){
        $ringtone = Ringtone::find($id);
        $ringtone = $ringtone->id;
        return redirect()->back()->with('message',"Ringtone added to favourites successfully!");
    }
}
