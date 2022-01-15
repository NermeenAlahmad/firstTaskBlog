<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.0.11/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="../css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>

<title>Conatct Us</title>
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

      

      <div class="main-section-contact">
          <div class="background-img">

          </div>
          
          <div class="container-form">
            <h3>Contact Us</h3>
            <form action="" method="post" id="fupForm1">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname" placeholder="Your name..">
        
                <label for="lname">Email</label>
                <input type="text" id="lname" name="lname" placeholder="Your email..">
        
                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
        
                <input type="submit" name="signup-submit1" id="signup-submit1" value="Submit">
            </form>
        </div>
        
          
    </div>

    <script>
    $(document).ready(function() {
        $('#signup-submit1').on('click', function() {
            $("#signup-submit1").attr("disabled", "disabled");
            var fname = $('#fname').val();
            var lname = $('#lname').val();
            var subject = $('#subject').val();

            if (fname != "" && lname != "" && subject != ""  ) {
                $.ajax({
                    url: "./save1.php",
                    type: "POST",
                    data: {
                        fname: fname,
                        lname: lname,
                        subject: subject,
                    },
                    cache: false,
                    success: function(dataResult) {
                        var dataResult = JSON.parse(dataResult);
                        if (dataResult.statusCode == 200) {
                            $("#signup-submit1").removeAttr("disabled");
                            $('#fupForm1').find('input:text').val('');
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
</body>
</html>