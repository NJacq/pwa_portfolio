<template>
  <div class="realisation">
    <h3>Réalisation</h3>
    <h4>{{real.nom}}</h4>
    <h5>Description</h5>
    <p class="descrip">{{reali.description}}</p>
    <div>
    </div>
    <ul>
      <li v-bind:key="img.url" v-for="img in imgs.url">
        <img class="imgProjet" v-bind:src="img.url">
      </li>
    </ul>
    <h5>Compétences utilisées</h5>
    <ul>
      <li v-bind:key="com.adresse" v-for="com in comp.adresse">
        <img class="imgComp" v-bind:src="com.adresse">
      </li>
    </ul>
    <a v-bind:href="`${realisa.github}`" target="_blank"><button class="btn">Voir le code</button></a>
    <a v-bind:href="`${realis.adresse}`" target="_blank"><button class="btn">Voir le projet</button></a>

    <div class="nav">
      <router-link class="desc" to="/"><img class="logo" src="https://nicolasj.promo-17.codeur.online/portfolio_nicolas/static/media/home.png" alt="accueil"></router-link>
      <router-link class="desc" to="/About"><img class="logo" src="https://nicolasj.promo-17.codeur.online/portfolio_nicolas/static/media/male.png" alt="présentation"></router-link>
      <router-link class="desc" to="/Competences"><img class="logo" src="https://nicolasj.promo-17.codeur.online/portfolio_nicolas/static/media/competences.png" alt="compétences"></router-link>
      <router-link class="desc" to="/Realisations"><img class="logo" src="https://nicolasj.promo-17.codeur.online/portfolio_nicolas/static/media/realisations_select.png" alt="réalisations"></router-link>
      <router-link class="desc" to="/Contact"><img class="logo" src="https://nicolasj.promo-17.codeur.online/portfolio_nicolas/static/media/contact.png" alt="contact"></router-link>
    </div>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  name: 'Realisation',
  data () {
    return {
      real: { 'nom': '' },
      reali: { 'description': '' },
      realis: { 'adresse': '' },
      realisa: { 'github': '' },
      comp: { 'adresse': '' },
      imgs: { 'url': '' }
    }
  },
  created () {
    this.id = this.$route.params[0]
    axios.get('https://nicolasj.promo-17.codeur.online/back_office_portfolio/public/api/projets/' + this.id)
      .then(response => {
        var competences = response.data.competences
        var images = response.data.Images
        // console.log(images)
        // console.log(response.data)
        var dataAdresse = []
        var dataUrl = []
        this.real.nom = response.data.nom
        this.reali.description = response.data.description
        this.realis.adresse = response.data.adresse
        this.realisa.github = response.data.github
        for (let image of images) {
          console.log(image)
          axios.get('https://nicolasj.promo-17.codeur.online' + image)
            .then(response => {
              console.log(response.data)
              dataUrl.push(response.data)
            })
        }
        for (let competence of competences) {
          axios.get('https://nicolasj.promo-17.codeur.online' + competence)
            .then(response => {
              console.log(response.data)
              dataAdresse.push(response.data)
            })
            .catch(err => {
              console.log(err)
            })
        }
        this.comp.adresse = dataAdresse
        this.imgs.url = dataUrl
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
  font-size: 24px;
  color: black;
  text-align: center;
}
h5{
  color: #003150;
  font-family: "blue";
  font-size: 20px;
  margin-left: 6%;
}
.descrip{
  color: black;
}
a{
  text-decoration: none;
}
ul{
  padding: 0;
  -webkit-padding-start: 0;
  text-align: center;
  margin: 0;
}
li{
  list-style: none;
  display: inline;
  margin: auto;
}
.imgProjet{
  width: 40%;
  height: 40%;
  margin: 1%;
}
.imgComp{
  width: 30%;
  height: 30%;
  margin: 1%;
}
.realisation{
  margin-bottom: 25%;
}
}
</style>
