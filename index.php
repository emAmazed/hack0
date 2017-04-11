<?php include_once("config.php"); ?>
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

    <!-- Custom styles for this template -->
    <link href="css/hack0.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <script>
    $(document).ready(function() {
      // white path
      $("#path1").click(function(){
        $("#path1bloc").fadeToggle("slow");
      });
      // yellow path
      $("#path2").click(function(){
        $("#path2bloc").fadeToggle("slow");
      });
      // orange path
      $("#path3").click(function(){
        $("#path3bloc").fadeToggle("slow");
      });
      // green path
      $("#path4").click(function(){
        $("#path4bloc").fadeToggle("slow");
      });
      // blue path
      $("#path5").click(function(){
        $("#path5bloc").fadeToggle("slow");
      });
      // black path
      $("#path6").click(function(){
        $("#path6bloc").fadeToggle("slow");
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
        <a href="http://localhost/hackathon0" class="navbar-brand">About</a>
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
        <form method="post">
      <div class="col-lg" style="margin-left:80px;">
      <div class="input-group">
        <input type="text" class="form-control" name="searchPath" style="height: 54px; font-size:26px;" placeholder="Search for Learning Pathway ...">
        <span class="input-group-btn">
          <button class="btn btn-default" name="subPath" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
        </span>
      </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
        </form>
    </div>

      <div style="margin-top:20px;"> 
      <?php
if ( isset($_POST["subPath"]) && isset($_POST["searchPath"]) && !empty($_POST["searchPath"]) ) {
?>
    <div class='alert alert-success' role='alert'>
    <p>The Following Learning Pathways are recommended to you:</p>
<?php
    $searchPath = ucwords(strtolower($_POST["searchPath"]));
    echo "<p style='font-weight:bold;'><a href=\"index.php?s=$searchPath&p=1\">".$searchPath." Classic Learning Pathway</a></p>\n";
    echo "<p style='font-weight:bold;'><a href=\"index.php?s=$searchPath&p=2\">Version 2017 of ".$searchPath." Learning Pathway</a></p>\n";
    echo "<p style='font-weight:bold;'><a href=\"index.php?s=$searchPath&p=3\">VeracodeWay ".$searchPath." Learning Pathway</a></p>\n";
?>
    </div>
<?php
}
?>
      </div>
    </section>

    <?php
    if ( isset($_GET["s"]) && !empty($_GET["s"]) ) {
      $subject = $_GET["s"];

      if ( isset($_GET["p"]) && !empty($_GET["p"]) ) {
        # set pathway value
        switch ($_GET["p"]) {
          case 1:
            $path = $_GET["s"]." Classic";
            break;
          case 2:
            $path = "Version 2017 of ".$_GET["s"];
            break;
          case 3:
            $path = "VeracodeWay ".$_GET["s"];
            break;
          default:
            $path = "";
            break;
        }
      }
?>
    
    <div class='alert alert-success' role='alert'>
    <p style="font-size:21px; font-weight:bold;text-align:center;">You are currently on <?php echo $path; ?> Learning Pathway</p>
    </div>
<?php
    }
    else {
      $subject = "Web Application Security";
    }

    # set course completion status
    $card6c = (PATH5_C_COMP) ? "card6" : ""; 
    $card5c = (PATH4_C_COMP) ? "card5" : ""; 
    $card4c = (PATH3_C_COMP) ? "card4" : ""; 
    $card3c = (PATH2_C_COMP) ? "card3" : ""; 
    $card2c = (PATH1_C_COMP) ? "card2" : ""; 

    # set kb completion status
    $card6k = (PATH5_K_COMP) ? "card6" : ""; 
    $card5k = (PATH4_K_COMP) ? "card5" : ""; 
    $card4k = (PATH3_K_COMP) ? "card4" : ""; 
    $card3k = (PATH2_K_COMP) ? "card3" : ""; 
    $card2k = (PATH1_K_COMP) ? "card2" : ""; 

    # set assessment completion status
    $card6a = (PATH5_A_COMP) ? "card6" : ""; 
    $card5a = (PATH4_A_COMP) ? "card5" : ""; 
    $card4a = (PATH3_A_COMP) ? "card4" : ""; 
    $card3a = (PATH2_A_COMP) ? "card3" : ""; 
    $card2a = (PATH1_A_COMP) ? "card2" : ""; 

    # set lab completion status
    $card6l = (PATH5_L_COMP) ? "card6" : "";
    $card5l = (PATH4_L_COMP) ? "card5" : "";
    $card4l = (PATH3_L_COMP) ? "card4" : "";
    $card3l = (PATH2_COMP) ? "card3" : "";
    ?>
    <div class="hack0 text-muted">
      <div class="container">

        <p class="path" id="path1"><img src="images/path-white.png"> Signature Level 
          <?php echo PATH1_COMP ? "<img src=\"images/badge-white.png\" width=\"80px\">" : ""; ?>
        </p>
        <div class="row" id="path1bloc" style="display:none;">
          <div class="card" id="card1">
	          <span class="card-icon glyphicon glyphicon-book"></span>
            <p class="card-text">Introduction to <?php echo $subject; ?></p>
          </div>
          <div class="empty-card"></div>
          <div class="card" id="card1">
            <span class="card-icon glyphicon glyphicon-th-list"></span>
            <p class="card-text">Knowledgebase Check on Introduction to <?php echo $subject; ?></p>
          </div>
          <div class="empty-card"></div>
          <div class="card" id="card1">
            <span class="card-icon glyphicon glyphicon-pencil"></span>
	          <p class="card-text">Assessment for Introduction to <?php echo $subject; ?></p>
          </div>
        </div>

        <p class="path" id="path2"><img src="images/path-yellow.png"> Primary Level 
	      <?php echo PATH2_COMP ? "<img src=\"images/badge-yellow.png\" width=\"80px\">" : ""; ?>
        </p>
        <div class="row" id="path2bloc" style="display:none;">
        <div class="card" id="<?php echo $card2c; ?>">
	          <span class="card-icon glyphicon glyphicon-white glyphicon-book"></span>
            <p class="card-text card-text-white">Advanced <?php echo $subject; ?></p>
          </div>
          <div class="empty-card"></div>
          <div class="card" id="<?php echo $card2k; ?>">
            <span class="card-icon glyphicon glyphicon-white glyphicon-th-list"></span>
            <p class="card-text card-text-white">Knowledgebase Check on Advanced <?php echo $subject; ?></p>
          </div>
          <div class="empty-card"></div>
          <div class="card" id="<?php echo $card2a; ?>">
            <span class="card-icon glyphicon glyphicon-white glyphicon-pencil"></span>
            <p class="card-text card-text-white">Assessment for Advanced <?php echo $subject; ?> </p>
          </div>
        </div>

        <p class="path" id="path3"><img src="images/path-orange.png"> Power Level
	      <?php echo PATH3_COMP ? "<img src=\"images/badge-orange.png\" width=\"80px\">" : ""; ?>
        </p>
        <div class="row" id="path3bloc" style="display:none;">
        <div class="card" id="<?php echo $card3c; ?>">
            <span class="card-icon glyphicon glyphicon-white glyphicon-book"></span>
            <p class="card-text card-text-white">Advanced <?php echo $subject; ?> II</p>
          </div>
          <div class="empty-card"></div>
          <div class="card" id="<?php echo $card3k; ?>">
            <span class="card-icon glyphicon glyphicon-white glyphicon-th-list"></span>
            <p class="card-text card-text-white">Knowledgebase Check on Advanced <?php echo $subject; ?> II</p>
          </div>
          <div class="empty-card"></div>
          <div class="card" id="<?php echo $card3a; ?>">
            <span class="card-icon glyphicon glyphicon-white glyphicon-pencil"></span>
            <p class="card-text card-text-white">Assessment for Advanced <?php echo $subject; ?> II</p>
          </div>
          <div class="empty-card"></div>
          <div class="card" id="<?php echo $card3l; ?>">
            <span class="card-icon glyphicon glyphicon-white glyphicon-wrench"></span>
            <p class="card-text card-text-white">Lab for Advanced <?php echo $subject; ?> II</p>
          </div>
        </div>

        <p class="path" id="path4"><img src="images/path-green.png"> Earth Level
        <?php echo PATH4_COMP ? "<img src=\"images/badge-green.png\" width=\"80px\">" : ""; ?>
        </p>
        <div class="row" id="path4bloc" style="display:none;">
        <div class="card" id="<?php echo $card4c; ?>">
            <span class="card-icon glyphicon glyphicon-white glyphicon-book"></span>
            <p class="card-text card-text-white">Advanced <?php echo $subject; ?> for Architect and Manager</p>
          </div>
          <div class="empty-card"></div>
          <div class="card" id="<?php echo $card4k; ?>">
            <span class="card-icon glyphicon glyphicon-white glyphicon-th-list"></span>
            <p class="card-text card-text-white">Knowledgebase of Advanced <?php echo $subject; ?> for Architect and Manager</p>
          </div>
          <div class="empty-card"></div>
          <div class="card" id="<?php echo $card4a; ?>">
            <span class="card-icon glyphicon glyphicon-white glyphicon-pencil"></span>
            <p class="card-text card-text-white">Assessment for Advanced <?php echo $subject; ?> for Architect and Manager</p>
          </div>
          <div class="empty-card"></div>
          <div class="card" id="<?php echo $card4l; ?>">
            <span class="card-icon glyphicon glyphicon-white glyphicon-wrench"></span>
            <p class="card-text card-text-white">Lab for Advanced <?php echo $subject; ?> II</p>
          </div>
        </div>

        <p class="path" id="path5"><img src="images/path-blue.png"> Planet Level
        <?php echo PATH5_COMP ? "<img src=\"images/badge-blue.png\" width=\"80px\">" : ""; ?>
        </p>
        <div class="row" id="path5bloc" style="display:none;">
        <div class="card" id="<?php echo $card5c; ?>">
            <span class="card-icon glyphicon glyphicon-white glyphicon-book"></span>
            <p class="card-text card-text-white">Advanced <?php echo $subject; ?> for Security Researchers</p>
          </div>
          <div class="empty-card"></div>
          <div class="card" id="<?php echo $card5k; ?>">
            <span class="card-icon glyphicon glyphicon-white glyphicon-th-list"></span>
            <p class="card-text card-text-white">Knowledgebase of Advanced <?php echo $subject; ?> for Security Researchers</p>
          </div>
          <div class="empty-card"></div>
          <div class="card" id="<?php echo $card5a; ?>">
            <span class="card-icon glyphicon glyphicon-white glyphicon-pencil"></span>
            <p class="card-text card-text-white">Assessment for Advanced <?php echo $subject; ?> for Security Researchers</p> 
          </div>
          <div class="empty-card"></div>
          <div class="card" id="<?php echo $card5l; ?>">
            <span class="card-icon glyphicon glyphicon-white glyphicon-wrench"></span> 
            <p class="card-text card-text-white">Lab for Advanced <?php echo $subject; ?> for Security Researchers</p>        
          </div>
          <div class="empty-card"></div>
          <div class="card" id="<?php echo $card5l; ?>">
            <span class="card-icon glyphicon glyphicon-white glyphicon-pencil"></span>
            <p class="card-text card-text-white">Security Design in Advanced <?php echo $subject; ?> for Security Researchers</p>
          </div>
        </div>

        <p class="path" id="path6"><img src="images/path-black.png"> Diamond Level
        <?php echo PATH6_COMP ? "<img src=\"images/badge-black.png\" width=\"80px\">" : ""; ?>
        </p>
        <div class="row" id="path6bloc" style="display:none;">
        <div class="card" id="<?php echo $card6c; ?>">
            <span class="card-icon glyphicon glyphicon-white glyphicon-book"></span>
            <p class="card-text card-text-white">Advanced <?php echo $subject; ?> for Security Expert</p>
          </div>
          <div class="empty-card"></div>
          <div class="card" id="<?php echo $card6k; ?>">
            <span class="card-icon glyphicon glyphicon-white glyphicon-th-list"></span>
            <p class="card-text card-text-white">Knowledgebase of Advanced <?php echo $subject; ?> for Security Expert</p>
          </div>
          <div class="empty-card"></div>
          <div class="card" id="<?php echo $card6a; ?>">
            <span class="card-icon glyphicon glyphicon-white glyphicon-pencil"></span>
            <p class="card-text card-text-white">Assessment for Advanced <?php echo $subject; ?> for Security Expert</p> 
          </div>
          <div class="empty-card"></div>
          <div class="card" id="<?php echo $card6l; ?>">
            <span class="card-icon glyphicon glyphicon-white glyphicon-wrench"></span>
            <p class="card-text card-text-white">Lab for Advanced <?php echo $subject; ?> III</p>
          </div>
          <div class="empty-card"></div>
          <div class="card" id="<?php echo $card6l; ?>">
            <span class="card-icon glyphicon glyphicon-white glyphicon-wrench"></span>
            <p class="card-text card-text-white">Security Design in <?php echo $subject; ?></p>
          </div>
          <div class="empty-card"></div>
          <div class="card" id="<?php echo $card6l; ?>">
            <span class="card-icon glyphicon glyphicon-white glyphicon-wrench"></span>
            <p class="card-text card-text-white">Thesis for Advanced <?php echo $subject; ?></p>
          </div>
        </div>

      </div>
    </div>

    <footer class="text-muted">
    <div class="container">
      <p class="float-right"><a href="#">Back to top</a></p>
    </div>
    </footer>

    <script>window.jQuery
      ||
      document.write('<script src="js/vendor/jquery-3.2.0.min.js"><\/script>')</script>
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

