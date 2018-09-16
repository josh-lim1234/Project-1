<!doctype html>
<html lang="en">
<head>
	<title>Project 1</title>
	<meta charset='utf-8'>
    <link rel="stylesheet" type="text/css" href="ass1.css">
</head>
<body>
	<h1>Josh Lim</h1>
	<img src="pics/joshpic.JPG" alt="Josh Lim">
    <br>
    <h1>About Me</h1>
        <p>Josh Lim, the youngest child of five. Lives in Singapore at the moment, but spent most of his growing years in Australia. Enjoys tennis, loves puzzles and is very picky about food. </p>
    <br>
    <h1>Random Quote</h1>
    <div id="quoteting">
	   <?php 
        $phrases = ["Every day I get up and look through the Forbes list of the richest people in America. If I'm not there, I go to work. - Robert              Orben", 
                    "No one can make you feel inferior without your consent. - Eleanor Roosevelt", 
                    'To live is so startling it leaves little time for anything else. - Emily Dickinson', 
                    'When you go in search of honey you must expect to be stung by bees. - Joseph Joubert', 
                    'Art is the most intense mode of individualism that the world has known. - Oscar Wilde'
                ];	
        echo $phrases[array_rand($phrases)];
        ?>
	</div>
</body>
</html>