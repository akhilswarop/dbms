<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="VENDOR TURN-OVERCALCULATOR">
    <meta name="description" content="">
    <title>VENDOR</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<style>
      input[type="submit"] {
  display: block;
  margin: 0 auto;
  text-align: center;
}
</style>
<link rel="stylesheet" href="VENDOR.css" media="screen">
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
    <meta property="og:title" content="VENDOR">
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
    <section class="u-align-center u-clearfix u-section-1" id="sec-9900">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-size-30">
                <div class="u-layout-col">
                  <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                    <div class="u-container-layout u-container-layout-1">
                      <h2 class="u-text u-text-1">VENDOR TURN-OVER<br>CALCULATOR
                      </h2>
                    </div>
                  </div>
                  <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-2">
                    <div class="u-container-layout u-valign-top u-container-layout-2">
                      <div class="u-form u-form-1">
                        <form method="post" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px" source="email" name="form-5">
                          <div class="u-form-group u-form-name u-label-top">
                            <label for="name-5359" class="u-label">VENDOR ID</label>
                            <input type="text" placeholder="Vendor_id" id="name-5359" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">
                          </div>
                          <div class="u-form-group u-label-top u-form-group-2">
                            <label for="text-03e4" class="u-label">VENDOR NAME</label>
                            <input type="text" placeholder="enter vendor name" id="text-03e4" name="text" class="u-border-1 u-border-grey-30 u-input u-input-rectangle">
                          </div>
                         
                            
                            <input type="submit" value="Submit" name="submit">
                  
                        </form>
                        
                        <?php
        $host = "localhost";
        $user = "root";
        $password = "";
        $dbname = "water_distribution";
        
        $conn = mysqli_connect($host, $user, $password, $dbname);
        echo "<p style='color:green; text-align:center;'>Connected Succesfully</p>";
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
  if (isset($_POST['submit'])) {
    $v_id = $_POST['name'];
    $v_name = $_POST['text'];
    $query = "SELECT h.wc_vendor,v.v_id,v.v_name
    FROM house h
    JOIN orders o ON h.h_id = o.h_id
    JOIN vendor v ON o.v_id = v.v_id 
    WHERE v.v_id = '$v_id' AND v.v_name = '$v_name'";
    $result = mysqli_query($conn, $query);
    if ($result) {
      // Fetch each row of the result set and display it as a table row
      echo '<table style="margin: 0 auto;" border="1">';
      // Fetch each row of the result set and display it as a table row
      while ($row = mysqli_fetch_assoc($result)){
                echo "<h4 style='text-align:center;'>Total Turnover</h3>";
        echo '<tr>';
        echo '<th>Vendor Id</th>';
        echo '<th>Vendor Name</th>';
        echo '<th>Litres Sold </th>';
        echo '<th>Turnover</th>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>' . $row['v_id'] . '</td>';
        echo '<td>' . $row['v_name'] . '</td>';
        echo '<td>' . $row['wc_vendor'] . '</td>';
        echo '<td>' . $row['wc_vendor']*0.8 . '</td>';
    }
    
    // Close the table
    echo '</table>';
    }
  }
        ?>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="u-size-30">
                <div class="u-layout-col">
                  <div class="u-align-left u-container-style u-image u-layout-cell u-right-cell u-size-60 u-image-1" data-image-width="1280" data-image-height="783">
                    <div class="u-container-layout u-valign-top u-container-layout-3"></div>
                  </div>
                </div>
              </div>
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