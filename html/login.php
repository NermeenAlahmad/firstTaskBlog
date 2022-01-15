<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>
<body>

     <!-- Start nabar -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.html"> Blo<span class="brand">G </span> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="contactus.php">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php">Sign Up</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End navbar -->

    

      <div class="main-section-contact">
        
        
        <div class="container-form">
          <h3>Login</h3>
          <form action="/action_page.php">
              <label for="fname"> Name</label>
              <input type="text" id="fname" name="firstname" placeholder="Your name..">
      
              <!-- <label for="fname">Last Name</label>
              <input type="text" id="fname" name="firstname" placeholder="Your last name.."> -->

              <label for="fname">Phone</label>
              <input type="text" id="fname" name="firstname" placeholder="Your name..">

              <label for="lname">Email</label>
              <input type="text" id="lname" name="lastname" placeholder="Your email..">
      
              <label for="lname">Password</label>
              <input type="password" id="lname" name="lastname" placeholder="Your email..">

              <input type="submit" value="Submit">
          </form>
      </div>
      
      <div class="background-img-login">

    </div>
        
  </div>
  <footer>
      <div class="footer-body">
        Footer Section
      </div>
    </footer>
</body>
</html>