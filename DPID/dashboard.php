<?php

include 'Database/connection.php';

session_start();

if($_SESSION['type_user'] == "Vendor")
{
$queryGetId = "SELECT * FROM MST_USER_VENDOR WHERE ID = '" . $_SESSION['id_user'] . "' ";
$sqlGetId = mysqli_query($koneksi, $queryGetId);
$cekGetId = mysqli_fetch_assoc($sqlGetId);
$id_vendor = $cekGetId['ID_VENDOR'];
}
// session_start();

?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Post 6 Headline, Post 5 Headline, Post 4 Headline">
    <meta name="description" content="">
    <title>Dashboard</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="dashboard.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.0.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/bank_indo-removebg-preview11.png",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#3a50f9">
    <meta property="og:title" content="Dashboard">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-d497"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="150" data-image-height="146">
          <img src="images/bank_indo-removebg-preview11.png" class="u-logo-image u-logo-image-1">
        </a>
        <p class="u-custom-font u-font-georgia u-text u-text-default u-text-1">ArchiveHub DPID</p>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="MD">
          <div class="menu-collapse u-custom-font u-font-georgia" style="font-size: 0.75rem; letter-spacing: 0px; text-transform: uppercase; font-weight: 700;">
            <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-custom-font u-font-georgia u-nav u-spacing-70 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-grey-90 u-text-hover-grey-90" href="Home.php" style="padding: 8px;">Home</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-grey-90 u-text-hover-grey-90" href="Archive.php" style="padding: 8px;">Archive</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-grey-90 u-text-hover-grey-90" href="Dashboard.php" style="padding: 8px;">Dashboard</a>
<div class="u-nav-popup"><ul class="u-custom-font u-font-georgia u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white">DPID</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white">Vendor</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-grey-90 u-text-hover-grey-90" href="Database/Logout.php" style="padding: 8px;">Logout</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Archive.html">Archive</a><div class="u-nav-popup"><ul class="u-custom-font u-font-georgia u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4"><li class="u-nav-item"><a class="u-button-style u-nav-link">DPID</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Vendor</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Database/Logout.php">Logout</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-8b66">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-default u-text-1">Summary</p><!--blog--><!--blog_options_json--><!--{"type":"Recent","source":"","tags":"","count":""}--><!--/blog_options_json-->
        <div class="u-blog u-expanded-width u-blog-1">
          <div class="u-list-control"></div>
          <div class="u-repeater u-repeater-1"><!--blog_post-->
            <div class="u-blog-post u-container-style u-repeater-item u-white u-repeater-item-1">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><!--blog_post_header-->
                <h4 class="u-blog-control u-text u-text-2">
                  <a class="u-post-header-link" href="blog/post-5.html">Data Terkirim</a>
                </h4><!--/blog_post_header-->
                <div class="u-border-2 u-border-black u-container-style u-expanded-width u-group u-palette-4-base u-group-1">
                  <div class="u-container-layout u-container-layout-2"><!--blog_post_header-->
                    <!--<h2 class="u-blog-control u-text u-text-3">
                      <a class="u-post-header-link" href="blog/post-5.html">blog_post_header_content--><!--/blog_post_header_content</a>
                    </h2>/blog_post_header-->
                      <img class="u-blog-control u-image u-image-default u-image-1" src="Assets/emailsent.png" alt="" data-image-width="1500" data-image-height="500"><!--/blog_post_image-->
                    
                    <?php
                    
                    $query = "SELECT COUNT(*) as Total FROM TRN_FILES_VENDOR WHERE ID_USER = '" . $_SESSION['id_user'] . "'";

                    $sql = mysqli_query($koneksi, $query);
                    $cek = mysqli_fetch_assoc($sql);

                    echo '<p class="u-text u-text-4">' . $cek['Total'] . '</p>';

                    ?>
                  </div>
                </div><!--blog_post_content-->
                <!-- <div class="u-blog-control u-post-content u-text u-text-5 fr-view">Sample small text. Lorem ipsum dolor sit amet.</div> -->
                <a href="blog/post-5.html" class="u-blog-control u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-none u-btn-1"><!--blog_post_readmore_content--><!--options_json--><!--{"content":"","defaultValue":"Read More"}--><!--/options_json-->Read More<!--/blog_post_readmore_content--></a><!--/blog_post_readmore-->
              </div>
            </div><div class="u-blog-post u-container-style u-repeater-item u-video-cover u-white">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><!--blog_post_header-->
                <h4 class="u-blog-control u-text u-text-6">
                  <a class="u-post-header-link" href="blog/post-4.html">Data Diterima</a>
                </h4><!--/blog_post_header-->
                <div class="u-border-2 u-border-black u-container-style u-expanded-width u-group u-palette-4-base u-group-2">
                  <div class="u-container-layout u-container-layout-4"><!--blog_post_header-->
                    <!--<h2 class="u-blog-control u-text u-text-7">
                      <a class="u-post-header-link" href="blog/post-4.html"><blog_post_header_content/blog_post_header_content</a>
                    </h2>-->
                      <img class="u-blog-control u-image u-image-default u-image-2" src="Assets/emailreceived.png" alt="" data-image-width="2000" data-image-height="1333"><!--/blog_post_image-->
                      <?php
                      $queryGetId = "SELECT * FROM MST_USER_VENDOR WHERE ID = '" . $_SESSION['id_user'] . "' ";
                      $sqlGetId = mysqli_query($koneksi, $queryGetId);
                      $cekGetId = mysqli_fetch_assoc($sqlGetId);
                      
                      $id_vendor = $cekGetId['ID_VENDOR'];
                      $queryGetEmailReceived = "SELECT COUNT(*) as Total FROM TRN_FILES_DPID WHERE ID_VENDOR = '" . $id_vendor . "'";

                      $sqlGetEmailReceived = mysqli_query($koneksi, $queryGetEmailReceived);
                      $cekGetEmailReceived = mysqli_fetch_assoc($sqlGetEmailReceived);

                      echo '<p class="u-text u-text-8">' . $cekGetEmailReceived['Total'] . '</p>';
                    ?>
                  </div>
                </div><!--blog_post_content-->
                <!-- <div class="u-blog-control u-post-content u-text u-text-9 fr-view">Sample small text. Lorem ipsum dolor sit amet.</div> -->
                <a href="blog/post-4.html" class="u-blog-control u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-none u-btn-2"><!--blog_post_readmore_content--><!--options_json--><!--{"content":"","defaultValue":"Read More"}--><!--/options_json-->Read More<!--/blog_post_readmore_content--></a><!--/blog_post_readmore-->
              </div>
            </div><div class="u-blog-post u-container-style u-repeater-item u-video-cover u-white">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5"><!--blog_post_header-->
                <h4 class="u-blog-control u-text u-text-10">
                  <a class="u-post-header-link" href="blog/post-3.html">Total User</a>
                </h4><!--/blog_post_header-->
                <div class="u-border-2 u-border-black u-container-style u-expanded-width u-group u-palette-4-base u-group-3">
                  <div class="u-container-layout u-container-layout-6"><!--blog_post_header-->
                    <h2 class="u-blog-control u-text u-text-11">
                    </h2><!--/blog_post_header-->
                      <img class="u-blog-control u-image u-image-default u-image-3" src="Assets/user.png" alt="" data-image-width="2000" data-image-height="1333"><!--/blog_post_image-->
                      <?php
                    
                    $queryTotalUser = "SELECT COUNT(*) as Total FROM MST_USER_VENDOR WHERE ID_VENDOR = '" . $id_vendor . "'";

                    $sqlTotalUser = mysqli_query($koneksi, $queryTotalUser);
                    $cekTotalUser = mysqli_fetch_assoc($sqlTotalUser);

                    echo '<p class="u-text u-text-4">' . $cekTotalUser['Total'] . '</p>';

                    ?>
                  </div>
                </div><!--blog_post_content-->
                <!-- <div class="u-blog-control u-post-content u-text u-text-13 fr-view">Sample small text. Lorem ipsum dolor sit amet.</div> -->
                <a href="blog/post-3.html" class="u-blog-control u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-none u-btn-3"><!--blog_post_readmore_content--><!--options_json--><!--{"content":"","defaultValue":"Read More"}--><!--/options_json-->Read More<!--/blog_post_readmore_content--></a><!--/blog_post_readmore-->
              </div>
            </div><!--/blog_post--><!--blog_post-->
            <!--/blog_post--><!--blog_post-->
            <!--/blog_post-->
          </div>
          <div class="u-list-control"></div>
        </div><!--/blog-->
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-2" id="sec-b463">
      <div class="u-clearfix u-sheet u-valign-top u-sheet-1">
        <p class="u-text u-text-default u-text-1">Summary</p>
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <table class="u-table-entity u-table-entity-1">
            <colgroup>
              <col width="25%">
              <col width="25%">
              <col width="25%">
              <col width="25%">
            </colgroup>
            <?php
                    if ($_SESSION['type_user'] == "DPID") {
                      $query = "SELECT * FROM TRN_FILES_DPID WHERE ID_USER = '" . $_SESSION['id_user'] . "'";

                      $sql = mysqli_query($koneksi, $query);

                      echo '<thead class="u-grey-50 u-table-header u-table-header-1">
                      <tr style="height: 21px;">
                        <th class="u-border-1 u-border-grey-50 u-table-cell">NO</th>
                        <th class="u-border-1 u-border-grey-50 u-table-cell">Date</th>
                        <th class="u-border-1 u-border-grey-50 u-table-cell">ID Vendor</th></th>
                        <th class="u-border-1 u-border-grey-50 u-table-cell">ID User</th>
                        <th class="u-border-1 u-border-grey-50 u-table-cell">Subject</th>
                        <th class="u-border-1 u-border-grey-50 u-table-cell">Description</th>
                        <th class="u-border-1 u-border-grey-50 u-table-cell">File Name</th>
                        <th class="u-border-1 u-border-grey-50 u-table-cell">File Path</th>
                      </tr>
                    </thead>';
                    while ($row = mysqli_fetch_array($sql)){
                      echo'<tbody class="u-table-body">
                      <tr style="height: 75px;">
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">'.$row['ID'].'</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">'.$row['DATE'].'</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">'.$row['ID_VENDOR'].'</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">'.$row['ID_USER'].'</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">'.$row['SUBJECT'].'</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">'.$row['DESCRIPTION'].'</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">'.$row['FILE_NAME'].'</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">'.$row['FILE_PATH'].'</td>
                      </tr>
                      </tbody>';
                    }
                  }else{
                    $query = "SELECT * FROM TRN_FILES_VENDOR WHERE ID_USER = '" . $_SESSION['id_user'] . "'";

                      $sql = mysqli_query($koneksi, $query);

                      echo '<thead class="u-grey-50 u-table-header u-table-header-1">
                      <tr style="height: 21px;">
                        <th class="u-border-1 u-border-grey-50 u-table-cell">NO</th>
                        <th class="u-border-1 u-border-grey-50 u-table-cell">DATE</th>
                        <th class="u-border-1 u-border-grey-50 u-table-cell">ID User</th>
                        <th class="u-border-1 u-border-grey-50 u-table-cell">Subject</th>
                        <th class="u-border-1 u-border-grey-50 u-table-cell">Description</th>
                        <th class="u-border-1 u-border-grey-50 u-table-cell">File Name</th>
                        <th class="u-border-1 u-border-grey-50 u-table-cell">File Path</th>
                      </tr>
                    </thead>';
                    while ($row = mysqli_fetch_array($sql)){
                      echo'<tbody class="u-table-body">
                      <tr style="height: 75px;">
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">'.$row['ID'].'</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">'.$row['DATE'].'</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">'.$row['ID_USER'].'</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">'.$row['SUBJECT'].'</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">'.$row['DESCRIPTION'].'</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">'.$row['FILE_NAME'].'</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">'.$row['FILE_PATH'].'</td>
                      </tr>
                      </tbody>';
                    }
                  }
                    ?>
          </table>
        </div>
      </div>
    </section>
    
    <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-white" id="sec-7512"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="143" data-image-height="139">
          <img src="images/bank_indo-removebg-preview11-2.png" class="u-logo-image u-logo-image-1">
        </a>
        <p class="u-align-center-lg u-align-center-md u-align-center-xl u-custom-font u-font-georgia u-text u-text-1">Powered by DPID - Bank Indonesia</p>
        <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href=""><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-2802"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-2802"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
      c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href=""><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1a25"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-1a25"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
      c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
      c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
      c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
      c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href=""><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7673"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-7673"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
      z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
      C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
      c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="linkedin" target="_blank" href=""><span class="u-icon u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e4e4"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-e4e4"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
      C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
      H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path></svg></span>
          </a>
        </div>
      </div></footer>  
</body></html>