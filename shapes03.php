<?php
$num=1;
$line=5;
	for($i=1;$i<=$line;$i++){
		
		for($j=1;$j<=$line-$i;$j++){
			echo "&nbsp";
		}
		
		for($j=1;$j<=$num;$j++){
			echo "*";
		}
		echo "<br>";
		
		$num=$num+1;
	}
?>
