<!DOCTYPE html>
<html>
<head>
    <title>Simple Form</title>
</head>
<body>
    <h2>Registration Form</h2>

    <form action="displayData.php" method="post">
        <!-- Text input -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>

        <!-- Email input -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>

        <!-- Password input -->
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>

        
        <!-- Submit button -->
        <button type="submit">Register</button>
    </form>
    <a href="./displayData.php">See data</a>
</body>
</html>

