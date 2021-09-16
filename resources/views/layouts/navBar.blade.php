    
    <div id="top_navbar" class="container-fluid ">
        
        <nav class=" navbar navbar-expand-md navbar-light bg-white shadow-sm mb-0 pl-0">
            
                <div class=" container-fluid  ">
        
        
                    <a class="navbar-brand my-0 py-0 " href="{{ url('/') }}">
                        <img class="company_logo" src="{{asset('images/logos/laratube_logo3.png')}}" alt="company logo here">
                    </a>
            
                    <div class="container d-flex justify-content-center">
                        <form class="form-inline col-8 " action="/search" method="GET">
                           
                                    
                                    <input type="text" name="searchTag" class="form-control " placeholder="I’m looking for" >
                                   
                                    <a  class="btn border-primary" type="submit" > search<i class="lnr lnr-magnifier"></i></a>
                                   
                              
                        </form>
                        
                    </div>
            
        
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
            
                        </ul>
            
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
            
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            
                                        @if ($user->id != auth()->user()->id)
            
                                              <a class="dropdown-item" href="{{route('home')}}">
                                                      {{ __('My Channel') }}
                                              </a>
            
                                        @endif


                                        <a class="dropdown-item" href="{{ route('channel.edit',['channel' => auth()->user()->channel->id ]) }}" > {{'edit my page'}}</a>

                                    
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
            
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
    </div>

 