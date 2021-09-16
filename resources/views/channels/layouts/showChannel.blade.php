@extends('layouts.app',[$user])

@section('content')

<div id="edit" >
  
  <div id='channel_header'>


<div class="row">
  
    <div class="top-container">
      <img id='channel_header_banner' srcset="{{$user->channel->channel_banner}}" src="{{asset('images/banners/myBanner.jpg')}}">
    </div>
    

    <div class="channel_avatar_container d-flex">

        <div id="channel_info" class="hidden">
            
          <div class="close-container" v-on:click='hideAvatarInfo'>
            <div class="leftright"></div>
            <div class="rightleft"></div>
          </div>

                <div class="">
                    <h3> {{$user->name}} </h3>  
                </div>
                              
                <button class="btn btn-danger" >Subscribe</button>
              </div>



      <div class="channel_avatar " id='channel_avatar_toggle'>
        <input id="channel_avatar_browse" type="file" v-on:change='changeImage' name='image' accept="image/*">
        <img class="rounded-circle w-100" srcset="{{$user->channel->image}}" src="{{asset('images/default_profile_image/edit_profile.png')}}" alt="here should be an avatar" v-on:mouseover="showAvatarInfo" v-on:click="toggleAvatarInfo">
      </div>


     

    </div>


{{-- 
    <div class="row d-flex align-items-center pb-4" style="min-height:250px">
      <div class="col-3 mr-sm-5  mr-lg-0" >
          <img   class="pt-1 mr-5 rounded-circle w-100 "  src="{{ $user->profile->profileImage ?? ''}}" style="flex:1;">
      </div>
      <div class="col-8 pl-4">
              
                 <div class="d-flex align-items-center">
                      <div class="align-items-baseline">
                              <h1> {{ $user->user_name}}</h1>  
                      </div>
                          @if(!$show)
                  <follow-button class="ml-4" usr="1" follows="{{$follows}}" user_id="{{$user->id}}"></follow-button>
                          @endif
                 </div>
              

              <div class="d-flex">
                  <div class="pr-5"><strong>{{$count = $user->posts->count()}}</strong> posts</div>
              <div class="pr-5"><strong>{{$user->profile->followers->count()}}</strong> followers</div>
              <div><strong>{{$user->following->count()}}</strong> following</div>
              </div>

              <div class="pt-2 font-weight-bold">{{$user->profile->tittle ??'...'}}</div>
              <div>{{$user->profile->description ?? '...'}}</div>
              <div class=" font-weight-bold pb-3"><a href="#" style="color: rgba(var(--fe0,0,53,105),1);"> {{$user->profile->url ?? 'tmp.org'}} </a></div>
          
              <div class="pt-3">
                      @if ($show)
                          <a href="/profile/{{$user->id}}/edit" >edit profile</a>
                      @endif  
              </div>
      </div>
 --}}
   
</div>   
    <div id="myHeader" class="">

      
        <ul class=" nav navbar">
          
          <li><a role="textbox" aria-multiline="true" href="{{route('channel.show',    $user->channel->id)}}">Home</a></li>
          <li><a role="textbox" aria-multiline="true" href="{{route('channel.show.videos' , $user->channel->id )}}">Videos</a></li>
          <li><a role="textbox" aria-multiline="true" href="{{route('channel.show.playlists' , $user->channel->id )}}">Playlists</a></li>
          <li><a role="textbox" aria-multiline="true" href="{{route('channel.show.channels' , $user->channel->id )}}">Channels</a></li>
          <li><a role="textbox" aria-multiline="true" href="{{route('channel.show.about' , $user->channel->id )}}">About</a></li>

        </ul>


 
       
    </div>
     
      
    </div>
  </div>

  <div class="channel_content">
    

      @yield('channel_content')
   
  </div>
  
  

</div>



  


@endsection
