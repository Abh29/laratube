@extends('layouts.app',[$user])





@section('content')

    <div class="banner">
        
            <img srcset="{{$user->channel->channel_banner}}" src="{{asset('images/banners/myBanner.jpg')}}">
            <a class=' btn btn-link' v-on:click='changeChannelBanner' >change banner</a>
            <form id='update_channel_banner' enctype="multipart/form-data" method="POST" action="{{ route('channel.update',['channel'=> $user->channel->id ]) }}">
                @csrf
                @method('PATCH')
                <input id="browse_banner" type="file" v-on:change='changeBanner' name='channel_banner' accept="image/*" style="display: none">
            </form>
    </div>


<div class="container view_container">




    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">
                    <form id='update_channel_avatar' enctype="multipart/form-data" method="POST" action="{{ route('channel.update',['channel'=> $user->channel->id ]) }}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group d-flex justify-content-center">

                            <div class="channel_avatar" >

                                    <input id="channel_avatar_browse" type="file" v-on:change='changeImage' name='image' accept="image/*">
                                    <img class="rounded-circle w-100" srcset="{{$user->channel->image}}" src="{{asset('images/default_profile_image/edit_profile.png')}}" alt="here should be an avatar" v-on:click="browseImage" >
                            </div>

                        </div>

                    </form>
                
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('channel.update',['channel'=> $user->channel->id ]) }}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group row">
                            <label for="tittle" class="col-md-4 col-form-label text-md-right">{{ __('Tittle') }}</label>

                            <div class="col-md-6">
                                <input id="tittle" type="text" class="form-control @error('name') is-invalid @enderror" name="tittle" value="{{ auth()->user()->channel->tittle }}" required autocomplete="tittle" autofocus>

                                @error('tittle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong> 
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('My Description') }}</label>

                            <div class="col-md-6">
                            <textarea id="description" type="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" autocomplete="description">{{$user->channel->description}}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Channel ') }}
                                </button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection



