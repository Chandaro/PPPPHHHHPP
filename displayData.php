<?php
require __DIR__ . '/firebase.php';
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data safely
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    //Insert data
    $user = 'users';
    $newUser = $database->getReference($user)->push([
                'name'       => $name,
                'email'      => $email,
                'password'   => $password,
            ]);

    // Read data
    $users = $database->getReference('users')->getSnapshot()->getValue();
    echo "<pre>";
    print_r($users);
    echo "</pre>";

    // Display the data
    // echo "<h2>Form Data Received</h2>";
    // echo "Name: " . $name . "<br>";
    // echo "Email: " . $email . "<br>";

} else {
    echo "No data submitted.";
    $users = $database->getReference('users')->getSnapshot()->getValue();
    echo "<pre>";
    print_r($users);
    echo "</pre>";
}
?>

<a href="./index.php">Go to index file</a>
