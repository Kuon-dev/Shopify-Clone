<script setup>
//import HelloWorld from './components/HelloWorld.vue'
//import TheWelcome from './components/TheWelcome.vue'
import Header from "./components/Header.vue";
import "./assets/tailwind.css";
</script>

<template>
<div class="px-36">
  <div class="background-yellow">
    <router-view />
  </div>
</div>
</template>

<style>
.background-yellow {
  background-color: #fbf7ed;
}
</style>
