<template>
  <div class="competences">
    <h3>Compétences</h3>
      <h4>Ce que je sais faire</h4>
      <div class="liste">
        <ul>
            <li v-bind:key="comp.adresse" v-for="comp in orderBy(comps, 'nom')">
                <img class="logoComp" v-bind:src="comp.adresse">
            </li>
        </ul>
      </div>
    <div class="nav">
      <router-link class="desc" to="/"><img class="logo" src="static/media/home.png" alt="accueil"></router-link>
      <router-link class="desc" to="/About"><img class="logo" src="static/media/male.png" alt="présentation"></router-link>
      <router-link class="desc" to="/Competences"><img class="logo" src="static/media/competences_select.png" alt="compétences"></router-link>
      <router-link class="desc" to="/Realisations"><img class="logo" src="static/media/realisations.png" alt="réalisations"></router-link>
      <router-link class="desc" to="/Contact"><img class="logo" src="static/media/contact.png" alt="contact"></router-link>
    </div>
    </div>
</template>

<script>
import axios from 'axios'

export default {
  name: 'Competences',
  data () {
    return {
      comps: {}
    }
  },
  created () {
    axios.get('https://nicolasj.promo-17.codeur.online/back_office_portfolio/public/api/competences')
      .then(response => {
        console.log(response)
        this.comps = response.data['hydra:member']
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
h4{
  font-family: "blue";
  font-size: 18px;
  color: #003150;
  margin-left: 10%;
}
.logoComp{
  width: 22%;
  height: 22%;
  margin-left: 2%;
  margin-right: 2%;
}
ul{
  padding: 0;
  margin: 0;
  text-align: center;
}
li{
  list-style: none;
  display: inline;
  margin: auto;
}
.competences{
  margin: 0 auto;
}
}
</style>
