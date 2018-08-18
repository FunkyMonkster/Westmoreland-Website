<!DOCTYPE html>

<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link rel="icon" href="images/logo.png" type="image/gif"/>
    <title>Contact Me!</title>
    <link rel="stylesheet" href="https://use.typekit.net/upa8vfn.css">
    <link href="css/grid-flex-style.css" type="text/css" rel="stylesheet"/>
    <link href="css/main-style.css" type="text/css" rel="stylesheet"/>
  </head>
  <body class="contact-me-page">

    <div class="row">
      <div class="cl-1"></div>
      <div class="navigation cl-1">
        <a href="index.html#about">About</a>
        <a href="gallery.html">Gallery</a>
        <a href="index.html#skills">Skills</a>
        <a href="contact.php">Contact</a>
      </div>
      <div class="cl-1"></div>
    </div>

    <div class="row">
      <div class="cl-1"></div>
      <div class="title cl-3">
        <h1>I&#39;m freelancing in the Kernersville, NC area! If you have any projects you&#39;d like for me to help with, please don&#39;t hesitate to get in touch! </h1>
        <p>Please include the deadline of the project and a brief description of what it is. I will get back to you as soon as possible. If you have some advice on how to be an adult, I&#39;d appreciate that too.</p>
      </div>

      <?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $from = 'From: Westmoreland Design';
        $to = 'sendform@westmorelandt.com';
        $subject = 'New Client';

        $body = "From: $name\n E-Mail: $email\n Message:\n $message";

        if ($_POST['submit']) {
          if (mail ($to, $subject, $body, $from)) {
            echo "<p>Your message has been sent!</p>";
          } else {
            echo "<p>Something went wrong, please go back and try again!</p>";
          }
        }
      ?>

      <form class="cl-3 cl" method="post" action="contact.php">
        <input name="name" type="text" placeholder="Your Name"/> <br>
        <input name="email" type="email" placeholder="youremail@gmail.com"/> <br>
        <textarea name="message" placeholder="Your message"></textarea>
        <input name="submit" type="submit" value="Fuel My Coffee Addiction" class="button"/>
      </form>
      <div class="cl-1"></div>
    </div>

    <div class="footer">
      <a href="https://www.instagram.com/funkymonkster/?hl=en" target="_blank"><img src="images/instagram-logo.png"/></a>
      <a href="https://github.com/FunkyMonkster" target="_blank"><img src="images/github-logo.png"/></a>
      <a href="https://codepen.io/FunkyMonkster/" target="_blank"><img src="images/codepin-logo.png"/></a>
    </div>

  </body>
</html>
