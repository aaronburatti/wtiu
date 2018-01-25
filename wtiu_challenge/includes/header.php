<?php include "includes/db/db.php"; ?>
<?php include "functions.php"; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href=" css/styles.css">
  </head>
  <header>
    <h2><span class="in-brand">Indiana</span> public media</h2>
  </header>
  <body>
    <div class="desc">
      <h3>Pie Chart Challenge</h3>
      <p>This is an interactive Pie Chart. There are several options
      displaying the same functionality. Below are several links. Each will
      bring up a description of what is happening under the hood for that
      particular graph.</p>
      <p>All of these implementations use <a href="https://developers.google.com/chart">Google Charts</a>
      for the Pie Chart basis. Google Charts is a JavaScript API.</p>
    </div>
    <div class="main-nav">
      <ul>
        <li><a href="index.php?source=rdb">PHP</a></li>
        <li><a href="index.php?source=vjs">Vanilla JS</a></li>
        <li><a href="index.php?source=vue">Vue JS</a></li>
      </ul>
      <hr/>
    </div>
