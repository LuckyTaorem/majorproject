<?php
  session_start();
  if (isset($_SESSION['email'])) {
    require '../includes/init.php';
    include '../app/db.conn.php';
  	include '../app/helpers/user.php';
      if(isset($_GET['id'])){
        $user_data = $user_obj->find_user_by_id($_GET['id']);
        if($user_data ===  false){
            header('Location: profile.php');
            exit;
        }
        else{
            if($user_data->user_id == $_SESSION['user_id']){
                header('Location: profile.php');
                exit;
            }
        }
    }
    # Getting User data data
  	$user = getUser($_SESSION['email'], $conn);
        // FETCH ALL USERS WHERE ID IS NOT EQUAL TO MY ID
        $all_users = $user_obj->all_users($_SESSION['user_id']);

// REQUEST NOTIFICATION NUMBER
$get_req_num = $frnd_obj->request_notification($_SESSION['user_id'], false);
// TOTAL FRIENDS
$get_frnd_num = $frnd_obj->get_all_friends($_SESSION['user_id'], false);

// CHECK FRIENDS
$is_already_friends = $frnd_obj->is_already_friends($_SESSION['user_id'], $user_data->user_id);
//  IF I AM THE REQUEST SENDER
$check_req_sender = $frnd_obj->am_i_the_req_sender($_SESSION['user_id'], $user_data->user_id);
// IF I AM THE REQUEST RECEIVER
$check_req_receiver = $frnd_obj->am_i_the_req_receiver($_SESSION['user_id'], $user_data->user_id);
$con = new mysqli("localhost","luckytaorem","","minorproject");
$bg=mysqli_query($con,"SELECT * from donordetails where email='".$user_data->email."'");
$bg2=mysqli_query($con,"SELECT bg from donordetails where email='".$user_data->email."'");
$sql = "select email from donordetails where email='".$user_data->email."'";
$result=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo  $user_data->name;?></title>
    <link rel="stylesheet" href="../css/sidemenu.css" media="screen">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="../client-side/css/style.css" media="screen"/>
    <link rel="stylesheet" href="../css/wholepage.css" media="screen">
<link rel="stylesheet" href="../css/Account.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/wholepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster:400">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
</head>
<body class="u-body"><header class="u-clearfix u-header u-header" id="sec-9789"><div class="u-clearfix u-sheet u-sheet-1">
    <a href="#" data-page-id="155010340" class="u-image u-logo u-image-1" data-image-width="600" data-image-height="761" title="Home">
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
        </li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="../client-side/Register.php" style="padding: 10px 0px;">Register</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="../client-side/About.php" style="padding: 10px 0px;">About</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="../client-side/Contact.php" style="padding: 10px 0px;">Contact</a>
</li></ul>
      </div>
      <div class="u-custom-menu u-nav-container-collapse">
        <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
          <div class="u-inner-container-layout u-sidenav-overflow">
            <div class="u-menu-close"></div>
            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../index.php" style="padding: 10px 0px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../client-side/Register.php" style="padding: 10px 0px;">Register</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../client-side/About.php" style="padding: 10px 0px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../client-side/Contact.php" style="padding: 10px 0px;">Contact</a>
</li></ul>
          </div>
        </div>
        <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
      </div>
    </nav>
    <form action="../client-side/php/search.php" method="get" class="u-border-1 u-border-grey-30 u-radius-25 u-search u-search-left u-white u-search-1">
      <button class="u-search-button" type="submit">
        <span class="u-search-icon u-spacing-10">
          <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9cc9"></use></svg>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-9cc9" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg>
        </span>
      </button>
      <input class="u-search-input" type="search" name="search" value="" placeholder="Search">
    </form>
    <div class="u-border-1 u-border-grey-50 u-enable-responsive u-hidden-xs u-image u-image-circle u-preserve-proportions u-image-2" onclick="openMenu()" alt="" data-image-width="1280" data-image-height="1280" style="background-image: url(../profile_images/<?=$user['p_p']?>);"></div>
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="display:none;right:0;top:0;text-align: center;" id="menu">
      <button onclick="closeMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
      <img src="../profile_images/<?=$user['p_p']?>" alt="Profile image">
        <br>
        <h6><?php echo $user['name'];?></h6>
        <a href="myprofile.php" rel="noopener noreferrer">My Profile</a>
        <a href="profile.php" rel="noopener noreferrer">All users</a>
          <a href="notifications.php" rel="noopener noreferrer">Requests<span class="badge <?php
                  if($get_req_num > 0){
                      echo 'redBadge';
                  }
                  ?>"><?php echo $get_req_num;?></span></a>
    <a href="friends.php" rel="noopener noreferrer">Friends<span class="badge"><?php echo $get_frnd_num;?></span></a>
        <a href="../php/home.php" rel="noopener noreferrer">Messages</a>
    <a href="../php/game.php" rel="noopener noreferrer">Games</a>
    <a href="logout.php" rel="noopener noreferrer" id="logout">Logout</a>
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
    <div class="profile_container" style="margin-top:2%;">
    <?php
if (mysqli_num_rows($result) > 0) {
    ?>
    <div class="img" style=" border-radius:0;" >
                <img src="../profile_images/<?php echo $user_data->p_p; ?>" alt="Profile image"  style="width:150px; height:150px; margin-left:5%; float:left;">
                <p style="display:inline;margin-left:2%; font-size:30px; font-weight:bold;"><?php echo $user_data->name?></p>
                <br>
                <div class="inner_profile" style="float:right;margin-right:20%;">
            <div class="actions">
                <?php
                if($is_already_friends){
                    echo '<span style="border:1px solid black; padding:20px;"><taorem style="font-size:20px;font-weight:bold;"></taorem>&nbsp;<a href="functions.php?action=unfriend_req&id='.$user_data->user_id.'" class="req_actionBtn unfriend">Unfriend</a><span>';
                }
                elseif($check_req_sender){
                    echo '<span style="border:1px solid black; padding:20px;"><a href="functions.php?action=cancel_req&id='.$user_data->user_id.'" class="req_actionBtn cancleRequest">Cancel Request</a><span>';
                }
                elseif($check_req_receiver){
                    echo '<span style="border:1px solid black; padding:20px;"><taorem style="font-size:20px;font-weight:bold;">Friend Request</taorem>&nbsp;
                    <a href="functions.php?action=accept_req&id='.$user_data->user_id.'" class="req_actionBtn acceptRequest">Accept</a>
                    &nbsp;<a href="functions.php?action=ignore_req&id='.$user_data->user_id.'" class="req_actionBtn ignoreRequest">Declined</a>
                    <span>';
                }
                else{
                    echo '<span style="border:1px solid black; padding:20px;"><a href="functions.php?action=send_req&id='.$user_data->user_id.'" class="req_actionBtn sendRequest">Send Friend Request</a><span>';
                }
                ?>
        
            </div>
        </div>
                <p style="display:inline;margin-left:2%; font-size:30px;">Blood Group : <?php 
          while ($row2 = mysqli_fetch_array($bg2)){
          echo "".strtoupper($row2['bg']);
          } ?></p>
          <br>
          <p style="display:inline;margin-left:2%; font-size:30px;">Email : <a href="mailto:<?php echo $user_data->email?>"><?php echo $user_data->email?></a></p>
            </div>
        <center>
            <hr style="width:80%;border-top:1px solid black;">
        </center>
        
        <div style="width:45%;margin-left:5%;float:left;">
        <h3>LOCATION</h3>
        <hr style="width:80%;border-top:1px solid black;">
        <?php 
        while ($row = mysqli_fetch_array($bg))
        {
          echo "<span style='font-size:22px;text-decoration:none;'>";
          echo "City<br>";
          echo "<taorem style='font-weight:bold;'>".$row['city']."</taorem>";
          echo "<br><br>Pincode / Zipcode<br>";
          echo "<taorem style='font-weight:bold;'>".$row['pin']."</taorem>";
          echo "<br><br>Address<br>";
          echo "<taorem style='font-weight:bold;'>".$row['address']."</taorem>";
          echo "</span>";
          ?>
        </div>
        <div style="width:45%;margin-left:5%; float:left;">
        <h3>Contact Information</h3>
        <hr style="width:80%;border-top:1px solid black;">
        <?php
        echo "<span style='font-size:22px;text-decoration:none;'>";
        echo "Phone Number<br>";
        echo "<taorem style='font-weight:bold;'>".$row['phn']."</taorem>";
        echo "</span>";
        ?>
        </div>
    <?php

      }}else{?>
      <div class="img" style=" border-radius:0;" >
                <img src="../profile_images/<?php echo $user_data->p_p; ?>" alt="Profile image"  style="width:150px; height:150px; margin-left:5%; float:left;">
                <p style="display:inline;margin-left:2%; font-size:30px; font-weight:bold;"><?php echo ucwords($user_data->name)?></p>
                <br>
                <p style="display:inline;margin-left:2%; font-size:30px;"><?php echo ucwords($user_data->name)." has not Registered as donor."?></p>
                <div class="inner_profile" style="float:right;margin-right:20%;">
            <div class="actions">
            <?php
                if($is_already_friends){
                    echo '<span style="border:1px solid black; padding:20px;"><taorem style="font-size:20px;font-weight:bold;"></taorem>&nbsp;<a href="functions.php?action=unfriend_req&id='.$user_data->user_id.'" class="req_actionBtn unfriend">Unfriend</a><span>';
                }
                elseif($check_req_sender){
                    echo '<span style="border:1px solid black; padding:20px;"><a href="functions.php?action=cancel_req&id='.$user_data->user_id.'" class="req_actionBtn cancleRequest">Cancel Request</a><span>';
                }
                elseif($check_req_receiver){
                    echo '<span style="border:1px solid black; padding:20px;"><taorem style="font-size:20px;font-weight:bold;">Friend Request</taorem>&nbsp;
                    <a href="functions.php?action=accept_req&id='.$user_data->user_id.'" class="req_actionBtn acceptRequest">Accept</a>
                    &nbsp;<a href="functions.php?action=ignore_req&id='.$user_data->user_id.'" class="req_actionBtn ignoreRequest">Declined</a>
                    <span>';
                }
                else{
                    echo '<span style="border:1px solid black; padding:20px;"><a href="functions.php?action=send_req&id='.$user_data->user_id.'" class="req_actionBtn sendRequest">Send Friend Request</a><span>';
                }
                ?>
        
            </div>
        </div>
      </div>
      
                        <?php
        }
        ?>
        </div>
    </div>
    </div>
</body>
</html>
<?php
        }else{
          header("Location: home.php");
           exit;
        }
        ?>