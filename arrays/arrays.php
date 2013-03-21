<?php
/* ************* simple arrays ************* */

$months = ['jan', 'feb', 'march'];

//echo $months[1];
//var_dump($months);
//print_r($months);

/* ************* associative arrays ************* */

$sites = 	['netTuts' => 'http://net.tutsplus.com',
			 'psdTuts' => 'http://psd.tutsplus.com',
			 'wpTuts' => 'http://wp.tutsplus.com',
			 'wireTuts' => 'http://wire.tutsplus.com'];

// var_dump($sites);

/* ************* modifying arrays ************* */

$days = ['mon', 'tue', 'wed', 'sat'];
// add last element
array_push($days, 'thu');

// add last elemnt to array and store it in variable
$addedElement = array_push($days, 'sunday');
echo $addedElement;

// another way to add last elemnt
$days[] = 'fri';

// remove last elemnt from array
array_pop($days);

// remove last elemnt from array and store it in variable
$removedElement = array_pop($days);
echo $removedElement;

// remove first element from array
array_shift($days);

// add first element from array
array_unshift($days, 'luckyday');

// slicing arrays from
$slicedArray = array_slice($days, 2);
echo "</br>";
print_r($days);
echo "</br>";
print_r($slicedArray);

// slicing arrays from and to
$slicedArray2 = array_slice($days, 1, 2);
echo "<p>From to:</p> ";
print_r($days);
echo "</br>";
print_r($slicedArray2);

// filtering array and showing only item with char number 8
$threeCharacterLong = 
	array_filter($days, function($item) { return strlen($item) == 8;});
echo "<p>8 chars long only</p>";
print_r($threeCharacterLong);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Arrays</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    <body>
    	<h1>Arrays</h1>
    	<h2>Simple arrays</h2>
    		<ul>
    			<?php
    			foreach ($months as $month) {
    				echo "<li>$month</li>";
    			}
    			?>
    		</ul>
    	<h2>Associative arrays</h2>
    	<blockquote>PHP 5.3 and previous way</blockquote>
    	<ul>
    		<?php 
    			foreach ($sites as $name => $urls) {
    				echo "<li><a href='$urls'>" . ucwords($name) . "</a></li> ";
    			}
    		 ?>
    	</ul>

    	<blockquote>PHP 5.4 way</blockquote>
    	<ul>
    		<?php foreach ($sites as $name => $urls) : ?>
    			
    			<li>
    				<a href="<?= $urls; ?>"><?= ucwords($name); ?></a>
    		 	</li>
    		 <?php endforeach ?>
    	</ul>

    	<h2>Modifying arrays</h2>
    	<blockquote>PHP 5.3 way</blockquote>
    	<ul>
    		<?php
    			foreach ($days as $day)
    			{
    				echo "<li>$day</li>";
    			}
    		?>
    	</ul>
    	<blockquote>PHP 5.4 way</blockquote>
    	<ul>
    <?php foreach ($days as $day) : ?>
    	<li><?= $day; ?></li>
    	<?php endforeach ?>
    </ul>

    	<blockquote>remember</blockquote>

    	<ul>
    		<?php foreach ($days as $day) : ?>
    		<li><?= $day; ?></li>
    		<?php endforeach ?>
    	</ul>


       
    </body>
</html>

