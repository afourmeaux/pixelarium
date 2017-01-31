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
    <title><?php echo $pixelarium->name ?></title>
    <link rel="stylesheet" href="css/pixelarium.css">
</head>
<body>
    <header>
    	<a href="<?php echo $pixelarium->link ?>" alt="Aller à l'accueil">
    		<img src="img/logo" alt="<?php echo $pixelarium->name ?>">
    	</a>
    	<nav>
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