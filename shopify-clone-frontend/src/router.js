import { createRouter, createWebHistory } from 'vue-router'
//import HelloWorld from './components/HelloWorld.vue'
import Landing from './views/landing.vue'
import Login from './views/login.vue'
import SignUp from './views/signup.vue'
import Home from './views/home.vue'

export default createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: '/',
      name: 'landing',
      component: Landing,
      props: true,
    },
    {
      path: '/login',
      name: 'login',
      component: Login,
      props: true,
    },
    {
      path: '/signup',
      name: 'signup',
      component: SignUp,
      props: true,
    },
    {
      path: '/user/home',
      name: 'homepg',
      component: Home,
      props: true,
    }
  ]
})