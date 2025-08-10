<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    Welcome, <?php echo htmlspecialchars($_POST['name']); ?>!<br>
    Your email is: <?php echo htmlspecialchars($_POST['email']); ?>.<br>
    
</body>
</html>