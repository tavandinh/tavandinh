// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App1'
// import router from './router'
import Hello2 from "./components/HelloWorld2"
require("./components/modules");

Vue.config.productionTip = false
Vue.component("HelloWorld2",Hello2)

/* eslint-disable no-new */
new Vue({
  el: '#app',
  // router,
  components: { App },
  template: '<App/>',
  data: {
    message1: "Vuew"
  }
})