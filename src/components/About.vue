<template>
  <body>
   <div class="presentation">
      <h3>Présentation</h3>
      <li v-bind:key="pre.description" v-for="pre in pres">
        <p>{{pre.description}}</p>
        <a v-bind:href="pre.cvUrl" target="_blank" value="C.V_Nicolas_Jacquot.pdf"><button type="submit" name="telecharger" class="btn">Voir mon CV</button></a>
         <a v-bind:href="pre.cvUrl" target="_blank" download="C.V_Nicolas_Jacquot.pdf"><button type="submit" name="telecharger" class="btn">Télécharger mon CV</button></a>
      </li>
    </div>
    <div class="nav">
      <router-link class="desc" to="/"><img class="logo" src="static/media/home.png" alt="accueil"></router-link>
      <router-link class="desc" to="/About"><img class="logo" src="static/media/male_select.png" alt="présentation"></router-link>
      <router-link class="desc" to="/Competences"><img class="logo" src="static/media/competences.png" alt="compétences"></router-link>
      <router-link class="desc" to="/Realisations"><img class="logo" src="static/media/realisations.png" alt="réalisations"></router-link>
      <router-link class="desc" to="/Contact"><img class="logo" src="static/media/contact.png" alt="contact"></router-link>
    </div>
    </body>

</template>

<script>
import axios from 'axios'

export default {
  name: 'Presentation',
  data () {
    return {
      pres: {}
    }
  },
  created () {
    axios.get('https://nicolasj.promo-17.codeur.online/back_office_portfolio/public/api/informations')
      .then(response => {
        console.log(response)
        this.pres = response.data['hydra:member']
        // this.comp = JSON.parse(response.data)
      })
      .catch(Err => {
        // console.log(err)
      })
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
.nav{
 display: flex;
 justify-content: space-around;
 position: fixed;
 width: 100%;
 padding-top: 3%;
 bottom: 0;
 background-color: #ddf2ff;
 border-top: #003150 solid 2px;
}
.desc{
  width: 50px;
  height: 50px;
}
.logo{
  width: 90%;
  height: 90%;
}
a{
  text-decoration: none;
  color: #003150;
}
.presentation{
  margin-bottom: 25%;
}
li{
  list-style-type: none;
}
}
</style>
