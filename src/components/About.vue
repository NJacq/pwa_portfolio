<template>
  <div class="accueil">
<p>65454656</p>
  </div>

</template>

<script>
import router from '../router'

export default {
  name: 'Presentation',
  data () {
    return {
      msg: 'Nicolas Jacquot'
    }
  },
  methods: {
    navigate () {
      router.go(-1)
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

@media screen and (max-width: 640px){

}
</style>
