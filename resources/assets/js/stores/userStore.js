import http from '../services/http'

export default {
  debug: true,
  state: {
    user: {},
    authenticated: false,
  },

  login (email, password, successCb = null, errorCb = null) {
    const login_param = {email: email, password: password}
    http.post('authenticate', login_param, res => {
      this.state.user = res.data.user
      this.state.authenticate = true
      successCb()
    }, error => {
      console.log('login failed')
      errorCb()
    })
  },

  signup (account_id, email, password, successCb = null, errorCb = null) {
    const signup_param = {account_id: account_id, email: email, password: password}
    http.post('signup', signup_param, res => {
      this.state.user = res.data.user
      this.state.authencated = true
      successCb()
    }, error => {
      console.log(error)
      console.log('signup failed')
      errorCb()
    })
  },

  setCurrentUser () {
    const token = localStorage.getItem('jwt-token');　
    if(!token){
      return
    }
    http.get('me', res => {
      this.state.user = res.data.user
      this.state.authenticated = true
    })
  },

  init () {
    this.setCurrentUser()
  }
}
