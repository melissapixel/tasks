<?=strtoupper('php') . '<br>'?>
<?=strtolower('php') . '<br>'?>
<?=ucfirst('london') . '<br>'?>
<?=lcfirst('London') . '<br>'?>
<?=ucwords('london is the capital of great britain') . '<br>'?>
<?php
    $str = 'LONDON';
    $str_to_lower = strtolower($str);
    echo ucfirst($str_to_lower) . '<br>'
?>

<?= strlen('html css php') . '<br>'?>

<?php
    $password = 123445;
    if (strlen($password) > 5 AND strlen($password) < 10){
        echo 'Yes';
    } else{
        echo 'No';
    }
?>

<?= substr('html css php', 0, 4) . '<br>'?>
<?= substr('html css php', 5, 3) . '<br>'?>
<?= substr('html css php', -3, 3) . '<br>'?>

<?= substr('LoveIsForever', -3, 3) ?>

<?php
    $str = 'http://asdnkjkehgfwegbf';
    
    $str_pr = substr('https://asdnkjkehgfwegbf', 0, 7);

    if($str_pr ==  'http://' or $str_pr ==  'https:/' ){
        echo 'Yes';
    }
?>

<?php
    $str_pr = substr('sdfkcklsdj.png', -4, 4);
    
    if($str_pr ==  '.png' or $str_pr ==  '.jpg' ){
        echo 'Yes';
    }
?>

<?php
    $str = 'Lenbghh';
    $str_pr = substr($str, 0, 5);
    if (strlen($str) > 5){
        echo $str_pr . '...';
    } else{
        echo $str;
    }
?>

<?= str_replace('.', '-', '31.12.2013') . '<br>'?>

<?php
	echo str_replace(['a', 'b', 'c'], 
		[1, 2, 3], 'abcabc'); 
?>

<?= str_replace([1, 2, 3, 4, 5, 6, 7, 8, 9, 0], [], '1a2b3c4b5d6e7f8g9h0') ?>

<?php $str = 'aabbccc'; ?>

<?= strtr($str, ['a' => '1', 'b' => '2', 'c' => '3']) ?>
<?= strtr($str, 'abc', '123') ?>

<?php
    $str = 'aabbccerfgterc';
    $sub_str = substr($str, 2, 5);
    echo str_replace($sub_str, '!!!', $str . '<br>');
?>

<?= strpos('abc abc abc', 'b')  . '<br>'?>
<?= strrpos('abc abc abc', 'b') . '<br>'?>
<?= strpos('abc abc abc', 'b', 3)  . '<br>'?>
<?= strpos('aaa aaa aaa aaa aaa', ' ', 4) ?>

<?php
    $str = 'aabbc.cer..fgt.erc';
    if(strpos($str, '..')){
        echo 'Yes' . '<br>';
    }

    if(strpos($str, 'http://') === 0){
        echo 'Yes' . '<br>';
    }
?>

<?php
    $date = 'html css php';
	$arr = explode(' ', $date);
	var_dump($arr) . '<br>';
?>
<?php
    $arr = ['html', 'css', 'php'];
	echo implode(',', $arr);
?>
<?php
    $date = date("Y-m-j");
	$arr = explode('-', $date);
	echo $arr[2].'.'.$arr[1].'.'.$arr[0] . '<br>'; 
?>

<?php
    $str = '1234567890';
    $arr = str_split($str, 2);
    var_dump($arr) . '<br>';
 ?>
 <?php
    $str = '1234567890';
    $arr = str_split($str, 1);
    var_dump($arr) . '<br>';
 ?>
<?php
    $str = '1234567890';
    $arr = str_split($str, 2);
    $arr = implode('-', $arr);
    var_dump($arr) . '<br>';
 ?>
 <?= ltrim('kdsfj    ') . '<br>'?>
 <?= trim('/php/', '/') . '<br>'?>


 <?= strrev('12345') . '<br>'?>
 <?php
    $str = 'nun';
    if($str == strrev($str)){
        echo 'Yes' . '<br>';
    }
 ?>

 <?=  str_shuffle('abcde') . '<br>'?>

 <?php
    $arr = [];
    $range = range('a', 'z');
    foreach ($arr as $elem){
        for($i = 0; $i <= 8; $i++){
            $arr[] = str_shuffle(range('a', 'z'));
        }
        
    }
    var_dump($arr);
?>

<!-- <?=  str_shuffle(range('a', 'z')) ?> -->



