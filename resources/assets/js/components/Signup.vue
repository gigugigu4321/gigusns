<template>
    <div class="container">
      <!--form class="form-signin"-->
        <h2 class="form-signin-heading">Please sign up</h2>
        <label for="inputAccountID" class="sr-only">アカウントID</label>
        <input type="email" id="inputAccountID" class="form-control" placeholder="account ID" v-model="account_id" @keyup.enter="signup" required autofocus>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" v-model="email" @keyup.enter="signup" required>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" v-model="password" @keyup.enter="signup" required>
        <div class="checkbox">
        </div>
        <div v-if="showAlert">
          {{alertMessage}}
        </div>
        <button @click="signup" class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
      <!--/form-->
    </div>
</template>
<script>
import userStore from '../stores/userStore'
import http from '../services/http'

export default {
  data() {
    return {
      account_id: '',
      email: '',
      password: '',
      showAlert: false,
      alertMessage: '',
    }
  },
  methods: {
    signup () {
      userStore.signup(this.account_id, this.email, this.password, res => {
        console.log('サインアップ成功')
        this.$router.push('/')
      }, error => {
        this.showAlert = true
        this.alertMessage = '多分メールアドレス重複してる'
      })
    }
  }
}
</script>
