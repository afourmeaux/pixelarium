<?php 
	$pixelarium = (object) array(
		'name' => 'Pixelarium',
		'link' => 'http://' . $_SERVER['HTTP_HOST'] . '/pixelarium',
	);

	$projects = (object) array(
		'rollTheDice' => (object) array(
			'name' => 'Roll the dice',
			'link' =>  $pixelarium->link . '/projects/rollTheDice/index.php'
		),
		'mangaList' => (object) array(
			'name' => 'Mangas list',
			'link' =>  $pixelarium->link . '/projects/mangaList/index.php'
		)
	);
 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, initial-scale=1">
    <title><?php echo $pixelarium->name ?></title>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/pixelarium.css">

    <script type="text/javascript" src="js/calendar.js"></script>
</head>
<body>
    <header id="main-header">
    	<a href="<?php echo $pixelarium->link ?>" class="float-left" alt="Aller à l'accueil">
    		<!-- <img src="img/logo" alt="<?php echo $pixelarium->name ?>"> -->
            <?php echo $pixelarium->name; ?>
    	</a>
    	<nav class="float-right">
    		<ul>
    			<?php foreach ($projects as $project) { ?>
    				<li>
    					<a href="<?php echo $project->link ?>">
    						<?php echo $project->name ?>
    					</a>
    				</li>
    			<?php } ?>
    		</ul>
    	</nav>
    </header>
</body>
</html>