<?php
if($_POST["message"]) {
    mail("falva26@gmail.com", "Lynsight Form Submitted", $_POST["message"], "From: falva26@gmail.com");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lynsight - M.D. Review</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header id="header">
    <div><img src="logoLandscape.png" alt="Logo" id="header-img" class="navPadding"></div>
    <nav id="nav-bar" class="nav navPadding">
      <a href="#about" class="nav-link">Is This Real</a>
      <a href="#services" class="nav-link">How It Works</a>
      <a href="#top" class="nav-link">Make Money</a>
    </nav>
  </header>

<!-- New Section Begins Here -->
<section id="top">

<div id="cover">
<h1>Give us the scoop. Make $100.</h1>
<p>Tell us about Christopher J. Centeno, M.D. and how well his Stem Cell services worked for you.</p>

<form id="form"  action="email.php">
  <input name="email" id="email" type="email" class="marginTop" placeholder="Enter your email address" required/>
    <input id="submit" type="submit" value="Submit"></input>
</form>
</div>
</section>

<!-- New Section Begins Here -->
<section id="about">

<main>
  <div class="content">
    <div>
      <h2>Sounds good, but does it work?</h2>
      <p>
        We've read all about the treatment and have watched the youtube videos. We have even done hours of research. But the one thing we can't find are real patient reviews and testimonials.
      </p>
      <p>
         We want to hear from you. Prove to us that you were one of his patients, that you received stem cell treatment, and let us ask you a few questions. We will pay you for participating in this collection of data. Complete the form above and make your money today.
      </p>
    </div>
    <div style="width:3.1em;"></div>
    <div id="vidDiv">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/mlqRIhG7N38?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
  </div>
</section>

  <!-- New Section Begins Here -->
  <section id="services">

  <div class="mainGrey">
    <div class="content">
      <div class="box">
        <h2>Enter Your Email</h2>
        <div class="boxDiv">
          <img class="boxImg"src="email.png" alt="">
        </div>
        <p>
          Fill the form above. Enter your email and hit <b>Submit</b>. We will contact you shortly after.
        </p>
      </div>
      <div class="box">
        <h2>Provide Proof</h2>
        <div class="boxDiv">
          <img class="boxImg" src="bill.png" alt="">
        </div>
        <p>
          Send a picture of all documentation regarding the treatment you received. It <b>will</b> be kept confidential.
        </p>
      </div>
      <div class="box">
        <h2>Q&A For Money</h2>
        <div class="boxDiv">
          <img class="boxImg" src="dolla.png" alt="">
        </div>
        <p>
          Participate in a quick interview. We will pay you for your story. It really is that simple.
        </p>
      </div>
  </div>
  </section>
</main>

</body>
</html>
