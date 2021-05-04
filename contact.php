<!DOCTYPE html>

<html>
<head>
  <meta charset="UTF-8">
  <title>Contact Us-Meatylicious</title>
  <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
 <body>
  <div id="header">
    <div>
      <div id="logo">
        <a href="index.html"><img src="images/logo.png" alt="logo"></a>
      </div>
      <ul id="navigation">
        <li>
          <a href="index.html">Home</a>
        </li>
        <li>
          <a href="shop.html">Shop</a>
        </li>
        <li>
          <a href="about.html">About Us</a>
        </li>
        <li>
          <a href="blog.html">Blog</a>
        </li>
        <li class="selected">
          <a href="contact.html">Contact Us</a>
        </li>
        </ul>
    </div>
  </div>
<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Drop by on our shop, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="images/bacoor.jpg" style="width:80%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="province">Province</label>
        <select id="province" name="province">
          <option value="cavite">Cavite</option>
          <option value="laguna">Laguna</option>
          <option value="batangas">Batangas</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
<div id="footer">
    <div id="connect">
      <a href="https://www.facebook.com/" target="_blank" class="facebook"></a><a href="https://mail.google.com/mail/u/0/" target="_blank" class="email"></a><a href="https://twitter.com/" target="_blank" class="twitter"></a><a href="https://www.google.com/" target="_blank" class="googleplus"></a>
    </div>
    <p>
      © 2021 Meatylicious. All Rights Reserved.
    </p>
  </div>
</body>
</html>