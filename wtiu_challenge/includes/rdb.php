<?php

if (isset($_POST['submit'])) {

//money, crumbs, pens, dust, nostalgia

$money    = clean(escape($_POST['money']));
$crumbs   = clean(escape($_POST['crumbs']));
$pen      = clean(escape($_POST['pens']));
$dust     = clean(escape($_POST['dust']));
$nost     = clean(escape($_POST['nostalgia']));
$now      = date("Y-m-d H:i:s");

$file = '\includes\log.txt';

if(file_exists(log.txt)) {
  fwrite();

} else {

}


// $query  = "INSERT INTO survey(money, crumbs, pens, dust, nostalgia) VALUES('$money', '$crumbs', '$pen', '$dust', '$nost') ";
// $result = mysqli_query($connection, $query);
// confirm($result);

}


 ?>

<p>This is app uses PHP and MySQL for it's behind the scenes magic. When the submit
button is clicked a script inputs the data to a database while simultaneously
logging changes to a text file.</p>

<form class="census_form" action="index.php?source=rdb" method="post">
  <h4>2017 Census of Miscellany Under Your Couch Cushions</h4>
  <p>What percent of the whole do the following items take under
  your couch cushions</p>

<div class="form-component">
  <label id="">money:</label>
  <input type="number" name="money" value="">
</div>

<div class="form-component">
  <label id="">crumbs:</label>
  <input type="number" name="crumbs" value="">
</div>

<div class="form-component">
  <label id="">pens:</label>
  <input type="number" name="pens" value="">
</div>

<div class="form-component">
  <label id="">dust:</label>
  <input type="number" name="dust" value="">
</div>

<div class="form-component">
  <label id="">nostalgia:</label>
  <input type="number" name="nostalgia" value="">
</div>

<div class="form-component">
  <input id="submit" type="submit" name="submit" value="submit">
</div>
</form>


<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      ['Work',     11],
      ['Eat',      2],
      ['Commute',  2],
      ['Watch TV', 2],
      ['Sleep',    7]
    ]);

    var options = {
      title: 'My Daily Activities'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
  }
</script>
