@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
 
        <div class="col-3 p-5"  style="position:relative;">
            <img src="{{ $user->profile->profileImage() }}" alt="head-img" class="rounded-circle"   style="width: 150px; height:150px;">
        </div>
        <div class="col-9 pt-5 pl-5">
             
                 <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex">
                        <h3>{{ $user -> username }}</h3>
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                    </div>
                     @can('update', $user->profile)
                     <a href="/p/create">Add New Post</a>
                     @endcan
           
                </div>
               @can('update', $user->profile)
               <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                @endcan
                 <div class="d-flex">
                         <div class="pr-5"><strong>{{ $postCount }}</strong> posts</div>
                 <div class="pr-5"><strong>{{ $followersCount }}</strong> followers</div>
                         <div class="pr-5"><strong>{{ $followingCount }}</strong> following</div>
                </div>   
                <div class="pt-3">{{ $user->profile->title}}</div> 
                <div>{{ $user->profile->description}}</div>
                <div ><strong><a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a></strong></div>
        </div>
    </div>    

       <div class="row pt-4">

                @foreach($user->posts as $post)
    
                <div class="col-4 pt-2">
                <a href="/p/{{ $post->id }}"><img src=" /storage/{{  $post->image }}" class="w-100 h-100"></a>

                </div>

                @endforeach


              
       </div> 

</div>
@endsection
