<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Email</title>
</head>
<body>
    <h1>You have recieved an email from {{$mailData['name']}}</h1>
    <p>From: {{$mailData['email']}}</p>
    <p>Message: {{$mailData['message']}}</p>
    <p>Thank you</p>
</body>
</html>