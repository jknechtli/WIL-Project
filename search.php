<html lang="en-AU">

<head>
  <title>Search</title>
  <?php include './shared/head.html'; ?>
</head>

<body>
  <div class="container">
    <?php include './shared/header.html'; ?>
    <div class="contents">
      <div class="heading">
        <h1>Search Results</h1>
      </div>
      <div class="description">
        <form class="search-bar" action="/search.php">
          <input type="text" placeholder="Search..." name="search">
        </form>
        <?php include "./shared/create-search.php" ?>
      </div>
      <div class="enquiries">
        For all enquiries please email
        <a href="mailto:exceptionalstudyaustralia@gmail.com">exceptionalstudyaustralia@gmail.com</a>, text <a href="tel:0447840393">0447 840 393</a> or message us on
        social media
      </div>
    </div>
    <div class="footer">
      <?php include './shared/footer.html'; ?>
    </div>
  </div>
</body>
<?php include './shared/script.html'; ?>

</html>