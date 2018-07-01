import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/components/Home'
import Presentation from '@/components/About'
import Competences from '@/components/Competences'
import Projects from '@/components/Projects'
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
      component: Projects
    },
    {
      path: '/',
      name: 'Contact',
      component: Contact
    }
  ]
})
