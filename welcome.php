<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    Your Email: <?php echo htmlspecialchars($_POST['email']); ?>!<br>
    Your Password: <?php echo htmlspecialchars($_POST['password']); ?>.<br>
    
</body>
</html>