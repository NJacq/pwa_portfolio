<template>
  <div class="Contact">
    <div class="nav">
      <router-link class="desc" to="/About"><img class="logo" src="../assets/media/male.png" alt="compétences"></router-link>
      <router-link class="desc" to="/Competences"><img class="logo" src="../assets/media/competences.png" alt="compétences"></router-link>
      <router-link class="desc" to="/Realisations"><img class="logo" src="../assets/media/realisations.png" alt="compétences"></router-link>
      <router-link class="desc" to="/Contact"><img class="logo" src="../assets/media/contact_select.png" alt="compétences"></router-link>
    </div>
   <h3>Contact</h3>
    <div class="tel">
      <a class="icone" v-bind:href="`tel:${pres.tel_interna}`"><img class="phone" src="../assets/media/phone.png"></a>
      <a class="number" v-bind:href="`sms:${pres.tel_interna}`">{{pres.tel}}</a>
    </div>
     <form id="form" @submit="checkForm" action="" method="post">
      <div class="champs">
        <input  v-model="nom" placeholder="Votre nom">
        <p id="nom" name="nom" errorMessage="Veuillez entrer un nom" class="form-control" minlength="5" required></p>
        <input  v-model="prenom" placeholder="Votre prénom">
        <p id="prenom" name="prenom" errorMessage="Veuillez entrer un prénom" class="form-control" minlength="5" required></p>
        <input  v-model="mail" placeholder="Votre adresse mail">
        <p id="mail" name="mail" errorMessage="Veuillez entrer une adresse mail valide" class="form-control" minlength="5" required></p>
        <textarea name="message" form="usrform" placeholder="Entrer votre message..."></textarea>
      </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
  </div>
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
.phone{
  width: 50px;
  height: 50px;
}
.tel{
  display: flex;
  margin: auto;
  margin-left: 15px;
}
.number{
  margin: 0;
  margin-top: 17px;
}
input{
  width: 80%;
  color: #003150;
  font-size: 22px;
  font-family: "blue";
}
.champs{
  margin: auto;
  margin-top: 20px;
  text-align: center;
}
textarea{
  width: 82%;
  height: 100px;
  padding-top: 5px;
  border-radius: 10px;
  color: #003150;
  font-size: 22px;
  font-family: "blue";
  background-color: rgb(250, 250, 250);
}
button{
  height: 40px;
  margin-top: 30px;
}
.icone{
  margin: 0;
}
.number{
  color: #003150;
  font-family: "blue";
  font-size: 24px;
  text-align: center;
  text-decoration: none;
  }
}
</style>
