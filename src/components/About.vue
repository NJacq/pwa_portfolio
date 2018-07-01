<template>
  <body>
   <div class="presentation">
     <div class="nav">
       <router-link class="desc" to="/About"><img class="logo" src="../assets/media/male_select.png" alt="compétences"></router-link>
       <router-link class="desc" to="/Competences"><img class="logo" src="../assets/media/competences.png" alt="compétences"></router-link>
       <router-link class="desc" to="/Realisations"><img class="logo" src="../assets/media/realisations.png" alt="compétences"></router-link>
       <router-link class="desc" to="/Contact"><img class="logo" src="../assets/media/contact.png" alt="compétences"></router-link>
     </div>
   </div>
  </body>

</template>

<script>
export default {
  name: 'About',
  data () {
    return {
      msg: 'Nicolas Jacquot'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

@media screen and (max-width: 640px){
.nav{
 display: flex;
 justify-content: space-around;
 margin-top: 20px;
}
.desc{
  width: 50px;
  height: 50px;
}
.logo{
  width: 90%;
  height: 90%;
}
}
</style>
