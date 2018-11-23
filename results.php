<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Results</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    
</head>
<body>

	
<?php
	$answers = array('0', '1', '3', '2', '0', '0', '2', '0', '1', '2', '0', '2', '2', '0', '1', '2', '3', '0', '1', '1');

	if (isset($_POST)) {
		$results = array();
		foreach ($answers as $count => $answer) {
	
				if ($_POST[$count] == $answer) {
					array_push($results, $answer);
				}
			}
	 	}
		$total = count($results);
			switch ($total) {

				case ($total > 5 && $total >= 5):
					?>
						<section class="bad">
                            <!-- <img src="img/win.png" alt="">	 -->
							<div class="score"><?php echo $total; ?><span>/20</span></div>
                            <div><a href="https://www.youtube.com/watch?v=ZVMh5cuQE9c">Welcome to the Brotherhood Assassin!</a></div>
						</section>
					<?php
					break;
		}
?>

	<section class="submit">
		<form action="index.php" method="post">
            <h2>Retake Test</h2>
            <input type="submit" value="Retake">
		</form>
	</section>
    
</body>
</html>