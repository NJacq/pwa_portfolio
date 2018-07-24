<template>
  <div class="contact">
    <h3>Contact</h3>
    <div class="tel">
      <a class="icone" v-bind:href="`tel:${info.tel_interna}`" target="_blank"><img class="phone" src="static/media/phone.png"></a>
      <a class="number" v-bind:href="`tel:${info.tel_interna}`" target="_blank">{{info.tel}}</a>
    </div>
    <form id="form" class="form" @submit.prevent="onSubmit" method="post" action="static/model/traitement_formulaire.php">
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
      console.log('hihi')
      this.$v.$touch() // it will validate all fields
      if (!this.$v.$invalid) { // invalid, becomes true when a validations return false
      //  you dont have validation error.So do what u want to do here
        console.log(this.lastName)
      }
      var formData = new FormData()
      formData.append('lastName', this.lastName)
      formData.append('firstName', this.firstName)
      formData.append('email', this.email)
      formData.append('message', this.message)
      fetch('https://nicolasj.promo-17.codeur.online/portfolio_nicolas/static/model/traitement_formulaire.php', { method: 'POST', body: formData })
      // axios.post('/someUrl', formData)
      //   .then((response) => {
      //     // success callback
      //   }, (response) => {
      //     // error callback
      //   })
    },
    onSubmit () {
      console.log('submit!')
      this.$v.$touch()
      if (this.$v.$invalid) {
        this.submitStatus = 'ERROR'
      } else {
        // do your submit logic here
        this.submitStatus = 'PENDING'
        setTimeout(() => {
          this.submitStatus = 'OK'
        }, 500)
      }
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
    axios.get('https://nicolasj.promo-17.codeur.online/portfolio_nicolas/static/model/contact.php')
      .then(response => {
        console.log(response)
        this.info = response.data
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
  border: 1px solid red;
}
.error-message {
 font-size: 15px;
 color: red;
}
/* .btn{
  color: #003150;
  background-color: #f79521;
  font-family: "blue";
  text-align: center;
  margin: auto;
} */
.center{
  margin: auto;
}
}
</style>
