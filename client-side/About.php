<?php
session_start();
if (isset($_SESSION['email'])) {
  require '../includes/init.php';
	# database connection file
  include '../app/db.conn.php';
  include '../app/helpers/user.php';
  # Getting User data data
  $user_data = $user_obj->find_user_by_id($_SESSION['email']);
  $all_users = $user_obj->all_users($_SESSION['email']);
  $user = getUser($_SESSION['email'], $conn);
  $get_req_num = $frnd_obj->request_notification($_SESSION['user_id'], false);
// TOTAL FRIENDS
$get_frnd_num = $frnd_obj->get_all_friends($_SESSION['user_id'], false);
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Blood Donation, My Team, Blood Donation">
    <title>About</title>
    <link rel="stylesheet" href="../css/wholepage.css" media="screen">
<link rel="stylesheet" href="../css/About.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>
<link rel="stylesheet" href="../css/sidemenu.css" media="screen">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="icon" href="../profile_images/<?=$user['p_p']?>">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/wholepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster:400">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "../images/blood-drop.jpg"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="About">
    <meta property="og:type" content="website">
        <style>
      #heading{
        font-size: 56px;
        color: white;
        text-align: center;
      }
    </style>
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-9789"><div class="u-clearfix u-sheet u-sheet-1">
    <a href="About.php" data-page-id="155010340" class="u-image u-logo u-image-1" data-image-width="600" data-image-height="761" title="Home">
      <img src="../images/blood-drop.jpg" class="u-logo-image u-logo-image-1">
    </a>
    <h1 class="u-custom-font u-font-lobster u-headline u-hidden-sm u-hidden-xs u-text u-text-1">
      <a href="/">Blood Donation</a>
    </h1>
    <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="LG">
      <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
        <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 8px 6px; font-size: calc(1em + 16px); color: rgb(17, 17, 17) !important;">
          <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 24 24" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-499a"></use></svg>
          <svg class="u-svg-content" viewBox="0 0 24 24" id="svg-499a"><g><path d="m21.5 24h-19c-1.379 0-2.5-1.122-2.5-2.5v-19c0-1.378 1.121-2.5 2.5-2.5h19c1.379 0 2.5 1.122 2.5 2.5v19c0 1.378-1.121 2.5-2.5 2.5zm-19-23c-.827 0-1.5.673-1.5 1.5v19c0 .827.673 1.5 1.5 1.5h19c.827 0 1.5-.673 1.5-1.5v-19c0-.827-.673-1.5-1.5-1.5z"></path>
</g><g><path d="m16.5 8h-9c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h9c.276 0 .5.224.5.5s-.224.5-.5.5z"></path>
</g><g><path d="m16.5 12.5h-9c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h9c.276 0 .5.224.5.5s-.224.5-.5.5z"></path>
</g><g><path d="m16.5 17h-9c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h9c.276 0 .5.224.5.5s-.224.5-.5.5z"></path>
</g></svg>
        </a>
      </div>
      <div class="u-custom-menu u-nav-container">
        <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="../index.php" style="padding: 10px 0px;">Home</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Register.php" style="padding: 10px 0px;">Register</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="About.php" style="padding: 10px 0px;">About</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Contact.php" style="padding: 10px 0px;">Contact</a>
</li></ul>
      </div>
      <div class="u-custom-menu u-nav-container-collapse">
        <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
          <div class="u-inner-container-layout u-sidenav-overflow">
            <div class="u-menu-close"></div>
            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../index.php" style="padding: 10px 0px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Register.php" style="padding: 10px 0px;">Register</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.php" style="padding: 10px 0px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.php" style="padding: 10px 0px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Account.php" style="padding: 10px 0px;">My Account</a>
</li></ul>
          </div>
        </div>
        <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
      </div>
    </nav>
    <form action="php/search.php" method="get" class="u-border-1 u-border-grey-30 u-radius-25 u-search u-search-left u-white u-search-1">
      <button class="u-search-button" type="submit">
        <span class="u-search-icon u-spacing-10">
          <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9cc9"></use></svg>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-9cc9" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg>
        </span>
      </button>
      <input class="u-search-input" type="search" name="search" value="" placeholder="Search Blood">
    </form>
    <div class="u-border-1 u-border-grey-50 u-enable-responsive u-hidden-xs u-image u-image-circle u-preserve-proportions u-image-2" onclick="openMenu()" alt="" data-image-width="1280" data-image-height="1280" style="background-image: url(../profile_images/<?=$user['p_p']?>);"></div>
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="display:none;right:0;top:0;text-align: center;" id="menu">
      <button onclick="closeMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
      <img src="../profile_images/<?=$user['p_p']?>" alt="Profile image">
        <br>
        <h6><?php echo  $user['name'];?></h6>
        <a href="../php/myprofile.php" rel="noopener noreferrer">My Profile</a>
        <a href="../php/profile.php" rel="noopener noreferrer">All users</a>
          <a href="../php/notifications.php" rel="noopener noreferrer">Requests<span class="badge <?php
                  if($get_req_num > 0){
                      echo 'redBadge';
                  }
                  ?>"><?php echo $get_req_num;?></span></a>
    <a href="../php/friends.php" rel="noopener noreferrer">Friends<span class="badge"><?php echo $get_frnd_num;?></span></a>
        <a href="../php/home.php" rel="noopener noreferrer">Messages</a>
        <a href="../php/game.php" rel="noopener noreferrer">Games</a>
    <a href="../php/logout.php" rel="noopener noreferrer" id="logout">Logout</a>
    </div>
    <script>
      function openMenu() {
      document.getElementById("menu").style.display = "block";
    }
    
    function closeMenu() {
      document.getElementById("menu").style.display = "none";
    }
    </script>
  </div></header>
    <section class="u-align-center u-clearfix u-palette-2-light-1 u-section-1" id="carousel_3e95">
      <div class="u-align-left u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-sheet-1">
        <p id="heading">Our Team</p>
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item u-white">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <img class="u-image u-image-circle u-preserve-proportions u-image-1" alt="" data-image-width="2375" data-image-height="2966" src="../images/lucky.jpg"></img>
                <h2 class="u-custom-item u-text u-text-2">Taorem <span style="font-size: 1.875rem;">Lucky Singh</span>
                </h2>
                <h3 class="u-text u-text-grey-50 u-text-3">Front End And<br>Back End Developer</h3>
              </div>
            </div>
            <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item u-white">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <img class="u-image u-image-circle u-preserve-proportions u-image-2" alt="" data-image-width="1440" data-image-height="1270" src="../images/pushpender.jpg"></img>
                <h2 class="u-custom-item u-text u-text-4"> Pushpendra Kumar<br>
                </h2>
                <h3 class="u-text u-text-grey-50 u-text-5">Back End Developer</h3>
              </div>
            </div>
            <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item u-white">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <img class="u-image u-image-circle u-preserve-proportions u-image-3" alt="" data-image-width="1280" data-image-height="852" src="../images/shubrat.jpg"></img>
                <h2 class="u-custom-item u-text u-text-6">Shubrat Tripathi</h2>
                <h3 class="u-text u-text-grey-50 u-text-7">Content writer</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr style="height:2px;border-width:0;background-color:white">
    </section>

    <section class="u-align-center u-clearfix u-palette-2-light-1 u-section-1" id="carousel_3e95">
      <div class="u-align-left u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-sheet-1">
        <p id="heading">Association with</p>
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item u-white">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <img class="u-image u-image-circle u-preserve-proportions u-image-1" alt="" data-image-width="2375" data-image-height="2966" src="../images/amandeep.jpg"></img>
                <h2 class="u-custom-item u-text u-text-2">Amandeep Kaur Sandhu
                </h2>
                <h3 class="u-text u-text-grey-50 u-text-3">Faculty</h3>
              </div>
            </div>
            <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item u-white">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <img class="u-image u-image-circle u-preserve-proportions u-image-2" alt="" data-image-width="1440" data-image-height="1270" src="../images/devdutt.jpg"></img>
                <h2 class="u-custom-item u-text u-text-4"> Devdutt Baresary<br>
                </h2>
                <h3 class="u-text u-text-grey-50 u-text-5">Faculty</h3>
              </div>
            </div>
            <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item u-white">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <img class="u-image u-image-circle u-preserve-proportions u-image-3" alt="" data-image-width="1280" data-image-height="852" src="../images/sweety.jpg"></img>
                <h2 class="u-custom-item u-text u-text-6">Sweety Sehgal</h2>
                <h3  class="u-text u-text-grey-50 u-text-7">Head of Department</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <footer class="u-clearfix u-footer u-grey-80" id="sec-d833"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="#" class="u-image u-logo u-image-1" data-image-width="600" data-image-height="761">
          <img src="../images/blood-drop.png" class="u-logo-image u-logo-image-1">
        </a>
        <h1 class="u-custom-font u-font-lobster u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-1">Blood Donation</h1>
      </div></footer>
  </body>
</html>
<?php
  }else{
  	header("Location: ../php/index.php");
   	exit;
  }
 ?>