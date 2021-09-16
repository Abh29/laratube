<?php

namespace App\Http\Controllers;

use App\Channel;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ChannelController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth'])->only(['update','edit']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Channel $channel)
    {
        //
        $user = $channel->user ;

        if($channel->editable()){
           
                return redirect('/home');
           
        }
       
        return view('channels.show.home',compact('user'));
    }

    public function showChannelVideos(Channel $channel)
    {
        //
        $user = $channel->user ;

        if($channel->editable()){
           
            return view('home.videos',compact('user'));
           
        }
       
        return view('channels.show.videos',compact('user'));
    }


    public function showChannelPlaylists(Channel $channel)
    {
        //
        $user = $channel->user ;

        if($channel->editable()){
           
            return view('home.playlists',compact('user'));
           
        }
       
        return view('channels.show.playlists',compact('user'));
    }
    
    
    public function showChannelChannels(Channel $channel)
    {
        //
        $user = $channel->user ;

        if($channel->editable()){
           
            return view('home.channels',compact('user'));
           
        }
       
        return view('channels.show.channels',compact('user'));
    }

    public function showChannelAbout(Channel $channel)
    {
        //
        $user = $channel->user ;

        if($channel->editable()){
           
            return view('home.about',compact('user'));
           
        }
       
        return view('channels.show.about',compact('user'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Channel $channel)
    {
        
        $user = $channel->user;

        if(!$channel->editable()){
            return redirect('/home');
        }else{

        return view('channels.edit',compact('user'));
        
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, Channel $channel)
    {
        
       

        $data = request()->validate([
            'tittle' => '',
            'description' =>'max:1000',
            'image' =>['image','max:4096'],
            'channel_banner' => ['image','max:8192'],
        ]);


        if(request('image')){

            $path = $data['image'];
            $path = "/storage/".request('image')->store('uploads/channelsAvatars','public');
            $image = Image::make(public_path("{$path}"))->fit(250,250);
            $image->save();
            $data = array_merge($data , ['image' => $path]);

        }

        if(request('channel_banner')){
            $path = $data['channel_banner'];
            $path = "/storage/".request('channel_banner')->store('uploads/channelsBanners','public');
            $image = Image::make(public_path("{$path}"));
            $image->save();
            $data = array_merge($data , ['channel_banner' => $path]);

        }
        
        $channel->update($data);
        
    
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
