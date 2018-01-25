<?php

//I included the function here instead of in the functions page to make the data immediately accessible

if (isset($_POST['submit'])) {
//this data is ready to be inserted into the db
$money    = clean(escape($_POST['money']));
$crumbs   = clean(escape($_POST['crumbs']));
$pen      = clean(escape($_POST['pens']));
$dust     = clean(escape($_POST['dust']));
$nost     = clean(escape($_POST['nostalgia']));
$now      = date("Y-m-d H:i:s");

//this is preparing a statement to show what was last entered
$log = "At " . $now . " <br/> money was updated to: " . $money . ",<br/> crumbs was updated to: " . $crumbs . ",<br/> pens was updated to " . $pen . ",<br/> dust was updated to: " . $dust . ",<br/> nostalgia was updated to " . $nost ." ";

//DB query placing the cleaned data
$query  = "INSERT INTO survey(money, crumbs, pens, dust, nostalgia, date) VALUES('$money', '$crumbs', '$pen', '$dust', '$nost', '$now') ";
$result = mysqli_query($connection, $query);
confirm($result);
}
//from here it would be easy to make a SELECT ALL statement and display every entry with its associated time
//It also follows that with another chart, probably a bar chart, the AVG() could be found of these columns
 ?>


<form action="index.php?source=rdb" method="post">
  <div class=".census_form">
  <p>This is app uses PHP and MySQL for it's behind the scenes magic. When the submit
  button is clicked a script inputs the data to a database while simultaneously
  logging the current changes to the screen.</p>
  <hr>
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
  </div>
</form>

<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Items', 'percertage'],
          ['Money',     <?php echo $money ?>],
          ['Crumbs', <?php echo $crumbs ?>],
          ['Pens', <?php echo $pen ?>],
          ['Dust', <?php echo $dust ?>],
          ['Nostalgia', <?php echo $nost ?>]
    ]);

    var options = {
      title: 'My Daily Activities'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
  }
</script>

<div id="piechart" style="min-width: 400px; height: 300px; margin: 0;"></div>

<div class="log">
  <h3>Here is the most recent input: </h3>
  <?php echo $log ?>
</div>
