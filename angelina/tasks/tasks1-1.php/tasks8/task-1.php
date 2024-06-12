<?php
    
    function func($arr){
        var_dump(array_shift($arr));
        // var_dump($arr);
    
    if (count($arr) !== 0){
        func($arr);
    }
    }

    func(['a' => 7, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5]);
?>

<?php
    function sum_func($arr){
        $sum = array_shift($arr);

        if (count($arr) !== 0){
            $sum += sum_func($arr);
        }
        return $sum;
    }
    echo sum_func(['a' => 1, 'b' => 2, 'c' 
    => 3, 'd' => 4, 'e' => 5]);
?>

<?php
    function echo_arr($arr){
        foreach ($arr as $elem){
            if (is_array($elem)){
                echo_arr($elem);
            }
            else{
                echo $elem . '<br>';
            }
        }
    }

    echo_arr([1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]]);
?>

<?php
    function sum_vlog_arr($arr){
        $sum = 0;

        foreach ($arr as $elem){
            if (is_array($elem)){
                $sum += sum_vlog_arr($elem);
            }
            else{
                $sum += $elem;
            }
        }
        return $sum;
    }
    var_dump(sum_vlog_arr([1, 2, 3, [4, 5, [6, 7]], 
    [8, [9, 10]]]));
?>
<br>
<?php
    function str_arr($arr){
        $sum = null;

        foreach ($arr as $elem){
            if (is_array($elem)){
                $sum .= str_arr($elem);
            }
            else{
                $sum .= $elem;
            }
        }
        return $sum;
    }
    var_dump(str_arr(['a', ['b', 'c', 'd'], 
    ['e', 'f', ['g', ['j', 'k']]]]));
?>
<br>
<?php
	function net($arr) {
		$length = count($arr);
		
		for ($i = 0; $i < $length; 
			$i++) { 
			if (is_array($arr[$i])) {
				$arr[$i] = net($arr[$i]);
			} else {
				$arr[$i] = $arr[$i] . '!';
			}
		}
		
		return $arr;
	}
	
	var_dump(net([1, [2, 7, 8], [3, 
		4, [5, 6]]])); 
?>
<br>
<br>
<?php
	function sqr($arr) {
		$length = count($arr);
		
		for ($i = 0; $i < $length; 
			$i++) { 
			if (is_array($arr[$i])) {
				$arr[$i] = sqr($arr[$i]);
			} else {
				$arr[$i] = $arr[$i] **2;
			}
		}
		
		return $arr;
	}
	
	var_dump(sqr([1, [2, 7, 8], [3, 
		4, [5, 6]]])); 
?>
