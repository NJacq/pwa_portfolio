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
      <p>{{pres.description}}</p>
      <a v-bind:href="`${pres.cv_url}`" download="C.V_Nicolas_Jacquot.pdf"><button type="submit" name="telecharger" class="btn">Télécharger mon CV</button></a>
    </div>
    </body>

</template>

<script>
import axios from '../../axios.js'

export default {
  name: 'Presentation',
  data () {
    return {
      pres: {}
    }
  },
  created () {
    axios.get('http://localhost/pwa_portfolio/src/model/presentation.php')
      .then(response => {
        console.log(response)
        this.pres = response.data
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
a{
  text-decoration: none;
  color: #003150;
}
.btn{
  color: #003150;
  background-color: #f79521;
  font-family: "blue";
  font-size: 25px;
  text-align: center;
  width: 200px;
  height: 70px;
}

}
</style>
