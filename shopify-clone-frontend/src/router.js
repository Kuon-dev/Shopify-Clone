import { createRouter, createWebHistory } from 'vue-router'
//import HelloWorld from './components/HelloWorld.vue'
import Landing from './views/landing.vue'
import Login from './views/login.vue'

export default createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: '/',
      name: 'landing',
      component: Landing,
    },
    {
      path: '/login',
      name: 'login',
      component: Login,
    }
  ]
})