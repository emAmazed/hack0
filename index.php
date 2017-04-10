
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hackathon0 - VeraLearning Pathway - A Showcase of ILP</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/album.css" rel="stylesheet">
    <script>
    $(document).ready(function() {
      $("#path1").click(function(){
        $("#path1bloc").fadeToggle("slow");
      });
    });
    </script>
  </head>

  <body>

    <div class="collapse bg-inverse" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 py-4">
            <h4 class="text-white">About</h4>
            <p class="text-muted">
            This Hackathon Project provides an easy-to-integrated Learning Path for user to set up their online learning goal, and follow through the pre-configured personalized learning pathway.
            </p>
          </div>
          <div class="col-sm-4 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Emilie Ying @CA</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-inverse bg-inverse">
      <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand">About</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>

    <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Welcome to CA Integrated Learning Pathway</h1>
      <p class="lead text-muted">
      ILP is an alternate approach that provides a range of recommended e-learning activities, e.g. courses, assessment, knowledgebase, to allow the learners to build knowledge progressively. By providing a complete pathway instead of a single event to the learners, it enables the learners with new ways to lead towards their learning objectives and reduces the overhead cost during such process.  
      </p>
    </div>
    </section>

    <?php
    $subject = "Web Application Security";
    ?>
    <div class="album text-muted">
      <div class="container">

        <p class="path" id="path1"><img src="images/path-white.png"> Signature Level 
          <img src="images/badge-white.png" width="80px">
        </p>
        <div class="row" id="path1bloc">
          <div class="card">
            <p class="card-text">Introduction to <?php echo $subject; ?></p>
          </div>
          <div class="empty-card"></div>
          <div class="card">
            <p class="card-text">Knowledgebase Check on Introduction to <?php echo $subject; ?></p>
          </div>
          <div class="empty-card"></div>
          <div class="card">
            <p class="card-text">Assessment for Introduction to <?php echo $subject; ?></p>
          </div>
        </div>

        <p class="path" id="path2"><img src="images/path-yellow.png"> Primary Level 
          <img src="images/badge-yellow.png" width="80px">
        </p>
        <div class="row">
          <div class="card">
          <p class="card-text">Advanced <?php echo $subject; ?></p>
          </div>
          <div class="empty-card"></div>
          <div class="card">
          <p class="card-text">Knowledgebase Check on Advanced <?php echo $subject; ?></p>
          </div>
          <div class="empty-card"></div>
          <div class="card">
          <p class="card-text">Assessment for Advanced <?php echo $subject; ?> </p>
          </div>
        </div>

        <p class="path" id="path3"><img src="images/path-orange.png"> Power Level</p>
        <p class="path" id="path4"><img src="images/path-green.png"> Earth Level</p>
        <p class="path" id="path5"><img src="images/path-blue.png"> Planet Level</p>
        <p class="path" id="path6"><img src="images/path-black.png"> Diamond Level</p>
      </div>
    </div>

    <footer class="text-muted">
    <div class="container">
      <p class="float-right"><a href="#">Back to top</a></p>
    </div>
    </footer>

    <script
      src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
      integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
      crossorigin="anonymous"></script>
    <script>window.jQuery
      ||
      document.write('<script src="js/vendor/jquery-3.2.0.min.js"><\/script>')</script>
      <script
        src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
      <script src="js/vendor/holder.min.js"></script>
      <script>
        $(function () {
        Holder.addTheme("thumb", {
        background: "#55595c",
        foreground: "#eceeef",
        text: "Thumbnail"
        });
        });
      </script>
      <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="js/ie10-viewport-bug-workaround.js"></script>
    </body>
  </html>

