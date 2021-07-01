@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8">
            @if(Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}}</div>
            @endif
            @if(count($ringtones)>0)
            @foreach($ringtones as $ringtone)
            <div class="card design" style="margin-top: 50px;">
                <div class="card-header">{{$ringtone->title}}</div>

                <div class="card-body">
                   <audio controls onplay ="pauseOthers(this);" controlsList="nodownload"  >
                                <source src="/audio/{{$ringtone->file}}" type="audio/ogg">
                                Your browser does not support this element                                  
                   </audio>
                </div>
                <div class="card-footer">
                    @if(!Auth::check())
                    <a href="{{route('login')}}">Info and Download</a>
                    @endif
                    @if(Auth::check())
                    <a href="{{route('ringtones.show',[$ringtone->id,$ringtone->slug])}}">Info and Download</a>
                    @if(Auth::user()->role == 'normal')
                    <strong><a style="color:#0b7ad6" href="{{route('favourites.show',[$ringtone->id,$ringtone->slug])}}">Add to favorites</a></strong>
                    
                    @endif
                    @endif
                    
                </div>
            </div>
            
            @endforeach
            @else
            <p>There is no any ringtones for this category</p>
            @endif
        </div>
        <div class="col-md-4"style="margin-top: 50px;">
            <div class="card-header">Categories</div>
            @foreach(App\Category::all() as $category)
                <div class="card-header" style="background-color: #ccc;"><a href="{{route('ringtones.category',[$category->id])}}"> {{$category->name}}</a></div>
 
            @endforeach

        </div>
        {{$ringtones->links()}}
    </div>
</div>

@endsection
