import { createRouter, createWebHistory } from 'vue-router'
//import HelloWorld from './components/HelloWorld.vue'
import Header from './components/Header.vue'

export default createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: '/',
      component: Header,
    }
  ]
})