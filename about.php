<?php
  // message vars
  $msg = '';
  $msgClass = '';

  // check for Submit
  if(filter_has_var(INPUT_POST, 'submit')){
    //get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // check required fields
    if(!empty($email) && !empty($name) && !empty($message)){
      // check email
      if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        $msg = 'Please enter a valid email';
      } else {
        // recipient Email
        $toEmail = 'galenwinsor@willow-resource.com';
        $subject = 'Contact Request From '.$name;
        $body = '<h2>Contact Request</h2>
          <h4>Name</h4><p>'.$name.'</p>
          <h4>Email</h4><p>'.$email.'</p>
          <h4>Message</h4><p>'.$message.'</p>
        ';

        // email headers
        $headers = 'MIME-Version: 1.0' . '\r\n';
        $headers .= 'Content-Type:text/html;charset=UTF-8'.'\r\n';

        // additional headers
        $headers .= 'From: '.$name."<".$email.'>'.'\r\n';

        if(mail($toEmail, $subject, $body, $headers)){
          // email sent
          $msg = 'Your email has been sent';
        } else {
          $msg = 'Oops! There was an error while sending your email. Please try again.';
        }
      }
    } else {
      $msg = 'Please fill in all fields';
    }
  }

  echo '<script> error = "'.$msg.'"</script>';
 ?>

<script type="text/javascript">
  var error;

  if(error != ''){
    alert(error);
  }
</script>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="icon" href="favicon.ico">
    <title>Willow - About</title>
  </head>
  <body>
    <div id="side-menu" class="sidebar">
        <a onclick="closeSlideMenu()">&times;</a>
        <a href="index.html">Home</a>
        <span id="drop-1" onmouseover="dropdown('general-dropdown')" onmouseout="dropup('general-dropdown')">
          <a href="general.html">General</a>
          <div id="general-dropdown" onmouseover="showDrop('drop-btn-1')" onmouseout="hideDrop('drop-btn-1')">
            <a href="databases.html">Databases</a>
            <a href="support.html">Online Support Groups</a>
            <a href="personal.html">Personal Coping</a>
          </div>
        </span>
        <a href="map.html">Resources Near You</a>
        <span id="drop-2" onmouseover="dropdown('religion-dropdown')" onmouseout="dropup('religion-dropdown')">
          <a href="religion.html">Spiritual & Religious</a>
          <div id="religion-dropdown" onmouseover="showDrop('drop-btn-2')" onmouseout="hideDrop('drop-btn-2')">
            <a href="christianity.html">Christianity</a>
            <a href="judaism.html">Judaism</a>
            <a href="islam.html">Islam</a>
          </div>
        </span>
        <a href="gathering.html">Gathering</a>
        <a href="planning.html">Planning Ahead</a>
        <a href="kids.html">Kids & Young Adults</a>
        <a href="voices.html">Voices</a>
        <a href="about.html">About</a>
    </div>

    <div id="navbar">
      <span id="left-navbar">
        <span id="open-sidebar">
          <a onclick="openSlideMenu()">
            <svg width="20" height="20">
              <path d="M0,5 20,5" stroke="#444" stroke-weight="3"/>
              <path d="M0,10 20,10" stroke="#444" stroke-weight="3"/>
              <path d="M0,15 20,15" stroke="#444" stroke-weight="3"/>
            </svg>
          </a>
        </span>

        <span id="willow-logo">
          <a href="index.html">
            <img src="images/willow.jpg" alt="">
          </a>
        </span>

        <h3 id="willow-top-title">willow</h3>
      </span>

      <span id="right-navbar">
        <a id="header-share-btn" href="https://docs.google.com/forms/d/e/1FAIpQLScyr3UbyTQbbWcXZtbDlFMhCTRMxw6XzWECs20eh39spCDFRA/viewform" target="_blank"><button type="button" name="button">Share a resource</button></a>
      </span>
    </div>

    <div class="background">

    </div>

    <div class="container">

      <div class="sub-header">
        <div id="main-header-box">
          <span class="sub-header-h1">
            <img id="leaf-left" src="images/leaf_left.png" alt="">
            <h1>about</h1>
            <img id="leaf-right" src="images/leaf_right.png" alt="">
          </span>
        </div>
      </div>

      <span class="wrap">
        <span id="wrap-about">
          <div>
            <img id="about-img" src="images/willow_title.png" alt="">
          </div>
          <div id="about-blurb-1">
            <h2>Willow</h2>
            <p>This collaborative website provides resources contributed by people all over the country for grieving during the COVID-19 pandemic. Willow consolidates the many existing resources and sources of support into one accessible database. If you have lost a loved one during this time, whether to COVID or not, this site will help you find support.</p>
            <h2>contact</h2>
            <p>For questions, thoughts, and concerns regarding the site, please email <strong>info@willow-resource.com</strong>. </p>
          </div>
        </span>
      </span>

      <div class="about-blurb">
        <h2>about the site manager</h2>
        <p>My name is Gemma Brand-Wolf. I live in Los Angeles, California and am currently staying inside with my family just like everyone else. I am a student at Brown University pursuing an independent concentration in "Studies of Death & Life." Willow began as a research project for Craig Barton's Spring 2020 class "Memory, Monuments and Identity in American Urbanism." Upon transitioning to remote learning, the class shifted its focus to COVID-19, compiling a database of information as a kind of time capsule of personal experience and global change. In my research on grief and mourning under public health restrictions such as social distancing and quarantine, I found that resources for the bereaved were not only lacking, but extremely difficult to find. At the same time, I learned just how much grief and mourning practices have and must change during this time. I saw a need for a consolidated and accessible database of sources for the bereaved. I really hope that Willow will offer help, support, and guidance to those in need.</p>
      </div>

      <div class="about-blurb">
        <h2>about the site developer</h2>
        <p>My name is Galen Winsor. I'm a student at Brown University, studying environmental studies and computer science. I'm excited to continue building and improving Willow, and to help people cope with loss during this hard time. Beyond Willow and web design, I'm passionate about climate activism, music, and leveraging digital technology to fight misinformation online.</p>
      </div>

      <div class="about-blurb">
        <h2>contact us</h2>
        <p>Please reach out with any questions or concerns.</p>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
          <div class="form-item">
            <label>Name</label>
            <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
          </div>
          <div class="form-item">
            <label>Email</label>
            <input type="text" name="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
          </div>
          <div class="form-item">
            <label>Message</label>
            <textarea name="message"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
          </div>
          <button type="submit" name="submit">Submit</button>
        </form>
      </div>

      <script>
        // opening and closing side menu
        function openSlideMenu(){
          document.getElementById('side-menu').style.width = '250px';
        }

        function closeSlideMenu(){
          document.getElementById('side-menu').style.width = '0';
          document.getElementById('general-dropdown').style.height = "0";
          document.getElementById('drop-btn-1').innerHTML = "\u002B";
          // document.getElementById('religion-dropdown').style.height = "0";
        }

        // showing map descriptions
        function showDesc(id){
          document.getElementById(id).style.height = "100px";
        }

        function hideDesc(id){
          document.getElementById(id).style.height = "0px";
        }

        function dropdown(id){
          document.getElementById(id).style.height = "80px";
        }

        function dropup(id){
          document.getElementById(id).style.height = "0";
        }
      </script>
    </div>

    <footer class="footer">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="general.html">General</a></li>
        <li><a href="map.html">Resources Near You</a></li>
        <li><a href="religion.html">Spiritual & Religious</a></li>
        <li><a href="gathering.html">Gathering</a></li>
        <li><a href="planning.html">Planning Ahead</a></li>
        <li><a href="kids.html">Kids & Young Adults</a></li>
        <li><a href="voices.html">Voices</a></li>
        <li><a href="about.html">About</a></li>
      </ul>
    </footer>
  </body>
</html>
