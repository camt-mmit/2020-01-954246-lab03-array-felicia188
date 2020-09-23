<?php
printf("Input the number of grades: "); 
fscanf(STDIN,"%d",$data);
$max=100;
for($n=1;$n<=$data;$n++)
{
    printf("Input grade data from max score to min score:"); 
    fscanf(STDIN,"%s %d",$grade,$minscore);  
    $m[]=$minscore; 
    $g[]=$grade;
   while($minscore!=$max) //2 a 80 b 50:max=100,arr=(80-99),max=80;n=2,
    {
     $arr[]=$minscore;
     $minscore+=1; 
    }
   $max=min($arr);
}
$e="e";$d=0;
while($number!=$e)
{
  $d+=1;//$n=$n+1
  printf("Input score $d('e' for end of data): "); 
  fscanf(STDIN,"%s",$number);
  $arr1[$d]=$number; 
if(is_numeric($number)){
    if($number>=$m[0]&&$number<=100)
      {  echo"Grade is $g[0]\n";}
    elseif($number>=$m[1]&&$number<$m[0])
      {  echo"Grade is $g[1]\n";}
    elseif($number>=$m[2]&&$number<$m[1])
      {  echo"Grade is $g[2]\n";}
    elseif($number>=$m[3]&&$number<$m[2])
      {  echo"Grade is $g[3]\n";}
    elseif($number>=$m[4]&&$number<$m[3])
      {  echo"Grade is $g[4]\n";}
}
else{echo" ";}    
}
// This must be
//if($number=$e)

if($number=$e)
{echo"No data!!!\n";}
if($d==2)
{
array_pop($arr1);
$length=count($arr1);
$average=array_sum($arr1)/(count($arr1));
$count=0;
foreach($arr1 as $i){$count+=pow(($i-$average),2);}
$variance=$count/$length;
echo"The summary for $arr1[1] \n";
printf("Average = %.2f\n",$average); 
printf("Variance = %.2f\n",$variance); }
elseif($d==3)
{array_pop($arr1);
  $length=count($arr1);
  $average=array_sum($arr1)/(count($arr1));
  $count=0;
  foreach($arr1 as $i){$count+=pow(($i-$average),2);}
  $variance=$count/$length;
  echo"The summary for $arr1[1] and $arr1[2] ";
  printf("Average = %.2f\n",$average); 
  printf("Variance = %.2f\n",$variance); }
elseif($d>3)
{array_pop($arr1);
  $length=count($arr1);
  $average=array_sum($arr1)/(count($arr1));
  $count=0;
  foreach($arr1 as $i){$count+=pow(($i-$average),2);}
  $variance=$count/$length;

$d2=$d-2;
$d1=$d-1;
echo"The summary for ";
for($y=1;$y<=$d-3;$y++)
    {
    printf("%.2f,", $arr1[$y]) ;
    }
echo"$arr1[$d2] and $arr1[$d1] \n";
printf("Average = %.2f\n",$average); 
printf("Variance = %.2f\n",$variance); 
}

