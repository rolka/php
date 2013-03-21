<html>
<head>
	<title>Conditionals</title>
</head>
<body>
	<h1>Conditionals</h1>
	<h2>Simple ifs</h2>
	<?php

	$month = 'Sep';
	
	if($month == 'Sep4')
	{
		echo "heya";
	}
	else
	{
		echo "Not so lucky";
	}
	?>
	<hr>
	<h2>Checks is string is empty</h2>
	<?php
		$day = 'Sat';
		if($day == true)
		{
			echo "String is not empty";
		}
		else
		{
			echo "String is empty!";
		}
	?>

	<hr>
	<h2>Strict equality</h2>
	<?php
	// $time = "11am";
	$time = true;
	if ($time === true)
	{
		echo "Yes";
	}
	else
	{
		echo "No!";
	}
	?>
	<hr>
	<h2>Equality</h2>
	<?php
	$hours = 14;
	if($hours != 14)
	{
		echo "is not equal hours";
	}
	else
	{
		echo "is equal hours";
	}
	?>
	<hr>
	<h2>Switch</h2>
	<?php
	$min = 90;

	switch($min)
	{
		case '60':
		echo "Equals to 60";
			break;

		case 50:
		echo "Equals to 50";
			break;
	
	default:
	echo "Is equal to something else";
	}

	?>
	<hr>
	<h2>Look-up</h2>
	<blockquote>WIth associative arrays</blockquote>
	<?php
	$lookFor = 'Tavo';

	$names = [	'Mano' => 'Rolka',
				'Tavo' => 'Polka',
				'Jusu' => 'Bolka'];
	echo isset($names[$lookFor]) ? $names[$lookFor] : "string";
	//echo $names['Mano'];
	?>

	<hr>
	<h2>and (&&)</h2>
	<!-- <blockquote>WIth associative arrays</blockquote> -->
	<?php
	$menuo = 'May';
	if ($menuo != 'June' && $menuo != 'Sep')
	{
		echo "Its is not June nor Sep";
	}
	elseif($menuo == 'May')
	{
		echo "It is May";
	}
	else
	{
		echo "It is none of them";
	}

	?>

</body>
</html>