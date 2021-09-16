<template>
    <div>
        <a :href="destination">
            <img id="link_icon" :class="myClass" alt="Home" :src="sourse">
        </a>

    </div>
</template>

<style scoped lang="scss">

    .greyshadow:hover{
        filter: drop-shadow(0 0 0.1rem grey );
    }
    
    .redshadow:hover{
        filter: drop-shadow(0 0 0.1rem red );
    }

</style>

<script>
export default {
     
     
     props:{
       link : String,
       img_src : String,
       clicked_src : String,
     },


  data: function(){
            return{
                color : 'grey' ,
                new_source: this.img_src,
            }
        },




    methods:{
        
        change_link_icon:function(){

            this.new_source = this.clicked_src;
        },


    },

      computed:{
          
          sourse(){
   

              if(window.location.href.search(this.link) !== -1){

                  this.color = 'red';
                  return this.clicked_src;

              }else{
                  this.color = 'grey'
                  return this.img_src
              }

             
          },

          destination(){

              let destination = '#';

              switch (this.link){
                    case 'home':
                      destination = '/home';
                      break;
                    case 'trending' :
                        destination = '/home#trending';
                        break;
                    case 'subscriptions' :
                        destination = '/home#subscriptions';
                        break;
                    case 'history' :
                        destination = '/home#history';
                        break;
              }

              return destination ;

          },

          myClass(){
               switch (this.color){
                case 'red' :
                     return 'fixed_sidebar_icon redshadow'
                     

                case 'grey':
                    return 'fixed_sidebar_icon greyshadow'
                   
             }
          },

        },

      
    
     

}


</script>