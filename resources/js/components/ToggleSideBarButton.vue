<template>
    <div id ="toggle_sidebar_button" class="float-left align-items-center py-3">
      <a   v-on:click="toggle">
            <img :src="this.img_src" alt="T">  
        </a>
    </div>
</template>

<style scoped lang='scss'>
    a {
        width: 40px;

        img{
            width : 35px;
            align-self: center;

            &:hover{
                filter : drop-shadow(0 0 0.1rem grey);
            }

         }
    }
    #toggle_sidebar_button {
        padding : 5px 15px;
    }
</style>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
            console.log(this.img_src);
        },

        props:{
            name: String,
            img_src : String,
        },

        methods:{

            toggle(){

                $(".overlay").toggleClass("active");
                $('#sidebar').toggleClass('active');

            }
        },
    }

     
    

</script>
