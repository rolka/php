<html>
<head>
	<title>Arrays 2</title>
</head>
<body>

	<h1>Simple arrays</h1>

	<?php $lastArray = ['1', '2', '3']; ?>

	<?php foreach ($lastArray as $lasts) : ?>

	<ul>
		<li>
			<?= $lasts; ?>
		</li>
	</ul>
<?php endforeach ?>

<h1>Assoc arrays</h1>
<?php
	$assocArray = ['name' => 'Rolka',
					'pavarde' => 'Zabas',
					'metai' => '1980'];
?>

<?php foreach ($assocArray as $name => $value) : ?>

	<ul>
		<li>
			<?= ucwords($name); ?> is: <?= $value; ?>
		</li>
	</ul>
<?php endforeach ?>

	<p>Use<code>"array_push"</code>to add last element</p>
	<?php $small = ['balvonas', 'tu', 'esi'] ?>

	<!-- to add last -->
	<?php array_push($small, 'tikrai?') ?>

	<!-- to remove last -->
	<?php array_pop($small); ?>

	<!-- add first element -->
	<?php array_unshift($small, 'oplia'); ?>

	<!-- to remove first -->
	<?php array_shift($small) ?>

	<!-- slicing array -->
	<?php $sliced = array_slice($small, 0, 2);
	print_r($sliced);

	?>



	<?php foreach ($small as $smally) : ?>
	<ul>
		<li>
			<?= $smally; ?>
		</li>
	</ul>
	<?php endforeach ?>





</body>
</html>