<template>
  <div class="Réalisation">
    <div class="nav">
      <router-link class="desc" to="/About"><img class="logo" src="../assets/media/male.png" alt="compétences"></router-link>
      <router-link class="desc" to="/Competences"><img class="logo" src="../assets/media/competences.png" alt="compétences"></router-link>
      <router-link class="desc" to="/Realisations"><img class="logo" src="../assets/media/realisations_select.png" alt="compétences"></router-link>
      <router-link class="desc" to="/Contact"><img class="logo" src="../assets/media/contact.png" alt="compétences"></router-link>
    </div>
      <h3>Réalisation</h3>
      <h4>{{real.nom}}</h4>
      <h5>Description</h5>
      <p class="descrip">{{real.description}}</p>
      <div>
      </div>
      <ul>
        <li v-bind:key="reali.url" v-for="reali in real.url.split(',')">
          <img class="imgProjet" v-bind:src="`${reali}`">
        </li>
      </ul>
      <h5>Compétences utilisées</h5>
      <ul>
        <li v-bind:key="realisa.imgcomp" v-for="realisa in real.imgcomp.split(',')">
          <img class="imgComp" v-bind:src="`${realisa}`">
        </li>
      </ul>
      <a v-bind:href="`${real.adresse}`"><button class="btn">Voir le projet</button></a>
  </div>
</template>

<script>
import axios from '../../axios.js'

export default {
  name: 'Realisation',
  data () {
    return {
      real: {},
      realis: {},
      id: ''
    }
  },
  created () {
    this.id = this.$route.params[0]
    axios.get('http://localhost/pwa_portfolio/src/model/realisationDetail.php?id=' + this.id)
      .then(response => {
        console.log(response.data)
        this.real = response.data
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
}
</style>
