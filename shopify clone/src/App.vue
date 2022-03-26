<script setup>
//import HelloWorld from './components/HelloWorld.vue'
//import TheWelcome from './components/TheWelcome.vue'
import "./assets/tailwind.css";
</script>

<template>
  <div class="container_padding">
  <router-view/>
  </div>
</template>

<style>
.background-yellow {
  background-color: #fbf7ed;
}

@media (min-width: 1536px){
  .container_padding {padding: 0 7.5rem 0 7.5rem}
}
</style>
