<?php
if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST["submit"])) {
  $firstName = $_POST["firstname"];
  $lastName = $_POST["lastname"];
  $age = $_POST["age"];
  $contact = $_POST["contact"];
  $address = $_POST["address"];
} else {
  header("Location: ./index.html");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Palanquin:wght@100;200;300;400;500;600;700&display=swap"
    rel="stylesheet" />
  <title>Contact Form</title>
</head>

<body>
  <main>
    <section class="card">
      <div class="form-container">
        <!-- Form Header -->
        <div class="form-header">
          <h1>Registered <span>Contacts</span></h1>
        </div>

        <!-- Form Body -->
        <!--  -->
        <div class="form-body">
          <div class="form-group">
            <p>Firstname</p>
            <p class="input-details"><?php echo htmlspecialchars($firstName) ?></p>
          </div>
          <div class="form-group">
            <p>Lastname</p>
            <p class="input-details"><?php echo htmlspecialchars($lastName) ?></p>
          </div>
          <div class="form-group">
            <p>Age</p>
            <p class="input-details"><?php echo htmlspecialchars($age) ?></p>
          </div>
          <div class="form-group">
            <p>Contact</p>
            <p class="input-details"><?php echo htmlspecialchars($contact) ?></p>
            <div class="form-group">
              <p>Address</p>
              <p class="input-details"><?php echo htmlspecialchars($address) ?></p>
            </div>
          </div>


        </div>
    </section>
  </main>
</body>

</html>