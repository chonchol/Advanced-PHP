<?php
	
	function getDigit($value)
	{
		if($value==15)
			return 'F';
		if($value==14)
			return 'E';
		if($value==13)
			return 'D';
		if($value==12)
			return 'C';
		if($value==11)
			return 'B';
		if($value==10)
			return 'A';
		else return $value;
	}
	
	function getDecimalDigit($value)
	{
		if($value=='A')
			return 10;
		if($value=='B')
			return 11;
		if($value=='C')
			return 12;
		if($value=='D')
			return 13;
		if($value=='E')
			return 14;
		if($value=='F')
			return 15;
		else return $value;
	}
	
	
	function convertBase($num,$base)
	{
		$arr=array();
		$i=0;
		for($i=0;$num>0;$i++)
		{
			$arr[$i]=$num%$base;
			$arr[$i]=getDigit($arr[$i]);
			$num=$num/$base;
			$num=(int)$num;
		}
		$i--;
		while($i>=0)
		{
			echo $arr[$i];
			$i--;
		}
		
	}
	
	function convertToDecimal($num,$inputBase)
	{
		$res=0;
		$p=0;
		for($i=strlen($num)-1;$i>=0;$i--)
		{
			$res+=getDecimalDigit($num[$i])*pow($inputBase,$p);
			$p++;
		}
		return $res;
	}
	
	$inputBase=15;
	$num="10";
	$decimalValue=convertToDecimal($num,$inputBase);
	$outputBase=10;
	
	convertBase($decimalValue,$outputBase);
	
	
?>
