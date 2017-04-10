<template>
<div>
  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbtron-heading">GIGU SNS</h1>
      <p class="lead text-muted">ここに説明文</p>
    </div>
  </section>
  <div class="album text-muted">
    <div class="container">
      <div class="row">
        <div class="card" v-for="user in users">
          <img src="https://placehold.jp/150x150.png" alt="Card image cap">
          <h4 class="card-title"><router-link :to="'/' + user.account_id"> {{ user.name}} </router-link></h4>
          <p class="card-text">@{{user.account_id}}</p>
        </div>
      </div>
    </div>
  </div>
</div>
</template>
<script>
import http from '../services/http'
import userStore from '../stores/userStore'

export default {
  mounted () {
    this.fetchAllUsers()
  },
  data() {
    return {
      users: null,
      userState: userStore.state,
    }
  },
  methods: {
    fetchAllUsers () {
      http.get('users', res => {
        console.log(res.data)
        this.users = res.data
      })
    }
  }
}
</script>
