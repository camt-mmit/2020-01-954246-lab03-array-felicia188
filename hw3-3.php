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
if($data==1)
{echo"The average score for $arr[1] = $average\n";}
else
{
$data2=$data-1;
echo"The average score for ";
for($n=1;$n<=$data-2;$n++)
    {
    printf("%.2f,", $arr[$n]) ;
    }
echo"$arr[$data2] and $arr[$data] = ";
printf("%.2f",$average);  
}
