<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <title>Document</title>
</head>
<body>
    <!-- Start nabar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.html">Blo<span class="brand">G </span></a>
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


      <div class="main-section-contact-signup">
        
        
        <div class="container-form">
          <h3>Sgin Up</h3>
          <form action="/action_page.php" method="post" id="fupForm" >
              <label for="fname"> First Name</label>
              <input type="text" id="fname" name="fname" placeholder="Your name..">
              <div id="firstname_span"></div>
              

              <label for="fname">Last Name</label>
              <input type="text" id="lname" name="lname" placeholder="Your last name..">
              <div id="lastname_span"></div>

              <label for="lname">Email</label>
              <input type="text" id="email" name="email" placeholder="Your email..">
              <div id="email_span"></div>

              <label for="fname">Phone</label>
              <input type="text" id="phone" name="phone" placeholder="Your phone..">
              <div id="phone_span"></div>

              <label for="lname">Password</label>
              <input type="password" id="password" name="password" placeholder="Your password..">
              <div id="password_span"></div>

              <input type="submit" id="signup-submit" value="Submit">
          </form>
      </div>
        
  </div>

  <script>
    $(document).ready(function() {
        $('#signup-submit').on('click', function() {
            $("#signup-submit").attr("disabled", "disabled");
            var fname = $('#fname').val();
            var lname = $('#lname').val();
            var phone = $('#phone').val();
            var email = $('#email').val();
            var password = $('#password').val();

            if (fname != "" && lname != "" && phone != "" && email != "" && password != ""  ) {
                $.ajax({
                    url: "./save.php",
                    type: "POST",
                    data: {
                        fname: fname,
                        lname: lname,
                        phone: phone,
                        email: email,
                        password: password,
                    },
                    cache: false,
                    success: function(dataResult) {
                        var dataResult = JSON.parse(dataResult);
                        if (dataResult.statusCode == 200) {
                            $("#signup-submit").removeAttr("disabled");
                            $('#fupForm').find('input:text').val('');
                            $("#success").show();
                            $('#success').html('Signed up successfully !');
                            window.location.href = "index.php";
                          } else if (dataResult.statusCode == 201) {
                            alert("Error occurred !");
                        }

                    }
                });
            } else {
                alert('Please fill all the field !');
            }
        });
    });
</script>
  <footer>
      <div class="footer-body">
        Footer Section
      </div>
    </footer>

    <script src="../js/main.js"></script>
</body>
</html>