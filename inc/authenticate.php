<?php

    session_start();
    include('config.php');

    if(isset($_POST['submit'])) {

        // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
        if ($stmt = $conn->prepare('SELECT id, username, password FROM accounts WHERE email = ?')) {
            // Bind parameters (s = string, i = int, b = blob, etc), in our case the email is a string so we use "s"
            $stmt->bind_param('s', $_POST['userEmail']);
            $stmt->execute();
            // Store the result so we can check if the account exists in the database.
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $username, $password);
            $stmt->fetch();
            // Account exists, now we verify the password.
            // Note: remember to use password_hash in your registration file to store the hashed passwords.
            // if (password_verify($_POST['password'], $password)) {
            if ($_POST['userPassword'] === $password) {
                // Verification success! User has logged-in!
                // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $username;
                $_SESSION['id'] = $id;
                echo 'Welcome ' . $username . '!';
                header('Location: ../export.php');
            } else {
                // Incorrect password
                echo 'Incorrect email address and/or password!';
            }
        } else {
            // Incorrect username
            echo 'Incorrect email address and/or password!';
        }


            $stmt->close();
        }
    }

?>