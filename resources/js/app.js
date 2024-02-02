import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

// import './bootstrap';
import { createInertiaApp } from '@inertiajs/inertia-svelte'
 
createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.svelte', { eager: true })
        return pages[`./Pages/${name}.svelte`]
    },
    setup({ el, App, props }) {
        new App({ target: el, props })
    },
})

// require('./bootstrap');
import Vue from 'vue';
import axios from 'axios';

new Vue({
    el: '#app',
    data: {
        message: '',
        messages: [],
    },
    mounted() {
        // Fetch initial messages from the server
        axios.get('/api/messages').then(response => {
            this.messages = response.data;
        });

        // Listen for new messages
        Echo.channel('chat')
            .listen('MessageSent', (event) => {
                this.messages.push(event.message);
            });
    },
    methods: {
        sendMessage() {
            // Send the message to the server
            axios.post('/api/messages', { message: this.message })
                .then(response => {
                    // Clear the input field after sending the message
                    this.message = '';
                });
        },
    },
});

