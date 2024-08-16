<!DOCTYPE html>
<html>
<head>
    <title>Send Message</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</head>
<body>
    <h1>Send Message</h1>
    <form id="messageForm">
        <label for="message">Message:</label>
        <input type="text" id="message" name="message">
        <button type="submit">Send</button>
    </form>

    <script>
        document.getElementById('messageForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const message = document.getElementById('message').value;

            axios.post('/send-message', { message: message })
                .then(response => {

                })
                .catch(error => {
                    console.error('There was an error sending the message!', error);
                });
        });

        Echo.private('send-message')
            .listen('SendMessage', (e) => {
                alert(e.message);

            });
    </script>
</body>
</html>
