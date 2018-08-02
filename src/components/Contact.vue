<template>
  <div class="contact">
    <h3>Contact</h3>
    <div class="telNum">
      <li class="tel" v-bind:key="inf.description" v-for="inf in info">
        <a class="icone" v-bind:href="`tel:${inf.telInterna}`" target="_blank"><img class="phone" src="static/media/phone.png"></a>
        <a class="number" v-bind:href="`tel:${inf.telInterna}`" target="_blank">{{inf.tel}}</a>
      </li>
    </div>
    <form id="form" class="form" @submit.prevent="onSubmit" method="post" action="">
      <div class="input">
        <label for="lastName"></label>
        <input :class="{ error: $v.lastName.$error}" type="text" id="lastName" v-model.trim="lastName" @input="$v.lastName.$touch()" placeholder="Votre nom">
        <div v-if="$v.lastName.$dirty">
          <p class="error-message" v-if="!$v.lastName.required">Un nom est obligatoire.</p>
        </div>
      </div>
      <div class="input">
        <label for="firstName"></label>
        <input :class="{ error: $v.firstName.$error }" type="text" id="firstName" v-model.trim="firstName" @input="$v.firstName.$touch()" placeholder="Votre prénom">
        <div v-if="$v.firstName.$dirty">
          <p class="error-message" v-if="!$v.firstName.required">Un prénom est obligatoire.</p>
        </div>
      </div>
         <div class="input">
        <label for="email"></label>
        <input :class="{ error: $v.email.$error }" type="text" id="email" v-model.trim="email" placeholder="Votre adresse mail">
        <div v-if="$v.email.$dirty">
          <p class="error-message" v-if="!$v.email.required">Une adresse mail est obligatoire.</p>
          <p class="error-message" v-if="!$v.email.email">Entrer une adresse mail valide !</p>
        </div>
      </div>
      <div class="input">
        <label for="message"></label>
        <textarea :class="{ error: $v.message.$error }" type="textarea" id="message" v-model.trim="message" @input="$v.message.$touch()" placeholder="Votre message"></textarea>
        <div v-if="$v.message.$dirty">
          <p class="error-message" v-if="!$v.message.required">Un message est obligatoire.</p>
        </div>
      </div>
      <button class="btn" name="envoi" type="submit" @click="validate"><span class="center">Envoyer</span></button>
    </form>
    <div id="response-envoi"></div>
    <div id="response-envoi-echec"></div>
    <div class="nav">
      <router-link class="desc" to="/"><img class="logo" src="static/media/home.png" alt="accueil"></router-link>
      <router-link class="desc" to="/About"><img class="logo" src="static/media/male.png" alt="présentation"></router-link>
      <router-link class="desc" to="/Competences"><img class="logo" src="static/media/competences.png" alt="compétences"></router-link>
      <router-link class="desc" to="/Realisations"><img class="logo" src="static/media/realisations.png" alt="réalisations"></router-link>
      <router-link class="desc" to="/Contact"><img class="logo" src="static/media/contact_select.png" alt="contact"></router-link>
    </div>
  </div>

</template>

<script>
import axios from 'axios'
import { required, email } from 'vuelidate/lib/validators'

export default {
  data () {
    return {
      form: {
        lastName: '',
        firstName: '',
        email: '',
        message: ''
      },
      info: {}
    }
  },
  methods: {
    validate () {
      this.$v.$touch() // it will validate all fields
      if (!this.$v.$invalid) { // invalid, becomes true when a validations return false
      //  you dont have validation error.So do what u want to do here
      }
    },
    onSubmit (e) {
      e.preventDefault()
      this.$v.$touch()
      if (this.$v.$invalid) {
        this.submitStatus = 'ERROR'
      } else {
        var formData = new FormData()
        const url = 'https://nicolasj.promo-17.codeur.online/portfolio_nicolas/static/model/envoi.php'
        formData.append('lastName', this.lastName)
        formData.append('firstName', this.firstName)
        formData.append('email', this.email)
        formData.append('message', this.message)
        axios.post(url, formData)
          .then(function (response) {
            return response.text()
          })
          .then(function (response) {
            console.log(response)
          })
        this.$v.$touch()
        if (this.$v.$invalid) {
          this.submitStatus = '<p class="echec">L\'envoi de votre message a échoué!</p>'
          document.getElementById('response-envoi').innerHTML = this.submitStatus
        } else {
          // do your submit logic here
          this.submitStatus = 'Envoi en cours'
          document.getElementById('response-envoi').innerHTML = this.submitStatus
          setTimeout(() => {
            this.submitStatus = 'L\'envoi de votre message a réussi!'
            document.getElementById('response-envoi').innerHTML = ''
            document.getElementById('response-envoi').innerHTML = this.submitStatus
          }, 500)
        }
      }
      // do your submit logic here
      this.submitStatus = 'PENDING'
      setTimeout(() => {
        this.submitStatus = 'OK'
      }, 500)
    }
  },
  validations: {
    lastName: {
      required
    },
    firstName: {
      required
    },
    email: {
      required,
      email
    },
    message: {
      required
    }
  },
  created () {
    axios.get('https://nicolasj.promo-17.codeur.online/back_office_portfolio/public/api/informations')
      .then(response => {
        console.log(response)
        this.info = response.data['hydra:member']
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
.telNum{
  padding-bottom: 5%;
}
.phone{
  width: 50px;
  height: 50px;
}
.tel{
  display: flex;
  margin: auto;
  margin-left: 15px;
  margin-bottom: 3%;
}
.number{
  margin: 0;
  margin-top: 15px;
}
input{
  width: 80%;
  color: #003150;
  font-size: 22px;
  font-family: "blue";
  background-color: #ddf2ff;
  border: none;
  border-bottom: #003150 1px solid;
  margin-bottom: 3%;
}
.champs{
  margin: auto;
  margin-top: 30px;
  text-align: center;
}
textarea{
  width: 80%;
  height: 100px;
  padding-top: 5px;
  /* border-radius: 10px; */
  color: #003150;
  font-size: 22px;
  font-family: "blue";
  background-color: #ddf2ff;
  border: none;
  border-bottom: #003150 1px solid;
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
.contact{
  margin-bottom: 25%;
}
.form {
 display: inline;
 text-align: center;
}
.validators {
 display: inline-block;
 text-align: center;
 vertical-align: top;
}
.input {
  padding: 5px;
}
input:focus {
  outline: none;
}
.error {
  color: red;
  /* border: solid red; */
}
.error-message {
 font-size: 15px;
 color: red;
}
.btn{
  color: #003150;
  background-color: #f79521;
  font-family: "blue";
  text-align: center;
  margin: auto;
  border: none;
  margin-top: 4%;
}
.center{
  margin: auto;
}
::-webkit-input-placeholder /* WebKit, Blink, Edge */
{
  color: #003150;
}
:-moz-placeholder{
  color: #003150;
}
li{
  list-style-type: none;
}
#response-envoi{
  color:green;
  text-align: center;
  margin-top: 5%;
  margin: 2%;
  font-size: 18px;
  font-family: "blue";
}
}
</style>
