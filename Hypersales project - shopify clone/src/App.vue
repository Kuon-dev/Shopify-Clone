<script setup>
//import HelloWorld from './components/HelloWorld.vue'
//import TheWelcome from './components/TheWelcome.vue'
import Header from "./components/Header.vue";
import "./assets/tailwind.css";
</script>

<template>
  <div class="background-yellow">
    <header>
      <Header />
    </header>

    <main>
      <p>Hello world</p>
    </main>
  </div>
</template>

<style>
.background-yellow {
  background-color: #fbf7ed;
}
</style>
