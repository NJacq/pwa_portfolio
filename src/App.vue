<template>
<body>
  <div id="app">
    <router-view/>
  </div>
</body>
</template>

<script>
export default {
  name: 'App'
}
</script>

<style>

body{
  background-color: #ddf2ff;
  margin: 0 auto;

}
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: white;
  height: 100%;
  background-color: #003150;
  }
</style>
