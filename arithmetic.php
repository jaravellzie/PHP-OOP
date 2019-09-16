<?php

$operand=$_POST['rdOperations'];
$num1=$_POST['txtnum1'];
$num2=$_POST['txtnum2'];


if($operand=='Add'){
	$sum=$num1+$num2;
	echo $sum;
}
else if($operand=='Subtract'){
	$subtract=$num1-$num2;
	echo $subtract;
}
else if($operand=='Multiply'){
	$multiply=$num1*$num2;
	echo $multiply;
}
else if($operand=='Divide'){
	$divide=$num1/$num2;
	echo $divide;
}


class Operations{

	public $ans;
	public function getSum($num1,$num2){
		$ans = $num1 + $num2;
		return $ans;
	}
	public function getDifference($num1,$num2){
		$ans = $num1 - $num2;
		return $ans;
	}
	public function getProduct($num1,$num2){
		$ans = $num1 * $num2;
		return $ans;
	}
	public function getQuotient($num1,$num2){
		$ans = $num1 / $num2;
		return $ans;
	}


}

$object1 = new Operations;

$operand = $_POST['rdOperations'];

if($operand=='Add'){
	echo $object1->getSum($_POST['txtnum1'],$_POST['txtnum2']);
}
if($operand=='Subtract'){
	echo $object1->getDifference($_POST['txtnum1'],$_POST['txtnum2']);
}
if($operand=='Multiply'){
	echo $object1->getProduct($_POST['txtnum1'],$_POST['txtnum2']);
}
if($operand=='Divide'){
	echo $object1->getQuotient($_POST['txtnum1'],$_POST['txtnum2']);
}


