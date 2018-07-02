<template>
  <body>
   <div class="presentation">
    <div class="nav">
      <router-link class="desc" to="/About"><img class="logo" src="../assets/media/male_select.png" alt="compétences"></router-link>
      <router-link class="desc" to="/Competences"><img class="logo" src="../assets/media/competences.png" alt="compétences"></router-link>
      <router-link class="desc" to="/Realisations"><img class="logo" src="../assets/media/realisations.png" alt="compétences"></router-link>
      <router-link class="desc" to="/Contact"><img class="logo" src="../assets/media/contact.png" alt="compétences"></router-link>
      </div>
      <h1>Présentation</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Malesuada pellentesque elit eget gravida cum sociis. Enim lobortis scelerisque fermentum dui. Convallis tellus id interdum velit. Nam aliquam sem et tortor consequat id. Euismod in pellentesque massa placerat. Amet mattis vulputate enim nulla aliquet porttitor lacus. Gravida neque convallis a cras semper auctor. Consectetur a erat nam at lectus urna.</p>
      <!-- <input type="button" value="Télécharger mon C.V" onclick="window.location='http://nicolasj.promocodeur-17..online/C.V_Nicolas_Jacquot.pdf';"> -->
      <button type="submit" onclick="window.location='http://nicolasj.promo-17.codeur.online/C.V_Nicolas_Jacquot.pdf';">Télécharger<br />mon CV</button>
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
h1{
  color: #003150;
  font-family: "blue";
  font-size: 30px;
  margin-left: 6%;
}
p{
  color: #003150;
  font-family: "blue";
  font-size: 24px;
  text-align: center;
  margin-left: 15%;
  margin-right: 15%;
}
button{
  color: #003150;
  background-color: #f79521;
  font-size: 24px;
  font-family: "blue";
  width: 180px;
  height: 70px;
  display: flex;
  margin: auto;
  justify-content: space-around;
  border-radius: 12px;
 }
}
</style>
