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
  margin: 0 auto;
  }
h3{
  color: #003150;
  font-family: "blue";
  font-size: 30px;
  margin-left: 6%;
}
p{
  color: #003150;
  font-family: "blue";
  font-size: 24px;
  text-align: center;
  margin-left: 15%;
  margin-right: 15%;
}
button{
  color: #003150;
  background-color: #f79521;
  font-size: 28px;
  line-height: 120%;
  font-family: "blue";
  width: 180px;
  height: 70px;
  display: flex;
  margin: auto;
  border-radius: 12px;
 }
.liste{
  margin: 0 auto;
}

</style>
