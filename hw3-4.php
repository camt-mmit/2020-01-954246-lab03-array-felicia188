<?php
$e="e";
$n=0;
while($number!=$e)
{
$n+=1;//$n=$n+1
printf("Input score $n('e' for end of data): "); 
fscanf(STDIN,"%s",$number);
$arr[$n]=$number;    
}
// You have to check count($arr) before calculate average 
//ok get it
if(count($arr) > 1) {
    $average=array_sum($arr)/(count($arr)-1);
}
if($n==1)
{echo"No data!!!\n";}
elseif($n==2)
{echo"$arr[1] = ";
printf("%.2f",$average); }
elseif($n==3)
{echo"$arr[1] and $arr[2]= ";
    printf("%.2f",$average); }
elseif($n>3)
{
$n2=$n-2;
$n1=$n-1;
echo"The average score for ";
for($i=1;$i<=$n-3;$i++)
    {
    printf("%.2f,", $arr[$i]) ;
    }
echo"$arr[$n2] and $arr[$n1] = ";
printf("%.2f",$average);  
}


        
   