/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1',
//     wsHost: import.meta.env.VITE_PUSHER_HOST ? import.meta.env.VITE_PUSHER_HOST : `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });

import Echo from "laravel-echo";
import Pusher from "pusher-js";

// Désactiver le chiffrement pour éviter les erreurs en local
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: "pusher",
    key: "your-pusher-key",  // Mets ta clé Pusher ici (ou remplace par `app_key` si tu utilises Laravel WebSockets)
    wsHost: "127.0.0.1",
    wsPort: 6001, // Port WebSocket configuré
    forceTLS: false,
    disableStats: true,
});

window.Echo.channel("chat")
    .listen(".message.sent", (data) => {
        console.log("📩 Nouveau message reçu :", data.message);
    });


