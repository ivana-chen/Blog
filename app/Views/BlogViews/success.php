
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #798DC5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .success-message {
            background-color: lightsteelblue;
            color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="success-message">
        <p>Congratulations!</p>
        <p>You have successfully created a blog! </p>
        <p>🎉</p>
        <a href="<?php echo site_url('Blog/index') ?>">Click Here To Return to Homepage</a>
    </div>
</body>
</html>
