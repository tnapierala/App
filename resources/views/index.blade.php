@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8">
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
                    @if(Auth::check())
                        <a href="{{route('ringtones.show',[$ringtone->id,$ringtone->slug])}}">Info and Download</a>
                    @else
                        <a href="{{route('login')}}">Info and Download</a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-md-4"style="margin-top: 50px;">
            <div class="card-header head">Categories</div>
            @foreach(App\Models\Category::all() as $category)
                <a class="cat-line" href="{{route('ringtones.category',[$category->id])}}">  <div class="card-header category"> {{$category->name}} </div> </a>

            @endforeach

        </div>
        {{$ringtones->links()}}
    </div>
</div>

@endsection
