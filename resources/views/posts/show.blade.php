@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-8">

            <img src="/storage/{{ $post->image }}" alt="" class="w-100">

        </div>

        <div class="col-4">
        <div class="d-flex align-items-center">
                <div>
                <img src="{{ $post->user->profile->profileImage() }}" alt="profileimage" class="rounded-circle" style="width: 60px; height:60px;">
                </div>
                <div>
           <a href="/profile/{{ $post->user->id}}" style="color: black;">    <div class="pl-3"> <h5><strong>{{ $post->user->username }}</strong></h5></div>
                </div></a>
                <div  class="pl-3 align-items-center mb-2">
                <a href="#" >Follow</a>
            </div>
        </div>
        <hr>
        <p>{{ $post->caption}}</p>

        </div>
     

    </div>

</div>
@endsection
