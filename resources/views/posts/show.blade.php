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
                <img src="/storage/{{ $post->user->profile->image}}" alt="profileimage" class="rounded-circle" style="width: 60px; height:60px;">
                </div>
                <div>
                <div class="pl-2"> <h5><strong>{{ $post->user->username }}</strong></h5></div>
                </div>

        </div>
        <hr>
        <p>{{ $post->caption}}</p>

        </div>
     

    </div>

</div>
@endsection
