<template>
    <div class="container">
      <h2 class="form-login-heading">ログイン</h2>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" v-model="email" @keyup.enter="login" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" v-model="password" @keyup.enter="login" placeholder="Password" required>
      <div class="checkbox">
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" @click="login">ログイン</button>
      <div v-if="showAlert">{{alertMessage}}</div>
    </div>
</template>
<script>
import userStore from '../stores/userStore'

export default {
  data() {
    return {
      email: '',
      password: '',
      showAlert: false,
      alertMessage: '',
      userState: userStore.state
    }
  },
  methods: {
    login () {
      userStore.login(this.email, this.password, res => {
        this.$router.push('/' + this.userState.user.account_id)
      }, error => {
        this.showAlert = true
        this.alertMessage = 'ログイン失敗'
      })
    }
  }
}
</script>
