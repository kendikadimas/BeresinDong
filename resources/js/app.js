import './bootstrap';
import { createApp } from 'vue';
import AppComponent from './components/AppComponent.vue'; // Perhatikan pathnya

const app = createApp({});

app.component('AppComponent', AppComponent); // Daftarkan komponen global jika ingin menggunakannya di Blade

app.mount('#app');