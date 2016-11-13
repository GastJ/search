<?php 
function read_file(){

	$handle = fopen('./data.txt', 'r+');
	$y=0;
	$size=20;
	while($line = fgets($handle)){
		for($i=0; $i<strlen($line); $i++)
		{
			$x=$i*$size;

			if ('*' === $line[$i]) 
			{
				echo '<rect x="'.$x.'" y="'.$y.'" width="'.$size.'" height="'.$size.'"style="fill:rgb(20,20,10)"/>';
			}
			elseif ('#' === $line[$i]) 
			{
				echo '<rect x="'.$x.'" y="'.$y.'" width="'.$size.'" height="'.$size.'" style="fill:rgb(230,230,230)"/>';
			}
			elseif ('%' === $line[$i]) 
			{
				echo '<rect x="'.$x.'" y="'.$y.'" width="'.$size.'" height="'.$size.'" style="fill:rgb(100,100,100)"/>';
			}
		}
		$y += $size;
	} 
}