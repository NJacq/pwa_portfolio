// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import VueRouter from 'vue-router'
import App from './App'
import About from './components/About'
import Home from './components/Home'
import Contact from './components/Contact'
import Competences from './components/Competences'
import Realisations from './components/Realisations'
import DetailProjet from './components/DetailProjet'

Vue.use(VueRouter)

const routes = [
  {path: '/', component: Home},
  {path: '/About', component: About},
  {path: '/Competences', component: Competences},
  {path: '/Realisations', component: Realisations},
  {path: '/Contact', component: Contact},
  {path: '/Realisation', component: DetailProjet}

]
const router = new VueRouter({
  routes,
  mode: 'history'
})

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  render: h => h(App)
  // components: { App },
  // template: '<App/>'
})
