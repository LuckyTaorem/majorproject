<?php
session_start();
if (isset($_SESSION['email'])) {
  require '../../includes/init.php';
	# database connection file
  include '../../app/db.conn.php';
  include '../../app/helpers/user.php';
  # Getting User data data
  $user_data = $user_obj->find_user_by_id($_SESSION['email']);
  $all_users = $user_obj->all_users($_SESSION['email']);
  $user = getUser($_SESSION['email'], $conn);
  $get_req_num = $frnd_obj->request_notification($_SESSION['user_id'], false);
// TOTAL FRIENDS
$get_frnd_num = $frnd_obj->get_all_friends($_SESSION['user_id'], false);
$con = new mysqli("localhost","luckytaorem","","minorproject");
    $bg = $_GET['search'];
    $_SESSION['search'] = $bg;
    $searchcity = $_GET['searchcity'] ?? "";
    
    //$query = "SELECT * FROM employees
   // WHERE first_name LIKE '%{$name}%' OR last_name LIKE '%{$name}%'";

    // Check connection
    if (mysqli_connect_error())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
if($bg!=null){
$result = mysqli_query($con, "SELECT * FROM donordetails WHERE bg LIKE '%{$bg}%'ORDER BY name ASC");
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Blood Donation, Blood Donation">
    <title>Search</title>
    <link rel="stylesheet" href="../../css/wholepage.css" media="screen">
<link rel="stylesheet" href="../../css/Register.css" media="screen">
<link rel="stylesheet" href="../../css/sidemenu.css" media="screen">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="icon" href="../profile_images/<?=$user['p_p']?>">
<link rel="stylesheet" type="text/css" href="../css/style.css" media="screen"/>
    <script class="u-script" type="text/javascript" src="../../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../../js/wholepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster:400">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "../images/blood-drop.jpg"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="search">
    <meta property="og:type" content="website">
    <style>
        table{
            margin-left:auto;
            margin-right:auto;
            font-size:1vw;
            text-align:center;
            width:98%;
            margin-top:1%;
            border-collapse:collapse;
        }
        th{
            width:fit-content;
            padding-top:10px;
            padding-bottom:10px;

        }
        thead{
            background-color:lightblue;
        }
        tbody{
            background-color:white;
        }
        td{
            padding-top:10px;
            padding-bottom:10px;
        }
        #searchcity{
          margin-top:2%;
    margin-left:1%;
    width:fit-content;
  }
  @media only screen and (max-width: 600px) {
    #searchcity{
      font-size: 8px;
      height: 25px;
    }
  }
        </style>
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-9789"><div class="u-clearfix u-sheet u-sheet-1">
    <a href="#" data-page-id="155010340" class="u-image u-logo u-image-1" data-image-width="600" data-image-height="761" title="Home">
      <img src="../../images/blood-drop.jpg" class="u-logo-image u-logo-image-1">
    </a>
    <h1 class="u-custom-font u-font-lobster u-headline u-hidden-sm u-hidden-xs u-text u-text-1">
      <a href="#">Blood Donation</a>
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
        <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="../../index.php" style="padding: 10px 0px;">Home</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="../Register.php" style="padding: 10px 0px;">Register</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="../About.php" style="padding: 10px 0px;">About</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="../Contact.php" style="padding: 10px 0px;">Contact</a>
</li></ul>
      </div>
      <div class="u-custom-menu u-nav-container-collapse">
        <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
          <div class="u-inner-container-layout u-sidenav-overflow">
            <div class="u-menu-close"></div>
            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../../index.php" style="padding: 10px 0px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../Register.php" style="padding: 10px 0px;">Register</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../About.php" style="padding: 10px 0px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../Contact.php" style="padding: 10px 0px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../Account.php" style="padding: 10px 0px;">My Account</a>
</li></ul>
          </div>
        </div>
        <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
      </div>
    </nav>
    <form action="" method="get" class="u-border-1 u-border-grey-30 u-radius-25 u-search u-search-left u-white u-search-1">
      <button class="u-search-button" type="submit">
        <span class="u-search-icon u-spacing-10">
          <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9cc9"></use></svg>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-9cc9" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg>
        </span>
      </button>
      <input class="u-search-input" type="search" name="search" value="" placeholder="Search Blood">
    </form>
    <div class="u-border-1 u-border-grey-50 u-enable-responsive u-hidden-xs u-image u-image-circle u-preserve-proportions u-image-2" onclick="openMenu()" alt="" data-image-width="1280" data-image-height="1280" style="background-image: url(../../profile_images/<?=$user['p_p']?>);"></div>
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="display:none;right:0;top:0;text-align: center;" id="menu">
      <button onclick="closeMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
      <img src="../../profile_images/<?=$user['p_p']?>" alt="Profile image">
        <br>
        <h6><?php echo  $user['name'];?></h6>
        <a href="../../php/myprofile.php" rel="noopener noreferrer">My Profile</a>
        <a href="../../php/profile.php" rel="noopener noreferrer">All users</a>
          <a href="../../php/notifications.php" rel="noopener noreferrer">Requests<span class="badge <?php
                  if($get_req_num > 0){
                      echo 'redBadge';
                  }
                  ?>"><?php echo $get_req_num;?></span></a>
    <a href="../../php/friends.php" rel="noopener noreferrer">Friends<span class="badge"><?php echo $get_frnd_num;?></span></a>
        <a href="../../php/home.php" rel="noopener noreferrer">Messages</a>
        <a href="../../php/game.php" rel="noopener noreferrer">Games</a>
    <a href="../../php/logout.php" rel="noopener noreferrer" id="logout">Logout</a>
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
   <?php
  if($bg == "a+" || $bg == "a-" || $bg == "b+" || $bg == "b-" || $bg == "o+" || $bg == "o-" || $bg == "ab+" || $bg == "ab-"
  ||$bg == "A+" || $bg == "A-" || $bg == "B+" || $bg == "B-" || $bg == "O+" || $bg == "O-" || $bg == "AB+" || $bg == "AB-"|| $bg == "Ab+" || $bg == "Ab-"
  || $bg == "aB+" || $bg == "aB-"){
if ($result->num_rows > 0){
      ?>
  <form action="multiplesearch.php" method="get" id="searchcity">
      <input type="search" name="searchcity" placeholder="Search City">
      <input type="submit" value="Search">
</form>
    <table>
    <thead>
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Blood Group</th>
    <th>Ph.Number</th>
    <th>City</th>
    <th>Pincode</th>
    <th>Address</th>
  </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_array($result))
        {
          echo "<tr><td>".ucwords(strtolower($row['name']))."</td><td><a href=".'mailto:'.$row['email'].">".strtolower($row['email'])."</a></td><td>".strtoupper($row['bg'])."</td><td>{$row['phn']}</td><td>".ucwords(strtolower($row['city']))."</td><td>{$row['pin']}</td><td>{$row['address']}</td></tr>\n";
      }
          }else{
            echo "<p style='text-align:center;font-size:30px;'>No Users with ".strtoupper($bg)." blood found</p>";
          }
        }
        else{
          echo "<p style='text-align:center;font-size:30px;'>Enter the Correct Blood Group...</p>";
        }
        ?>
    </tbody>
    </table>
  </body>
</html>
    <?php

    mysqli_close($con);
}else{
  header("location:".$_SERVER['HTTP_REFERER']);
die;
}
    ?>
    <?php
  }else{
  	header("Location: ../../php/home.php");
   	exit;
  }
 ?>