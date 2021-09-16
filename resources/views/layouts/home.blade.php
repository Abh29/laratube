@extends('layouts.app')

@section('content')

    
<div id="home_channel" >
  
    <div id='channel_header'>
  
    <div class="top-container">
      <img id='channel_header_banner' srcset="{{auth()->user()->channel->channel_banner}}" src="{{asset('images/banners/myBanner.jpg')}}">
      </div>
      
      <div id="myHeader" class="">
  
        
          <ul class=" nav navbar">
            
            <li><a role="textbox" aria-multiline="true" href="{{route('channel.show',    auth()->user()->channel->id)}}">Home</a></li>
            <li><a role="textbox" aria-multiline="true" href="{{route('channel.show.videos' , auth()->user()->channel->id )}}">Videos</a></li>
            <li><a role="textbox" aria-multiline="true" href="{{route('channel.show.playlists' , auth()->user()->channel->id )}}">Playlists</a></li>
            <li><a role="textbox" aria-multiline="true" href="{{route('channel.show.channels' , auth()->user()->channel->id )}}">Channels</a></li>
            <li><a role="textbox" aria-multiline="true" href="{{route('channel.show.about' , auth()->user()->channel->id )}}">About</a></li>
            
  
          </ul>

   
         
      </div>
       
        
      </div>
    </div>
  
    <div class="channel_content">

      @yield('channel_content')

    </div>
    
    
  
  </div>
  

@endsection
