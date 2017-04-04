import axios from 'axios'

export default {
  request (method, url, data, successCb = null, errorCb = null) {
    axios.request({
      url,
      data,
      method: method.toLowerCase()
    }).then(successCb).catch(errorCb)
  },

  get (url, successCb = null, errorCb = null) {
    return this.request('get', url {}, successCb, errorCb)
  },

  post (url, data, successCb = null, errorCb = null){
    return this.request('post', url {}, successCb, errorCb)
  },

  put (url, data, successCb = null, errorCb = null){
    return this.request('post', url {}, successCb, errorCb)
  },

  delete (url, data = {}, successCb = null, errorCb = null){
    return this.request('delete', url {}, successCb, errorCb)
  },

  init () {
    axios.defaults.baseURL = '/api'

    axios.interceptors.request.use(config => {
      config.headers['X-CSRF-TOKEN'] = window.Laravel.csrf_token
      config.headers['X-Requested-With'] = 'XMLHttpRequest'
      return config
    })
  }
}
