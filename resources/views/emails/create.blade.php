<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Email</title>
    <style>
        form>* {
            display: block;
        }
    </style>
</head>
<body>
    <h1>ADV 102</h1>

    <form action="/email/send" method="POST">
        @csrf
        <label for="email_from">From:</label>
        <input type="email_from" id="email_from" name="email_from" value="no-reply@example.com" required />

        <label for="email_to">To:</label>
        <input type="email_to" id="email_to" name="email_to" required />

        <label for="subject">Subject:</label>
        <input type="subject" id="subject" name="subject" required />

        <label for="message">Message:</label>
        <textarea name="message" id="message" cols="30" rows="10" required></textarea>

        <br/>
        <input type="submit" value="Send email" />
    </form>
</body>
</html>