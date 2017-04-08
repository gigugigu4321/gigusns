import VueRouter from 'vue-router'
import Vue from 'vue'

Vue.use(VueRouter)

export default new VueRouter({
  mode: 'history',
  routes: [
    { path: '/'        , component: require('./components/TopPage.vue')},
    { path: '/signin'  , component: require('./components/Signin.vue')},
    { path: '/signup'  , component: require('./components/TopPage.vue')},
    { path: '/example' , component: require('./components/Example.vue')},
  ],
  scrollBehavior (to, from, savedPosition) {
    if (savedPosition) {
      return savedPosition
    } else {
      return { x: 0, y: 0 }
    }
  },
})