import Echo from 'laravel-echo';

const echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    encrypted: true,
});

echo.channel('chat')
    .listen('MessageSent', (event) => {
        console.log('New message received:', event.message);
        // Add your logic to update the chat UI with the new message
    });
