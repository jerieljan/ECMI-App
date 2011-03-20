<html>

	<head>
	<style>
	html
	{
		font-family:Sans-Serif;
	}
	#main
	{
		margin:auto;
		padding:10px 25px 5px 25px;
		max-width:480px;
		min-width:300px;
		border:1px solid #666;
		
	}
	input
	{
		width:100%;
	}
	
	</style>
	
	</head>



	<body>
	<div id="main">
	<h1>ECMI-Grapher</h1> 
	by jerieljan
	<p>A simple tool to graph the results of your poll application.
	
	<form method="POST" action="graph.php">
	<table width="100%">
	<tr>
	<td>Server:	</td>
	<td><input type="textbox"name="server">	</td>
	</tr>
	
		<tr>
	<td>SQL Username:	</td>
	<td><input type="textbox"name="user">	</td>
	</tr>
	
		<tr>
	<td>SQL User Pass:	</td>
	<td><input type="password"name="password">	</td>
	</tr>
	
		<tr>
	<td>SQL Database:	</td>
	<td><input type="textbox"name="database">	</td>
	</tr>
	
	</table>
	<p><input type="submit" value="Graph!"</input>
	</form>
	
	</div>
	</body>
</html>


