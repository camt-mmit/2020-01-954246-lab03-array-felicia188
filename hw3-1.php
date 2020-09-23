<?php
/*ID:602110188
name:Chen Shuo 
wechart:felicia*/
printf("Input number of data: "); 
fscanf(STDIN,"%d",$data);
for($n=1;$n<=$data;$n++)
{
    printf("Input score $n: "); 
    fscanf(STDIN,"%f",$n1);
    $arr[]=$n1;
}
$average=array_sum($arr)/count($arr);
printf("The average score =%.2f",$average);  