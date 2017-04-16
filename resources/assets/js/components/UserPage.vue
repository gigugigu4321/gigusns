<template>
<div>
  <section class="jumbotron text-center">
    <div class="container">
      <img src="https://placehold.jp/150x150.png" alt="Card image cap">
      <h1 class="jumbtron-heading" v-if="user">{{user.name}}</h1>
      <p class="lead text-muted" v-if="user">{{user.account_id}}</p>

      <div v-if="$route.params.id === userState.user.name">
        <form enctype="multipart/form-data" method="post" name="userform">
          <div class="form-control-label">
            <h3>ユーザー編集</h3>
            <label for="name" class="form-control-label">ユーザー名</label>
            <div>
              <input id="name" v-if="user" type="text" class="col-md-6 form-control" :value="user.name">
            </div>
          </div>
          <p>画像<input type="file" name="image" accept="image/jpeg,image/png,image/webp,image/gif"></p>
          <div class="form-control-label">
            <button class="btn btn-primary" @click="editUser" type="button">
              編集
            </button>
          </div>
        </form>
      </div>

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
        this.user = res.data
      })
    },
    editUser () {
      const form = document.forms.namedItem('userform')
      const formData = new window.FormData(form)
      http.post('users/' + this.$route.params.id, formData, res => {
        console.log(res.data)
      })
    }
  }
}
</script>
