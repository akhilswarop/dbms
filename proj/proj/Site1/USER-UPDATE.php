<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Update Your User Details">
    <meta name="description" content="">
    <title>USER UPDATE</title>
    <style>
  input[type="submit"] {
  display: block;
  margin: auto;
  border-radius: 10px;
}
  </style>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="USER-UPDATE.css" media="screen">
    <!script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <!script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.1.5, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/TWAD-Board-Recruitment.png"
}</script>
    <meta name="theme-color" content="#0149b8">
    <meta property="og:title" content="USER UPDATE">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-1607"><div class="u-clearfix u-sheet u-valign-middle-xl u-sheet-1">
        <a href="ADMIN.php" class="u-active-black u-border-1 u-border-active-black u-border-grey-30 u-border-hover-black u-btn u-btn-round u-button-style u-gradient u-hover-black u-none u-radius-5 u-text-active-white u-text-hover-white u-btn-1">ADMIN</a>
        <a href="Home.php" class="u-image u-logo u-image-1" data-image-width="500" data-image-height="500" title="Home">
          <img class="u-logo-image u-logo-image-1" src="images/TWAD-Board-Recruitment.png">
        </a>
        <a href="VENDOR.php" class="u-active-black u-border-1 u-border-active-black u-border-grey-30 u-border-hover-black u-btn u-btn-round u-button-style u-gradient u-hover-black u-none u-radius-5 u-text-active-white u-text-hover-white u-btn-2">VENDOR</a>
        <a href="Home.php#sec-77dc" class="u-active-black u-border-1 u-border-active-black u-border-grey-30 u-border-hover-black u-btn u-btn-round u-button-style u-gradient u-hover-black u-none u-radius-5 u-text-active-white u-text-hover-white u-btn-3">CONSUMER</a>
      </div></header>
    <section class="u-align-center u-clearfix u-image u-shading u-section-1" id="sec-2082" data-image-width="1280" data-image-height="853">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-palette-4-base u-shape u-shape-rectangle u-shape-1"></div>
        <div class="u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-align-center u-text u-text-default u-text-1">Update Your User Details</h2>
            <div class="u-form u-form-1">
              <form method="post" class="u-clearfix u-form-spacing-37 u-form-vertical u-inner-form" style="padding: 24px;" source="email" name="form">
                <div class="u-form-email u-form-group u-form-partition-factor-2">
                  <label for="email-f18c" class="u-label">HOUSE ID</label>
                  <input type="text" placeholder="Enter your House ID" id="email-f18c" name="email" class="u-grey-5 u-input u-input-rectangle u-input-1" required="">
                </div>
                <div class="u-form-group u-form-name u-form-partition-factor-2">
                  <label for="name-f18c" class="u-label">PASSWORD</label>
                  <input type="password" placeholder="Enter your Password" id="name-f18c" name="name" class="u-grey-5 u-input u-input-rectangle u-input-2" required="">
                </div>
                <div class="u-form-group u-form-phone u-form-group-3">
                  <label for="phone-cbff" class="u-label">CURRRENT PHONE NUMBER</label>
                  <input id="phone-cbff" name="name1" class="u-grey-5 u-input u-input-rectangle u-input-3" required="required" placeholder="Enter existing Phone Number" type="tel">
                </div>
                <div class="u-form-group u-form-message u-form-group-4">
                  <label for="date-33f9" class="u-label">NEW PHONE NUMBER</label>
                  <textarea id="date-33f9" name="name2" class="u-grey-5 u-input u-input-rectangle u-input-4" required="required" placeholder="Enter new Phone Number"></textarea>
                </div>
                <div class="u-align-left u-form-group u-form-submit">

                  <input type="submit" value="Submit" name="submit" >
                  <div style="width: 50%;  margin: 0 auto; margin-bottom: 10px;text-align: center;">

              <?php
  $host = "localhost";
  $user = "root";
  $password = "";
  $dbname = "water_distribution";
  $conn = mysqli_connect($host, $user, $password, $dbname);
  
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
  echo "Connected Succesfully\n";
  
  if(isset($_POST["submit"])){
    $house_id = $_POST['email'];
    $password=$_POST['name'];
    $old=$_POST['name1'];
    $new=$_POST['name2']; // get the house ID from the form submission
    $pass="password";
  $query = "SELECT * FROM house WHERE h_id='$house_id'";
  $result = mysqli_query($conn, $query);
  if ((mysqli_num_rows($result) > 0)&&$password==$pass) {
      $query = mysqli_query($conn,"UPDATE house set ph_no='$new' where ph_no='$old' && h_id='$house_id';");
                  echo "<p style=text-align:center;color:green>Success!</p>";
  } else {
    echo "<p style=text-align:center;color:red>No match found!</p>";;
  }}
    ?>
</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-clearfix u-footer u-grey-80" id="sec-23e0"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-align-left u-border-1 u-border-white u-expanded-width u-line u-line-horizontal u-opacity u-opacity-30 u-line-1"></div>
        <div class="u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-15 u-size-30-md u-layout-cell-1">
                <div class="u-container-layout u-valign-top u-container-layout-1"><!--position-->
                  <div data-position="" class="u-position"><!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix"><!--block_header-->
                        <h5 class="u-block-header u-text"><!--block_header_content-->Akhil Swarop<!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                        <div class="u-block-content u-text"><!--block_content_content-->CB.EN.U4CSE21304<!--/block_content_content--></div><!--/block_content-->
                      </div>
                    </div><!--/block-->
                  </div><!--/position-->
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-2">
                <div class="u-container-layout u-valign-top u-container-layout-2"><!--position-->
                  <div data-position="" class="u-position"><!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix"><!--block_header-->
                        <h5 class="u-block-header u-text"><!--block_header_content-->Dhayanandh N<!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                        <div class="u-block-content u-text"><!--block_content_content-->CB.EN.U4CSE21310<!--/block_content_content--></div><!--/block_content-->
                      </div>
                    </div><!--/block-->
                  </div><!--/position-->
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-3">
                <div class="u-container-layout u-valign-top u-container-layout-3"><!--position-->
                  <div data-position="" class="u-position"><!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix"><!--block_header-->
                        <h5 class="u-block-header u-text"><!--block_header_content-->Ganeshkaran<!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                        <div class="u-block-content u-text"><!--block_content_content-->CB.EN.U4CSE21312<!--/block_content_content--></div><!--/block_content-->
                      </div>
                    </div><!--/block-->
                  </div><!--/position-->
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-15 u-size-30-md u-layout-cell-4">
                <div class="u-container-layout u-valign-top u-container-layout-4"><!--position-->
                  <div data-position="" class="u-position"><!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix"><!--block_header-->
                        <h5 class="u-block-header u-text"><!--block_header_content-->Pranav Sreerag<!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                        <div class="u-block-content u-text"><!--block_content_content-->CB.EN.U4CSE21342<!--/block_content_content--></div><!--/block_content-->
                      </div>
                    </div><!--/block-->
                  </div><!--/position-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div></footer>

</body></html>