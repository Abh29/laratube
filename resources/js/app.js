/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('togglesidebarbutton-component', require('./components/ToggleSideBarButton.vue').default);
Vue.component('sidebaricon-component', require('./components/SideBarIcon.vue').default);
Vue.component('banner-component',require('./components/BannerComponent.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



 


const app = new Vue({
    el: '#app',  


    created () {
        window.addEventListener('scroll', this.handleScroll);
    
    
    },


    destroyed () {
        window.removeEventListener('scroll', this.handleScroll);
    
    },



    mounted(){

        $('.overlay').on('click', function () {
            $('#sidebar').removeClass('active');
            $('.overlay').removeClass('active');
        });

    },

    methods:{

        browseImage:function(){

            $('#channel_avatar_browse').click() ;
        },

        changeImage:function(){

            $('#update_channel_avatar').submit();

        },
        changeChannelBanner:function(){

            $('#browse_banner').click() ;

        },
        changeBanner:function(){

            console.log('this form is submited');
            $('#update_channel_banner').submit();


        },

        showAvatarInfo:function(){
            $('#channel_avatar_toggle').addClass('active');
            $('#channel_info').removeClass('hidden');
        },

        hideAvatarInfo:function(){
            $('#channel_avatar_toggle').removeClass('active');
            $('#channel_info').addClass('hidden');
        },

        toggleAvatarInfo:function(){
            $('#channel_avatar_toggle').toggleClass('active');
            $('#channel_info').toggleClass('hidden');
        },


       
        handleScroll (event) {

             header = $('#myHeader');
             sticky = 204.23 ; //274.23-70  70 is the hight of the fixed top navBar 


             if (window.pageYOffset > sticky) {
                header.addClass('sticky');
                $('.channel_content').addClass('sticky');
            
            } else {
                header.removeClass('sticky');
                $('.channel_content').removeClass('sticky');
            } 


        },

    },
});





