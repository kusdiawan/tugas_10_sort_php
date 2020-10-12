<?php
$arr = array(1,3,8,2,5,7,4,0);
print("Data awal : <br>");
print_r($arr);


$arr= bubble_sort($arr);
print("<br> Setelah Disorting (Buble Sort) : <br>");
print_r($arr);

function bubble_sort($arr){
$kondisi=true;
while ($kondisi){
    $kondisi=false;
    for ($i=0; $i<count($arr)-1;$i++){
    	if ($arr[$i] > $arr[$i+1]){
			$temp = $arr[$i];
			$arr[$i] = $arr[$i+1];
			$arr[$i+1]=$temp;
			$kondisi=true;
		}
    }
}
	return $arr;
}
	

?>