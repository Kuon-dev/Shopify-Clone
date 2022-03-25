<script setup>
//import HelloWorld from './components/HelloWorld.vue'
//import TheWelcome from './components/TheWelcome.vue'
import Header from "./components/Header.vue";
import "./assets/tailwind.css";
</script>

<template>
<div class="px-36">
  <div class="background-yellow">
    <header>
      <Header />
    </header>
  </div>
  <div>
    <main>
      <p>Hello world</p>
    </main>
  </div>
  <router-view />
</div>
</template>

<style>
.background-yellow {
  background-color: #fbf7ed;
}
</style>
