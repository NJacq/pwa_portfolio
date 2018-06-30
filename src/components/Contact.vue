<template>
  <div class="Competences"></div>

</template>

<script>
export default {
  name: 'Contact',
  data () {
    return {
      msg: 'Nicolas Jacquot'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

@media screen and (max-width: 640px){
.accueil{
  background-color: #003150;
}
.titre{
  background-color: #003150;
  height: 200px;
  }
h1, h2 {
  font-weight: normal;
  text-align: center;
  color: white;
  }

/* li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
} */
.rub{
  background-color: #ddf2ff;
  height: 400px;
  text-align: center;
}
.logo{
  height: 35%;
  width: 35%;
}
figure{
  display: inline-block;
  text-align: center;
  width: 60%;
  margin: -10%;
  margin-top: 20%;

}
}
</style>
