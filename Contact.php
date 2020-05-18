
<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php include 'Include/Head.php';?>

<body id="Cpbody">
  <?php include 'Include/Navbar2.php';?>
  <?php include 'Include/Postform.php';?>


<div id="Cptopbox">
    <div id="CpTopTekst">
      <h1>Contact</h1>
      <p><strong>Please contact me if you want to let me know something</strong></p>
    </div>
    <hr / class="CpTopline">
<div class="CpBottom">
  <div class="CpLeftboxmain">


  <div class="Emty"></div>

  <div class="CpLeftbox">
    <p>Peter van Dongen</p>
    <p>A webdesigner and developer</p>
    <p>You can contact me about annything</p>
    <?php echo $email; ?>
  </div>
<div class="Emty">
</div>
</div>
  <div class="CpRightboxmain">
    <div class="Emty"></div>
    <div class="CpRightbox">
    <div>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="Labelbox">
          <input type="text" id="fname" name="firstname" placeholder="Your name...">
        </div>
        <div class="Labelbox">
          <input type="email" id="Email" name="email" placeholder="Your E-mail...">
        </div>
        <div class="Labelbox">
          <textarea id="subject" name="subject" placeholder="Write something..."></textarea>
        </div>
        <div class="Labelbox">
          <input type="submit" value="Send">
        </div>
      </form>
    </div>
    </div>
    <div class="Emty"></div>
  </div>
</div>
</div>

  <?php include 'Include/Footer.php';?>

</body>
