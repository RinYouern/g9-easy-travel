import 'bootstrap/dist/css/bootstrap.min.css' // Import Bootstrap CSS
import './assets/main.css'

import { createApp } from 'vue'
import { createPinia } from 'pinia'

// Import Font Awesome libraries
import { library } from '@fortawesome/fontawesome-svg-core'
import { fas } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
// Add all icons to the library
library.add(fas)

import App from './App.vue'
import router from './router'
import ElementPlus from 'element-plus'
import 'element-plus/dist/index.css'
import axios from './plugins/axios'
import 'uno.css'
import { configure } from 'vee-validate'

// Stripe initialization
import { loadStripe } from '@stripe/stripe-js'

let stripe
const initializeStripe = async (publishableKey: string) => {
  if (!stripe) {
    stripe = await loadStripe(publishableKey)
  }
  return stripe
}

// Configure VeeValidate
configure({
  validateOnInput: true
})

const app = createApp(App)

configure({
  validateOnInput: true
})

app.use(createPinia())
app.use(router.router)
app.use(ElementPlus)
app.use(router.simpleAcl)

app.config.globalProperties.$axios = axios

// Make Stripe available globally
app.config.globalProperties.$stripe = stripe
app.config.globalProperties.$initializeStripe = initializeStripe

app.mount('#app')
app.component('font-awesome-icon', FontAwesomeIcon)