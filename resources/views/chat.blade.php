<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App</title>
</head>

<body>

    <div id="app">
        <div>
            <div id="chat">
                <ul id="messages">
                    <!-- Display messages here -->
                </ul>
            </div>
            <div id="message-form">
                <form @submit.prevent="sendMessage">
                    <input type="text" v-model="message" placeholder="Type your message...">
                    <button type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>

    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
</body>

</html>
