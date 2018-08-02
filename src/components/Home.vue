<template>
  <div class="accueil">
    <div class="titre">
    <h1>{{ msg }}</h1>
    <h2>Développeur web junior</h2>
  </div>
  <div class="rub">
    <figure>
      <router-link class="desc" to="/About"><img class="logo" src="static/media/male.png" alt="présentation"><figcaption>Présentation</figcaption></router-link>
    </figure>
    <figure>
      <router-link class="desc" to="/Competences"><img class="logo" src="static/media/competences.png" alt="compétences"><figcaption>Compétences</figcaption></router-link>
    </figure>
    <figure>
      <router-link class="desc" to="/Realisations"><img class="logo" src="static/media/realisations.png" alt="réalisations"><figcaption>Réalisations</figcaption></router-link>
    </figure>
    <figure>
      <router-link class="desc" to="/Contact"><img class="logo" src="static/media/contact.png" alt="contact"><figcaption>Contact</figcaption></router-link>
    </figure>
  </div>
  <router-view></router-view>
</div>
</template>

<script>
export default {
  name: 'Home',
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
src: url('/portfolio_nicolas/static/fonts/Blue.ttf');
}
@media screen and (max-width: 640px){
.titre{
  background-color: #003150;
  height: 200px;
}
h1, h2 {
  font-family: 'blue';
  text-align: center;
  color: white;
  margin: auto;
  position: relative;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-130%);
  }
.rub{
  background-color: #ddf2ff;
  height: 100%;
  display: block;
  text-align: center;
  margin-top: 40%;
}
.logo{
  height: 60%;
  width: 60%;
}
figure{
  display: inline-block;
  position: relative;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  margin: 0;
  padding: 0;
  margin-top: 2%;
  margin-bottom: 2%;
  width: 40%;
  height: 40%;

}
.desc{
  font-family: 'blue';
  font-size: 20px;
  color: #003150;
  text-decoration: none;
  margin: auto;
}
figcaption{
  margin-bottom: 50px;
  margin-top: 10px;
}
}
</style>
