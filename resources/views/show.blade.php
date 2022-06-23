@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top: 50px;">
                <div class="card-header">{{$ringtone->title}}</div>

                <div class="card-body">
                     <audio controls controlsList="nodownload">
                                <source src="/audio/{{$ringtone->file}}" type="audio/ogg">
                                Your browser does not support this element
                </audio>
                </div>
                <div class="card-footer">
                    <form action="{{route('ringtones.download',[$ringtone->id])}}" method="post">@csrf
                    <button type="submit" class="btn btn-secondary btn-sm">Download</button>
                </form>

                </div>


                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>


            </div>
            <table class="table mt-4">
                <tr>
                    <th>Name</th>
                    <td>{{$ringtone->title}}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{$ringtone->description}}</td>
                </tr>
                <tr>
                    <th>Format</th>
                    <td>{{$ringtone->format}}</td>
                </tr>
                <tr>
                    <th>Size</th>
                    <td>{{$ringtone->size}}</td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td>{{$ringtone->category->name}}</td>
                </tr>
                <tr>
                    <th>Download</th>
                    <td>{{$ringtone->download}}</td>
                </tr>

            </table>
            </div>
            <div class="col-md-4"style="margin-top: 50px;">
            <div class="card-header head">Categories</div>
            @foreach(App\Models\Category::all() as $category)
                <a href="{{route('ringtones.category',[$category->id])}}"> <div class="card-header category"> {{$category->name}} </div></a>

            @endforeach
        </div>
    </div>

<!-- begin wwww.htmlcommentbox.com -->
<div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com"></a> is loading comments...</div>
<link rel="stylesheet" type="text/css" href="https://www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
<script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="https://www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&opts=16862&num=3&ts=1625057280542");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
<!-- end www.htmlcommentbox.com -->

</div>

@endsection
