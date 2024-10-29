<?php
if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "study_mate_jiit"; // Make sure this matches your database name

    // Create connection
    $con = new mysqli($server, $username, $password, $database);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Collecting form data
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password for security
    $branch = $_POST['branch'];
    $semester = $_POST['sem'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    // Prepare and bind
    $stmt = $con->prepare("INSERT INTO userlist (name, username, password, branch, semester, email, contact) VALUES (?, ?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Prepare failed: " . $con->error);
    }
    
    $stmt->bind_param("sssssss", $name, $username, $password, $branch, $semester, $email, $contact);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Sign up successful!";
    } else {
        echo "Error: " . $stmt->error; // Display the error if there's an issue
    }

    // Close connections
    $stmt->close();
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>signin_StudyMate_JIIt</title>
  <link rel="stylesheet" href="./signinstyle.css">
</head>

<body>
  <div class="background">
    <div class="navbar">
      <div class="logo">
        <img src="./images/logo copy.png">
      </div>
      <div class="options">
        <ul>
          <l1 class="navlist">Home</l1>
          <l1 class="navlist">Courses</l1>
          <l1 class="navlist">About Us</l1>
          <l1 class="navlist">Contact Us</l1>
        </ul>
      </div>
      <div class="siginbtn">
        <button class="signinbtn">Sign In</button>
      </div>
    </div>
    <div class="signin">
      <div class="signin-box">
        <!-- <div class="signin-logo">
          <img src="./julien-tromeur-FYOwBvRb2Mk-unsplash.jpg" alt="">
        </div> -->
        <div class="form">
          <input type="checkbox" id="chk" aria-hidden="true">
          <div class="signup">
            <form action="signin.php" method="post">
              <label for="chk" aria-hidden="true">Sign Up</label>
              <input type="text" name="name" class="name" placeholder="Name" id="name" >
              <input type="text" name="username" class="username" placeholder="Username" id="user">
              <input type="password" name="password" class="password" placeholder="password" id="pass" >
              <input type="text" name="branch" class="branch" placeholder="Branch" id="branch" >
              <input type="text" name="sem" class="sem" placeholder="semister" id="sem" >
              <input type="Email" name="email" class="Email" placeholder="email" id="email" >
              <input type="text" name="contact" class="contact" placeholder="contact" id="contact" >
              <button type="submit">Sign In</button>

            </form>
          </div>

          <div class="login-form">
            <label for="chk" aria-hidden="true">Login</label>
            <input type="text" class="username" placeholder="username" required="">
            <input type="text" class="username" placeholder="username" required="">
            <button>login</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<!-- INSERT INTO `userlist` (`sno`, `name`, `username`, `password`, `branch`, `semester`, `email`, `contact`) VALUES ('1', 'Rishabh Kapur', 'jiit23103101', 'Rishabh', 'use', '3', 'kapur@gmail.com', '9981414600'); -->