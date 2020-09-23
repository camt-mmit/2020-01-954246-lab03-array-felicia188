<?php
printf("Input number of data: "); 
fscanf(STDIN,"%d",$data);
for($n=1;$n<=$data;$n++)
{
    printf("Input score $n: "); 
    fscanf(STDIN,"%f",$n1);
    $arr[$n]=$n1;
}
$average=array_sum($arr)/count($arr);
echo"The average score for ";
for($n=1;$n<=$data-1;$n++)
{
    echo "$arr[$n], ";
}
echo"$arr[$data] = ";
printf("%.2f",$average);  
