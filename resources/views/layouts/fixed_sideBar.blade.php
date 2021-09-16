
        
    <nav id="fixed_sidebar" class="">

     <div class="fixed_sidebar_header">
         
                    <togglesidebarbutton-component
                     name="hello from toggle button !"
                     img_src ='{{asset('images/Icons/humburger_button.png')}}'></togglesidebarbutton-component>
                    
     </div>
        
        
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
        
    </nav>


    


  


   



