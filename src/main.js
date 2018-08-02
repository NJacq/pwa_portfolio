// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import VueRouter from 'vue-router'
import Vuelidate from 'vuelidate'
import App from './App'
import About from './components/About'
import Home from './components/Home'
import Contact from './components/Contact'
import Competences from './components/Competences'
import Realisations from './components/Realisations'
import Realisation from './components/Realisation'

Vue.use(VueRouter)
Vue.use(Vuelidate)

const routes = [
  {path: '/', component: Home},
  {path: '/About', component: About},
  {path: '/Competences', component: Competences},
  {path: '/Realisations', component: Realisations},
  {path: '/Contact', component: Contact},
  {path: '/Realisation/([0-9]+)', component: Realisation}
]
const router = new VueRouter({
  routes,
  base: '/portfolio_nicolas/',
  mode: 'history'
})

/* eslint-disable no-new */
new Vue({
  el: '#app',
  validations: {},
  router,
  render: h => h(App)
})

if ('serviceWorker' in navigator) {
  window.addEventListener('load', function () {
    navigator.serviceWorker.register('./service-worker.js').then(function (registration) {
      console.log('Service worker successfully registered on scope', registration.scope)
    }).catch(function (Error) {
      console.log('Service worker failed to register')
    })
  })
}
