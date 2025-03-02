import { createApp } from 'vue'
import App from './views/Home.vue' // Ganti dengan komponen root Anda
import router from './routes/index.js'
import '../css/app.css'

const app = createApp(App)
app.use(router)
app.mount('#app')
