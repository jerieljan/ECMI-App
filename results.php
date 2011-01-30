<html>

<head>
	<title>Your Results</title>

	<link rel="stylesheet" type="text/css" href="general.css" />
</head>

<body>
	<h1>Your Results</h1>

	
	
	<?php 
	$R=0;
	$N=0;
	$M=0;
	$P=0;
	$O=0;
	$S=0;
	$F=0;
	$I=0;


	if($_REQUEST["q1"]==0)
	{
	$_REQUEST["q1"]=$R++;
	}
	elseif($_REQUEST["q1"]==1)
	{
	$_REQUEST["q1"]=$N++;
	}

	if($_REQUEST["q2"]==0)
	{
	$_REQUEST["q2"]=$M++;
	}
	elseif($_REQUEST["q2"]==1)
	{
	$_REQUEST["q2"]=$P++;
	}

	if($_REQUEST["q3"]==0)
	{
	$_REQUEST["q3"]=$F++;
	}
	elseif($_REQUEST["q3"]==1)
	{
	$_REQUEST["q3"]=$I++;
	}

	if($_REQUEST["q4"]==0)
	{
	$_REQUEST["q4"]=$O++;
	}
	elseif($_REQUEST["q4"]==1)
	{
	$_REQUEST["q4"]=$S++;
	}

	if($_REQUEST["q5"]==0)
	{
	$_REQUEST["q5"]=$R++;
	}
	elseif($_REQUEST["q5"]==1)
	{
	$_REQUEST["q5"]=$N++;
	}

	if($_REQUEST["q6"]==0)
	{
	$_REQUEST["q6"]=$M++;
	$_REQUEST["q6"]=$O++;
	}
	elseif($_REQUEST["q6"]==1)
	{
	$_REQUEST["q6"]=$P++;
	$_REQUEST["q6"]=$S++;
	}

	if($_REQUEST["q7"]==0)
	{
	$_REQUEST["q7"]=$O++;
	}
	elseif($_REQUEST["q7"]==1)
	{
	$_REQUEST["q7"]=$S++;
	}

	if($_REQUEST["q8"]==0)
	{
	$_REQUEST["q8"]=$F++;
	}
	elseif($_REQUEST["q8"]==1)
	{
	$_REQUEST["q8"]=$I++;
	}

	if($_REQUEST["q9"]==0)
	{
	$_REQUEST["q9"]=$F++;
	$_REQUEST["q9"]=$M++;
	}
	elseif($_REQUEST["q9"]==1)
	{
	$_REQUEST["q9"]=$I++;
	$_REQUEST["q9"]=$P++;
	$_REQUEST["q9"]=$S++;
	}

	if($_REQUEST["q10"]==0)
	{
	$_REQUEST["q10"]=$F++;
	$_REQUEST["q10"]=$O++;
	}
	elseif($_REQUEST["q10"]==1)
	{
	$_REQUEST["q10"]=$I++;
	$_REQUEST["q10"]=$P++;
	$_REQUEST["q10"]=$S++;
	}

	if($_REQUEST["q11"]==0)
	{
	$_REQUEST["q11"]=$O++;
	}
	elseif($_REQUEST["q11"]==1)
	{
	$_REQUEST["q11"]=$M++;
	}

	if($_REQUEST["q12"]==0)
	{
	$_REQUEST["q12"]=$M++;
	$_REQUEST["q12"]=$F++;
	}
	elseif($_REQUEST["q12"]==1)
	{
	$_REQUEST["q12"]=$P++;
	$_REQUEST["q12"]=$O++;
	$_REQUEST["q12"]=$I++;
	}

	if($_REQUEST["q13"]==0)
	{
	$_REQUEST["q13"]=$M++;
	$_REQUEST["q13"]=$F++;
	}
	elseif($_REQUEST["q13"]==1)
	{
	$_REQUEST["q13"]=$P++;
	$_REQUEST["q13"]=$I++;
	}

	if($_REQUEST["q14"]==0)
	{
	$_REQUEST["q14"]=$M++;
	}
	elseif($_REQUEST["q14"]==1)
	{
	$_REQUEST["q14"]=$P++;
	$_REQUEST["q14"]=$S++;
	}

	if($_REQUEST["q15"]==0)
	{
	$_REQUEST["q15"]=$M++;
	$_REQUEST["q15"]=$O++;
	}
	elseif($_REQUEST["q15"]==1)
	{
	$_REQUEST["q15"]=$P++;
	$_REQUEST["q15"]=$S++;
	}

	if($_REQUEST["q16"]==0)
	{
	$_REQUEST["q16"]=$O++;
	}
	elseif($_REQUEST["q16"]==1)
	{
	$_REQUEST["q16"]=$P++;
	}

	if($_REQUEST["q17"]==0)
	{
	$_REQUEST["q17"]=$M++;
	$_REQUEST["q17"]=$O++;
	}
	elseif($_REQUEST["q17"]==1)
	{
	$_REQUEST["q17"]=$S++;
	}

	if($_REQUEST["q18"]==0)
	{
	$_REQUEST["q18"]=$F++;
	$_REQUEST["q18"]=$R++;
	}
	elseif($_REQUEST["q18"]==1)
	{
	$_REQUEST["q18"]=$N++;
	$_REQUEST["q18"]=$I++;
	}

	if($_REQUEST["q19"]==0)
	{
	$_REQUEST["q19"]=$M++;
	$_REQUEST["q19"]=$I++;
	}
	elseif($_REQUEST["q19"]==1)
	{
	$_REQUEST["q19"]=$P++;
	$_REQUEST["q19"]=$F++;
	$_REQUEST["q19"]=$S++;
	}

	if($_REQUEST["q20"]==0)
	{
	$_REQUEST["q20"]=$P++;
	$_REQUEST["q20"]=$F++;
	$_REQUEST["q20"]=$S++;
	}
	elseif($_REQUEST["q20"]==1)
	{
	$_REQUEST["q20"]=$I++;
	$_REQUEST["q20"]=$O++;
	}

	if($_REQUEST["q21"]==0)
	{
	$_REQUEST["q21"]=$M++;
	$_REQUEST["q21"]=$O++;
	}
	elseif($_REQUEST["q21"]==1)
	{
	$_REQUEST["q21"]=$I++;
	$_REQUEST["q21"]=$P++;
	$_REQUEST["q21"]=$S++;
	}

	if($_REQUEST["q22"]==0)
	{
	$_REQUEST["q22"]=$S++;
	$_REQUEST["q22"]=$F++;
	}
	elseif($_REQUEST["q22"]==1)
	{
	$_REQUEST["q22"]=$M++;
	$_REQUEST["q22"]=$O++;
	}

	if($_REQUEST["q23"]==0)
	{
	$_REQUEST["q23"]=$S++;
	$_REQUEST["q23"]=$P++;
	}
	elseif($_REQUEST["q23"]==1)
	{
	$_REQUEST["q23"]=$M++;
	$_REQUEST["q23"]=$O++;
	}

	if($_REQUEST["q24"]==0)
	{
	$_REQUEST["q24"]=$F++;
	}
	elseif($_REQUEST["q24"]==1)
	{
	$_REQUEST["q24"]=$I++;
	}

	if($_REQUEST["q25"]==0)
	{
	$_REQUEST["q25"]=$P++;
	}
	elseif($_REQUEST["q25"]==1)
	{
	$_REQUEST["q25"]=$M++;
	}

	if($_REQUEST["q26"]==0)
	{
	$_REQUEST["q26"]=$O++;
	}
	elseif($_REQUEST["q26"]==1)
	{
	$_REQUEST["q26"]=$S++;
	}

	if($_REQUEST["q27"]==0)
	{
	$_REQUEST["q27"]=$M++;
	}
	elseif($_REQUEST["q27"]==1)
	{
	$_REQUEST["q27"]=$P++;
	}

	if($_REQUEST["q28"]==0)
	{
	$_REQUEST["q28"]=$O++;
	}
	elseif($_REQUEST["q28"]==1)
	{
	$_REQUEST["q28"]=$S++;
	}

	if($_REQUEST["q29"]==0)
	{
	$_REQUEST["q29"]=$O++;
	$_REQUEST["q29"]=$M++;
	}
	elseif($_REQUEST["q29"]==1)
	{
	$_REQUEST["q29"]=$S++;
	$_REQUEST["q29"]=$P++;
	}

	if($_REQUEST["q30"]==0)
	{
	$_REQUEST["q30"]=$F++;
	}
	elseif($_REQUEST["q30"]==1)
	{
	$_REQUEST["q30"]=$I++;
	}

	if($_REQUEST["q31"]==0)
	{
	$_REQUEST["q31"]=$N++;
	}
	elseif($_REQUEST["q31"]==1)
	{
	$_REQUEST["q31"]=$R++;
	}


	//PROCESSING
	echo "<ul>";

	if($N > $R)
	{	echo "<li>Your Style of Choosing is Intuitive rather than Rational</li>";	}
	else
	{	echo "<li>Your Style of Choosing is Rational rather than Intuitive</li>";	}

	if($O > $S)
	{	echo "<li>Your Orientation is centered to other people rather than to yourself</li>";	}
	else
	{	echo "<li>Your Orientation is centered to yourself rather than to other people</li>";	}
	
	if($M > $P)
	{	echo "<li>Your Philosophy is aimed towards Morality</li>";	}
	else
	{	echo "<li>Your Philosophy is Pragmatic</li>";	}

	if($F > $I)
	{	echo "<li>Your attitude to rules is as a Follower instead of an Innovator</li>";	}
	else
	{	echo "<li>Your attitude to rules is as an Innovator rather than a Follower</li>";	}
	
	echo "</ul>";
	
	$Name = $_REQUEST["name"]; //It is preferred to use the Facebook Graph API -> User -> Name for this.
	$Date = date(DATE_RFC822);

	// Submit results to database
	// Edit the entries enclosed with < and > accordingly.
	$con = mysql_connect("localhost","<sql user>","<sql password>");
	
	if (!$con) { die('Your results were not recorded. Server connection error.'); }
	if (!mysql_select_db("<sql database>", $con)) 	{	die('Your results were not recorded. Database error.');	}
		
	$query = "INSERT INTO user (uid, date_entered,intuitive,rational,orient_others,orient_self,morality,pragmatic,follower,innovator) VALUES ('$Name','$Date', '$N', '$R', '$O', '$S', '$M', '$P', '$F', '$I')";
	if (!mysql_query($query)) 
	{	die ('<br />Your results were not recorded. Couldnt submit data.');	} 
	
	
	
	mysql_close($con);

	?>
	

</body>

</html>
