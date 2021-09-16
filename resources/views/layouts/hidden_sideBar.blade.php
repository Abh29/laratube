    

  {{--       <nav id="hidden_sidebar" class="active">
            
    
        
            <nav class=" navbar navbar-light bg-white shadow-sm mb-0 pl-3">

                    <a class="navbar-brand my-0 py-0 " href="{{ url('/') }}">
                        <img class="company_logo" src="{{asset('images/logos/laratube_logo3.png')}}" alt="company logo here">
                    </a>    

                    <togglesidebarbutton-component img_src ='{{asset('images/Icons/return_button.png')}}'
                    ></togglesidebarbutton-component>

            </nav> 
           
    
           <div class=" container">
               
                    <div id="link_icons_list">
                        <ul class="list-unstyled">
                            <li >
                            <sidebaricon-component img_src="{{asset('images/Icons/home_icon_100.png')}}" clicked_src="{{asset('images/Icons/home_icon_red_100.png')}}" link ="home"></sidebaricon-component>
                            </li>
                            <li>
                                <sidebaricon-component img_src="{{asset('images/Icons/trending_icon_100.png')}}" clicked_src="{{asset('images/Icons/trending_icon_red_100.png')}}"  link ="trending"></sidebaricon-component>
                            </li>
                            <li>
                                <sidebaricon-component img_src="{{asset('images/Icons/subscriptions_icon_100.png')}}" clicked_src="{{asset('images/Icons/subscriptions_icon_red_100.png')}}"  link ="subscriptions"></sidebaricon-component>
                         
                            </li>
                            <li>
                                <sidebaricon-component img_src="{{asset('images/Icons/video_history_icon_100.png')}}" clicked_src="{{asset('images/Icons/video_history_icon_red_100.png')}}"  link="history"></sidebaricon-component>
                         
                            </li>
                        </ul>
                    </div>
               
            </div>
         </nav> --}}


         <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="hidden_sidebar-header">

                
                    <togglesidebarbutton-component img_src ='{{asset('images/Icons/return_button.png')}}'></togglesidebarbutton-component>
               

            <div id='logo_wrapper'>
    
                    <a class="navbar-brand my-0 py-0 " href="{{ url('/') }}">
                        <img class="company_logo" src="{{asset('images/logos/laratube_logo3.png')}}" alt="company logo here">
                    </a>    
            </div>

                
            </div>
<div class="container pt-5">
    
                <ul class="list-unstyled components pt3">
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
                    </li>
                    <li>
                        <a href="#">Trending</a>
                    </li>
                    <li>
                        <a href="#">Subscriptions</a>
                    </li>
                    <li>
                        <a href="#">History</a>
                    </li>
                </ul>

</div>   
        </nav>