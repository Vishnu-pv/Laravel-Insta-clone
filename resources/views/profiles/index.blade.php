@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
 
        <div class="col-3 p-5"  style="position:relative;">
            <img src="https://instagram.fcok1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/106607826_583164439253576_2363279325884512950_n.jpg?_nc_ht=instagram.fcok1-1.fna.fbcdn.net&_nc_ohc=wfvMg56BNyAAX-C9m2q&oh=b3f74798d01bf3b003f4e8ca755a25c1&oe=5F67A86B" alt="head-img" class="rounded-circle" >
        </div>
        <div class="col-9 pt-5">
             
                 <div class="d-flex justify-content-between align-items-baseline">
                 <h1>{{ $user -> username }}</h1>
                 <a href="#">Add New Post</a>
                 </div>
                 <div class="d-flex">
                         <div class="pr-5"><strong>153</strong> posts</div>
                         <div class="pr-5"><strong>55.5M</strong> followers</div>
                         <div class="pr-5"><strong>812</strong> following</div>
                </div>   
                <div class="pt-3">{{ $user->profile->title}}</div> 
                <div>{{ $user->profile->description}}</div>
                <div ><strong><a href="#">{{ $user->profile->url }}</a></strong></div>
        </div>
    </div>    

       <div class="row pt-4">
                <div class="col-4">
                        <img src="https://instagram.fcok1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.10.1440.1440a/s640x640/117767480_734243060455922_6754556141438497100_n.jpg?_nc_ht=instagram.fcok1-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=0wyL-n2zgf8AX92O31c&oh=506896f36653edb37d03cac3bfaef46a&oe=5F68D8FC" alt="dualipa" class="w-100">

                </div>
                <div class="col-4">
                        <img src="https://instagram.fcok1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/117311994_299345237797790_3361648776948042328_n.jpg?_nc_ht=instagram.fcok1-1.fna.fbcdn.net&amp;_nc_cat=1&amp;_nc_ohc=dv_WrrdnduoAX8plGWh&amp;oh=1057dc5a2c0da972e5561a0ece169748&amp;oe=5F69759B" alt="dualipa" class="w-100">

                </div>
                <div class="col-4">
                        <img src="https://instagram.fcok1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.82.1389.1389a/s640x640/83070381_137962923914314_802227997967771057_n.jpg?_nc_ht=instagram.fcok1-1.fna.fbcdn.net&_nc_cat=110&_nc_ohc=bM1G3N8WcPoAX_7mbD1&oh=fed1a8f760473eeb68bedbd47f63d9e0&oe=5F696CF2" alt="dualipa" class="w-100" >

                </div>
       </div> 

</div>
@endsection
