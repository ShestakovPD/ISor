<!DOCTYPE html>
<html lang='ru'>
<head>
    <title>Простые числа</title>
    <meta charset='utf-8'>
</head>
<body>
<h2>Функция получения массива простых чисел</h2>
<p>

<?php 

function findSimple($a,$b){ 
	$d = $a;
    for($a=$a;$a<=$b;$a++){        //numbers to be checked as findSimple
        $counter = 0; 
            for($j=1;$j<=$a;$j++){     //all divisible factors 
               if($a % $j==0){ 
               $counter++; 
               } 
            }     //prime requires 2 rules ( divisible by 1 and divisible by itself) 
                if($counter==2){ 
                $c[]=$a;
               	print $a." is findSimple <br/>";  
               } 
            }
            echo ("Массив простых чисел между значениями a ='$d' и b ='$b'<br>");
            echo '<pre>';
            print_r ($c); 
            echo '</pre>';
        } 
    findSimple(12,60); 
 


function createTrapeze($a)
{
    $a = [1, 2, 3, 4, 5, 6,7,8,9]; // получаем массив $a[1,2,3,4,5,6]
    $b = ['a', 'b', 'c'];    // получаем массив $b[a,b,c]
    $e = sizeof($b);         // получаем количество элементов массива $b, 3 элемента ( кратное трем )
    foreach ($a as $d => $f) {   // перебираем массив $a по ключу $d => значению $f
        $c[floor($d / $e)][$b[$d % $e]] = $f;
        $v = $d / $e;
        echo ($v.'<br>');
        //
    }         // массив $c вычисляется как [ floor (Округляет дробь в меньшую сторону)
              // ($d / $e) - получаем долю от трех
              // это наш текущий элемент
              // [$b [$d % $e]] - это наше значение под текущим ключом. $d % $e - остаток от деления на $e
              // позволяет нам проверить кратен ли текущий элемент 3.
    return $c; // возвращаем вычисленное значение которому присвоен ключ
}
   
$k = createTrapeze($a);

echo("Двумерный массив положительных чисел, с элементами кратными трем между значениями a ='$d' и b ='$b'<br>");
echo '<pre>';
print_r($k);
echo '</pre>';


function squareTrapeze($k)
{

  echo "squareTrapeze <br>";
  var_dump($k); ?>"<br>"<?

  $i=0;
      foreach ($k as $v1) {
          $a=$k[$i]["a"];
          $b=$k[$i]["b"];
          $c=$k[$i]["c"];
          $p = ($a + $b) / 2 * $c; // вычисляем по формуле площадь трапеции;
          $keys = array($f); // 
          $ash = array_fill_keys($keys, $p); // присваиваем массиву из элементов кратному трем, ключ, содержащий результат расчета площади трапеции со сторонами a и b, и высотой c.
          echo("Ключ S, он же площадь трапеции для ".($i+1)." тройки<br>");
          echo '<pre>';
          print_r($ash);
          echo '</pre>';
          $i++;
    }
 
    return $ash; // возвращаем вычисленное значение которому присвоен ключ
}       
$q = squareTrapeze($k);
/*

*/
?> 

</p>
</body></html>