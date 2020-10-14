<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <ThemeToggle></ThemeToggle>
  <Lorum title="Dynamic Theme Switcher" ipsum="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
      standard dummy
      text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
      specimen
      book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
      essentially
      unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
      and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."/>
</template>

<script>
import Lorum from './components/Lorum.vue'
import ThemeToggle from './components/ThemeToggle.vue'

export default {
  name: 'App',
  components: {
    Lorum,
    ThemeToggle
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
