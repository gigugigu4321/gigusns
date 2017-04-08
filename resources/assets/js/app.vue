<template>
  <div id="app">
    <navbar></navbar>
    <router-view></router-view>
    <vuefooter></vuefooter>
  </div>
</template>
<script>
export default {
  components: {
    navbar: require('./components/Navbar.vue'),
    vuefooter: require('./components/Footer.vue')
  }
}
</script>
