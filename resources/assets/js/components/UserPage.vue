<template>
<div>
  <section class="jumbotron text-center">
    <div class="container">
      <img src="https://placehold.jp/150x150.png" alt="Card image cap">
      <h1 class="jumbtron-heading">ユーザーページテンプレート</h1>
      <p class="lead text-muted">ここに説明文</p>
    </div>
  </section>
  <div class="album text-muted">
    <div class="container">
      <div class="row">
        <div class="card">
          <img src="https://placehold.jp/150x150.png" alt="Card image cap">
          <p class="card-text">test</p>
        </div>
        <div class="card">
          <img src="https://placehold.jp/150x150.png" alt="Card image cap">
          <p class="card-text">test</p>
        </div>
        <div class="card">
          <img src="https://placehold.jp/150x150.png" alt="Card image cap">
          <p class="card-text">test</p>
        </div>

        <div class="card">
          <img src="https://placehold.jp/150x150.png" alt="Card image cap">
          <p class="card-text">test</p>
        </div>
        <div class="card">
          <img src="https://placehold.jp/150x150.png" alt="Card image cap">
          <p class="card-text">test</p>
        </div>
        <div class="card">
          <img src="https://placehold.jp/150x150.png" alt="Card image cap">
          <p class="card-text">test</p>
        </div>

        <div class="card">
          <img src="https://placehold.jp/150x150.png" alt="Card image cap">
          <p class="card-text">test</p>
        </div>
        <div class="card">
          <img src="https://placehold.jp/150x150.png" alt="Card image cap">
          <p class="card-text">test</p>
        </div>
        <div class="card">
          <img src="https://placehold.jp/150x150.png" alt="Card image cap">
          <p class="card-text">test</p>
        </div>

        <div class="card">
          <img src="https://placehold.jp/150x150.png" alt="Card image cap">
          <p class="card-text">test</p>
        </div>
        <div class="card">
          <img src="https://placehold.jp/150x150.png" alt="Card image cap">
          <p class="card-text">test</p>
        </div>
        <div class="card">
          <img src="https://placehold.jp/150x150.png" alt="Card image cap">
          <p class="card-text">test</p>
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
    this.fetchUser()
  },
  data() {
    return {
      user: null,
      userState: userStore.state,
    }
  },
  methods: {
    fetchUser () {
      http.get('users/' + this.$route.params.id, res => {
        console.log(res.data)
        this.user = res.data
      })
    }
  }
}
</script>
