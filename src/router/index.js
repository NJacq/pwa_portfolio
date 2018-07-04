import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/components/Home'
import Presentation from '@/components/About'
import Competences from '@/components/Competences'
import Realisations from '@/components/Realisations'
import DetailProjet from '@/components/DetailProjet'
import Contact from '@/components/Contact'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Accueil',
      component: Home
    },
    {
      path: '/',
      name: 'About',
      component: Presentation
    },
    {
      path: '/',
      name: 'Competences',
      component: Competences
    },
    {
      path: '/',
      name: 'Realisations',
      component: Realisations
    },
    {
      path: '/',
      name: 'Realisation',
      component: DetailProjet
        },
    {
      path: '/',
      name: 'Contact',
      component: Contact
    }
  ]
})
