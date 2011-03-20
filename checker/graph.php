

<html>
  <head>
   <title> ECMI Results </title>
   <script language="javascript" src="http://www.google.com/jsapi"></script>
	<style>
	html
	{
		font-family:Sans-Serif;
	}
	#main
	{
		margin:auto;
		padding:10px 25px 5px 25px;
		max-width:640px;
		min-width:600px;
		border:1px solid #666;
		
	}
	input
	{
		width:100%;
	}
	
	</style>
   </head>
   <body>
		  
		  <?php
		  //Variables
		  $server = $_POST["server"];
		  $user = $_POST["user"];
		  $password = $_POST["password"];
		  $database = $_POST["database"];
		  
		  
		  $con = mysql_connect($server, $user, $password);
		  if (!$con) { 
			die('Cannot connect. Check your server and your credentials.'); 
		  }
		  
		  if (!mysql_select_db($database, $con)) { 
		  die('Cannot connect to your ECMI Database. Check the name.'); 
		  }
		  $query = "SELECT COUNT(*) FROM user WHERE intuitive > rational";
		  $intuitive = mysql_result(mysql_db_query($database, $query),0);
		  
		  $query = "SELECT COUNT(*) FROM user WHERE intuitive <= rational";
		  $rational = mysql_result(mysql_db_query($database, $query),0);
		  
		  $query ="SELECT COUNT(*) FROM user WHERE `orient_others` > `orient_self`";
		  $orient_others = mysql_result(mysql_db_query($database, $query),0);
		  
		  $query ="SELECT COUNT(*) FROM user WHERE `orient_others` <= `orient_self`";
		  $orient_self = mysql_result(mysql_db_query($database, $query),0);
		  
		  $query = "SELECT COUNT(*) FROM user WHERE morality > pragmatic";
		  $morality = mysql_result(mysql_db_query($database, $query),0);

		$query = "SELECT COUNT(*) FROM user WHERE morality <= pragmatic";
		  $pragmatic = mysql_result(mysql_db_query($database, $query),0);

		  	$query = "SELECT COUNT(*) FROM user WHERE follower > innovator";
		  $follower = mysql_result(mysql_db_query($database, $query),0);
		  
		  	$query = "SELECT COUNT(*) FROM user WHERE follower <= innovator";
		  $innovator = mysql_result(mysql_db_query($database, $query),0);
		  
$query = "SELECT COUNT(*) FROM user";
$ceiling = mysql_result(mysql_db_query($database, $query),0);
		  mysql_close($con);
		  ?>
	<div id="main">
   <div id="chart"></div>

   <script type="text/javascript">
      var queryString = '';
      var dataUrl = '';

      function onLoadCallback() {
        if (dataUrl.length > 0) {
          var query = new google.visualization.Query(dataUrl);
          query.setQuery(queryString);
          query.send(handleQueryResponse);
        } else {
          var dataTable = new google.visualization.DataTable();
          dataTable.addRows(1);

          dataTable.addColumn('number');
          dataTable.addColumn('number');
		  dataTable.addColumn('number');
		  dataTable.addColumn('number');
		  dataTable.addColumn('number');
		  dataTable.addColumn('number');
		  dataTable.addColumn('number');
		  dataTable.addColumn('number');
		  
          dataTable.setValue(0, 0, <?php echo $intuitive ?>);
          dataTable.setValue(0, 1, <?php echo $rational ?>);
		  dataTable.setValue(0, 2, <?php echo $orient_others ?>);
		  dataTable.setValue(0, 3, <?php echo $orient_self ?>);
		  dataTable.setValue(0, 4, <?php echo $morality ?>);
		  dataTable.setValue(0, 5, <?php echo $pragmatic ?>);
		  dataTable.setValue(0, 6, <?php echo $follower ?>);
		  dataTable.setValue(0, 7, <?php echo $innovator ?>);
		  


          draw(dataTable);
        }
      }

      function draw(dataTable) {
		var ceiling = <?php echo $ceiling ?>;
        var vis = new google.visualization.ImageChart(document.getElementById('chart'));
        var options = {
          chxl: '',
          chxp: '',
          chxr: '0,0,' + ceiling,
          chxs: '0,008000,11.5,0,lt,FF0000',
          chxtc: '0,5',
          chxt: 'y',
          chbh: 'a',
          chs: '520x305',
          cht: 'bvg',
          chco: 'EE8888,CC0000,88EE88,00CC00,8888EE,0000CC,EEEE88,CCCC00',
          chds: '0,' + ceiling + ',0,' + ceiling + ',0,' + ceiling + ',0,' + ceiling + ',0,' + ceiling + ',0,' + ceiling + ',0,' + ceiling + ',0,' + ceiling,
          chd: 't:0|0|0|0|0|0|0|0',
          chdl: 'Intuitive|Rational|Others-oriented|Self-oriented|Moral|Pragmatic|Follower|Innovator',
          chtt: 'ECMI Results'
        };
        vis.draw(dataTable, options);
      }

      function handleQueryResponse(response) {
        if (response.isError()) {
          alert('Error in query: ' + response.getMessage() + ' ' + response.getDetailedMessage());
          return;
        }
        draw(response.getDataTable());
      }

      google.load("visualization", "1", {packages:["imagechart"]});
      google.setOnLoadCallback(onLoadCallback);

    </script>

<table>
<tr>
<td colspan=2><h2>Results</h2></td>
</tr>
<?php
echo "<tr><td>Intuitive</td><td>" . $intuitive . "</td></tr>";
echo "<tr><td>Rational</td><td>" . $rational . "</td></tr>";
echo "<tr><td>Oriented towards Others</td><td>" . $orient_others. "</td></tr>";
echo "<tr><td>Oriented Towards Self </td><td>" . $orient_self. "</td></tr>";
echo "<tr><td>Morality</td><td>" . $morality. "</td></tr>";
echo "<tr><td>Pragmatic</td><td>" . $pragmatic . "</td></tr>";
echo "<tr><td>Follower</td><td>" . $follower . "</td></tr>";
echo "<tr><td>Innovator</td><td>" . $innovator . "</td></tr>";
?>

</table>

<p>The number of people who answered your poll is: <?php echo $ceiling; ?>
  </body>
 </div>
</html>
