<!doctype html>
<html>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
        <title>Thank you!</title>
        <link rel="stylesheet" href="css/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
<body>
    <div class="w3-card-4 w3-margin">
        <div class="w3-container w3-blue"><h3>Your information</h3></div>
    
        <p style="text-align:center">Thank you for contacting me, I'll reply soon</p>
        <div id="container">
    <ul>
        <li><b>Your name:</b> <?php echo $_POST['cname']; ?></li>
        <li><b>Email:</b> <?php echo $_POST['email']; ?></li>
        <li><b>Your message:</b> <?php echo $_POST['meseji']; ?></li>
    </ul>
    <p>Thank you!</p>    </div>
    <p style="text-align:center;"><a href="index.html">Back to home page</a></p>
</div>
</body>
</htmml>