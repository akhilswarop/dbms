<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Consumer Bill">
    <meta name="description" content="">
    <title>USER BILL</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="USER-BILL.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
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
    <meta property="og:title" content="USER BILL">
    <meta property="og:type" content="website">
  <style>
    input[type="submit"] {
  display: block;
  margin: 0 auto;
  text-align: center;
}
    </style>
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-1607"><div class="u-clearfix u-sheet u-valign-middle-xl u-sheet-1">
        <a href="ADMIN.php" class="u-active-black u-border-1 u-border-active-black u-border-grey-30 u-border-hover-black u-btn u-btn-round u-button-style u-gradient u-hover-black u-none u-radius-5 u-text-active-white u-text-hover-white u-btn-1">ADMIN</a>
        <a href="Home.php" class="u-image u-logo u-image-1" data-image-width="500" data-image-height="500" title="Home">
          <img class="u-logo-image u-logo-image-1" src="images/TWAD-Board-Recruitment.png">
        </a>
        <a href="VENDOR.php" class="u-active-black u-border-1 u-border-active-black u-border-grey-30 u-border-hover-black u-btn u-btn-round u-button-style u-gradient u-hover-black u-none u-radius-5 u-text-active-white u-text-hover-white u-btn-2">VENDOR</a>
        <a href="Home.php#sec-77dc" class="u-active-black u-border-1 u-border-active-black u-border-grey-30 u-border-hover-black u-btn u-btn-round u-button-style u-gradient u-hover-black u-none u-radius-5 u-text-active-white u-text-hover-white u-btn-3">CONSUMER</a>
      </div></header>
    <section class="u-align-center u-clearfix u-image u-shading u-section-1" id="sec-e1e8" data-image-width="1280" data-image-height="853">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-palette-4-base u-shape u-shape-rectangle u-shape-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"></div>
        <div class="u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-align-center u-text u-text-default u-text-1">Consumer Bill</h2>
            <div class="u-form u-form-1">
              <form method="post" class="u-clearfix u-form-spacing-37 u-form-vertical u-inner-form" style="padding: 28px;" source="email" name="form">
                <div class="u-form-group u-form-name">
                  <label for="name-f18c" class="u-label">HOUSE ID</label>
                  <input type="text" placeholder="Enter your House_Id" id="name-f18c" name="name" class="u-grey-5 u-input u-input-rectangle u-input-1" required="">
                </div>
                <div class="u-form-email u-form-group">
                  <label for="email-f18c" class="u-label">PASSWORD</label>
                  <input type="password" placeholder="Your Password is your Phone Number" id="email-f18c" name="email" class="u-grey-5 u-input u-input-rectangle u-input-2" required="">
                </div>
                
                 
                  <input type="submit" name="submit" value="Submit" >

                <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                <input type="hidden" value="" name="recaptchaResponse">
                <input type="hidden" name="formServices" value="d568939bf274436eab60a7597d46000b">
              </form>
              <?php
        $host = "localhost";
        $user = "root";
        $password = "";
        $dbname = "water_distribution";
        
        $conn = mysqli_connect($host, $user, $password, $dbname);
        
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "<p style='color:green; text-align:center;'>Connected Successfully!</p>";
        if(isset($_POST['submit'])){
        $h_id = $_POST['name'];
        $pass = $_POST['email'];
        $query = "Select * from house where h_id='$h_id' && ph_no='$pass'";
        $result = mysqli_query($conn, $query);
        if ($result) {
          echo '<table border="1">';
          // Fetch each row of the result set and display it as a table row
          while ($row = mysqli_fetch_assoc($result)) {
                    echo "<h4 style='text-align:center;'>Total Bill</h3>";
            echo '<tr>';
            echo '<th>House Id</th>';
            echo '<th>Address</th>';
            echo '<th>Phone </th>';
            echo '<th>Water (Canals)</th>';
            echo '<th>Water (Vendor)</th>';
            echo '<th>Total Water Consumed (Litres)</th>';
            echo '<th>Total Bill</th>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>' . $row['h_id'] . '</td>';
            echo '<td>' . $row['address'] . '</td>';
            echo '<td>' . $row['ph_no'] . '</td>';
            echo '<td>' . $row['wc_canals'] . '</td>';
            echo '<td>' . $row['wc_vendor'] . '</td>';
            echo '<td>' . $row['total_wc'] . '</td>';
            echo '<td>' . $row['total_wc']*0.8 . '</td>';
            echo '</tr>';
        }
        
        // Close the table
        echo '</table>';
      } 
      else {
          // If there are no results, display a message
          echo "<p style='color:red;'>No results found</p>";
      }
      
        mysqli_close($conn);}

      ?>
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