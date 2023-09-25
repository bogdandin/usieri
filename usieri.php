<html>
<header>
<style>
body {text-align:center;}
.box {display:inline-block; text-align:center; width:8.80cm; height:5.80cm; border:1px solid #d8c9c9; margin:5px; overflow:hidden;}
.table {display:table; vertical-align: top; width:8.80cm; height:5.80cm;} 
.table div {display:table-cell; vertical-align: top; position:relative;}
h1 {text-transform: capitalize; word-wrap: break-word; font-size: 80px; margin: 0px; line-height: 76px; text-align: center;}
.pluton {position: absolute !important;
    right: 0;
    bottom: 13px;
    font-size: 29px;
    font-weight: bold;
    width: 100%;}
.a.nn {font-size:53px}
.b.np {font-size:53px}


</style>
<header>
<body>
<?php

$filename = 'numeusieri.txt';

$fp = @fopen($filename, 'r'); 

// Add each line to an array
if ($fp) {
   $array = explode("\n", fread($fp, filesize($filename)));
}
$i = 0;

foreach ($array as $line) {
	
		$line = ucfirst($line);
		$nume = explode(" ",$line);
		$n = '';
		$np = '';
	
		echo '<div id="p'. $i .'" class="box"><div class="table"><div>';
		
			
		
		echo '<h1 class="a ">UȘIER</h1>' .  PHP_EOL;
		echo '<h1 class="b np">'. $nume[0] .' '. $nume[1] .'</h1>' .  PHP_EOL;
		
		echo '<div class="pluton">Biserica Casa Olarului </div>' .  PHP_EOL;
		
		echo '</div></div></div>' .  PHP_EOL;
		
		$i++;
   
}
?>
</body>
</html>