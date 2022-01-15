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
<link rel="stylesheet" href="../css/dark.css">

<title>Home</title>
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
              <a class="nav-link active" aria-current="page" style="padding-right: 1.40rem;" href="index.html">Home</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" style="padding-right: 1.40rem;" href="contactus.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="padding-right: 1.40rem;" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="padding-right: 1.40rem;" href="signup.php">Sign Up</a>
            </li>
          </ul>
          <div>
        <input type="checkbox" class="checkbox" id="chk" />
        <label class="label" for="chk">
            <div class="ball"></div>
        </label>
    </div>
        </div>
      </div>
    </nav>
    <!-- End navbar -->
    <div class="main">
    
    </div>
    
    <div class="about-section">
      <div class="header">
        <h1> About <span>HTML</span>  </h1>
      </div>

      <div class="section-body">

        <div class="left-section">
          <img src="../img/html.jpg" alt="" srcset="">
        </div>

        <div class="right-section"  >
          <p >
            The HyperText Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web
            browser. It can be assisted by technologies such as Cascading Style Sheets (CSS) and scripting languages such as
            JavaScript.
            
            Web browsers receive HTML documents from a web server or from local storage and render the documents into multimedia web
            pages. HTML describes the structure of a web page semantically and originally included cues for the appearance of the
            document.

            HTML elements are the building blocks of HTML pages. With HTML constructs, images and other objects such as interactive
            forms may be embedded into the rendered page. HTML provides a means to create structured documents by denoting
            structural semantics for text such as headings, paragraphs, lists, links, quotes and other items. HTML elements are
            delineated by tags, written using angle brackets. Tags such as < img /> and < input /> directly introduce content into the
            page. Other tags such as <p> surround and provide information about document text and may include other tags as
              sub-elements. Browsers do not display the HTML tags, but use them to interpret the content of the page.
          </p>
        </div>
      </div>
    </div>

    <div class="blogs-section">
      <div class="header-blogs">
        <h1> Blogs  </h1>
      </div>
      <div class="blogs-section-body">
        <div class="left-section-blog">
          <img src="../img/html1.PNG" width="400px" height="200px" alt="" srcset="">
          <p id="dark1">
            The HyperText Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web
            browser. It can be assisted by technologies such as Cascading Style Sheets (CSS) and scripting languages such as
            JavaScript.
          </p>
          <a href="https://en.wikipedia.org/wiki/HTML"> <input type="button" value="Read more" width="100px" class="readmore-btn"></a>
        </div>

        <div class="mid-section-blog">
          <img src="../img/seo.PNG" width="400px" height="200px" alt="" srcset="">
          <p id="dark2">
            SEO stands for “search engine optimization.” In simple terms, it means the process of improving your site to increase
            its visibility when people search for products or services related to your business in Google, Bing, and other search
            engines.
          </p>
          <a href="https://searchengineland.com/guide/what-is-seo"> <input type="button" value="Read more" width="100px" class="readmore-btn"></a>
        </div>

        <div class="right-section-blog">
          <img src="../img/html.PNG" width="400px" height="200px" alt="" srcset="">
          <p id="dark3">
            The HyperText Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web
            browser. It can be assisted by technologies such as Cascading Style Sheets (CSS) and scripting languages such as
            JavaScript.
          </p>
          
            <a href="https://en.wikipedia.org/wiki/HTML" class="readmore-href"> <input type="button" value="Read more" width="100px" class="readmore-btn"></a>
          
        </div>

      </div>
    </div>

    <footer>
      <div class="footer-body">
        Footer Section
      </div>
    </footer>
    <script src="../js/dark.js"></script>
</body>
</html>