<template>
  <body>
   <div class="presentation">
    <div class="nav">
      <router-link class="desc" to="/About"><img class="logo" src="../assets/media/male_select.png" alt="compétences"></router-link>
      <router-link class="desc" to="/Competences"><img class="logo" src="../assets/media/competences.png" alt="compétences"></router-link>
      <router-link class="desc" to="/Realisations"><img class="logo" src="../assets/media/realisations.png" alt="compétences"></router-link>
      <router-link class="desc" to="/Contact"><img class="logo" src="../assets/media/contact.png" alt="compétences"></router-link>
    </div>
      <h3>Présentation</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Malesuada pellentesque elit eget gravida cum sociis. Enim lobortis scelerisque fermentum dui. Convallis tellus id interdum velit. Nam aliquam sem et tortor consequat id. Euismod in pellentesque massa placerat. Amet mattis vulputate enim nulla aliquet porttitor lacus. Gravida neque convallis a cras semper auctor. Consectetur a erat nam at lectus urna.</p>
      <!-- <input type="button" value="Télécharger mon C.V" onclick="window.location='http://nicolasj.promocodeur-17..online/C.V_Nicolas_Jacquot.pdf';"> -->
      <a href="https://nicolasj.promo-17.codeur.online/C.V_Nicolas_Jacquot.pdf" download="C.V_Nicolas_Jacquot.pdf">Télécharger<br />mon CV</a>
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
@font-face{
font-family: 'blue';
src: url('../assets/fonts/Blue.ttf');
}
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
