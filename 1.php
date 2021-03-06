<!DOCTYPE html>
<html lang='ru'>
<head>
    <title>Простые числа</title>
    <meta charset='utf-8'>
</head>
<body>
<h2>Тестовое задание</h2>
<p>

    <?php

    function findSimple($a,$b){
        $c=[];
        for($a=$a;$a<=$b;$a++){
            $counter = 0;
            for($j=1;$j<=$a;$j++){
                if($a % $j==0){
                    $counter++;
                }
            }     //
            if($counter==2){
                $c[]=$a;
            }
        }
        return $c;
    }
    var_dump(findSimple(12,60)); // вывод массива возвращенного в результате выполнения функции

    ?><br><br><?

    $a = [3, 4, 2, 7, 4, 3];

    function createTrapeze($a)
    {
        $b = ['a', 'b', 'c'];    // получаем массив $b[a,b,c]

        $as[]=array_chunk($a, 3, true); // разбиваем массив по массивам с тремя элементами
        $i=0;
        foreach ($as[0] as $d) {
            $c[] = array_combine($b,$as[0][$i]); // комбинируем массивы для получения искомого
            // состояния [‘a’=>1,’b’=>2,’с’=>3],[‘a’=>4,’b’=>5 ,’c’=>6]
            $i++;
        }
        return $c; // возвращаем сформированный массив
    }
    $a = createTrapeze($a);
    var_dump($a);

    ?><br><br><?

    function squareTrapeze($e) {

        $i=0;

        foreach ($e as $v1) {
            $as=$e[$i]["a"];
            $bs=$e[$i]["b"];
            $cs=$e[$i]["c"];
            $p = ($as + $bs) / 2 * $cs; // вычисляем по формуле площадь трапеции;
            $keys = array($v1);
            $d[] = array_fill_keys($keys, $p); // присваиваем массиву из элементов кратному трем, ключ,
            // содержащий результат расчета площади трапеции со сторонами a и b, и высотой c
            $i++;
        }
        return $d; //
    }
    $d = squareTrapeze($a);
    var_dump($d);

    ?><br><br><?

    $b[]=max($a);  //получаем значение максимальной площади из полученного массива
    function getSizeForLimit($a, $b) {

        for ($i = 0; $i <= 1; $i++) {
            $q=(float)$a[$i]["Array"];

            if ($q<=$b) {
                $qw[]=$a[$i];
            }
        }
        return $qw;
    }
    var_dump(getSizeForLimit($d,$b)); // массив размеров трапеции с максимальной площадью, но меньше или равной $b.

    ?><br><br><?

    $w=$a;
    function printTrapeze($a) {

        echo "<table> <tr><td>А</td><td>В</td><td>С</td><td>Площадь</td></tr>";
        $i=0;
        foreach ($a as $v1) {

            $as=$a[$i]['a'];
            $bs=$a[$i]["b"];
            $cs=$a[$i]["c"];

            $p=(float)squareTrapeze($a)[$i]['Array'];

            if($p % 2 === 0) {
                $tleft=''; $tright='';}              //четное
            else {
                $tleft='<mark>'; $tright='</mark>';} // нечетное

            echo "<tr><td>$as</td><td>$bs</td><td>$cs</td><td>$tleft $p $tright</td>";
            $i++;
        }
    }
    printTrapeze($w);

    ?><br><br><?

    abstract class BaseMath
    {
        // Данные методы должны быть определены в дочернем классе

        abstract protected function exp1($a,$b,$c);

        abstract protected function exp2($a,$b,$c);
        // Общий метод
        public function getValue()
        {
            $f = 0;
            return $this->$f;
        }
    }

    class ConcreteClass1 extends BaseMath
    {
        public function getValue()
        {
            $f = 0;
            return $this->$f;
        }

        public function exp1($a, $b, $c): int
        {
            $f=$a*($b**$c);

            return $f;
        }

        public function exp2($a,$b,$c): float
        {
            return ($a/$b)**$c;
        }
    }

    $class1 = new ConcreteClass1;
    $class1->getValue(); // включает метод который возвращает результат расчета класса наследника
    echo $class1->exp1(1,2,3) . "\n";
    ?><br><?
    echo $class1->exp2(1,2,3) . "\n";

    ?><br><br><?

    class F1 extends BaseMath
    {
        protected $a;
        protected $b;
        protected $c;

        // Конструктор объекта:
        public function __construct($a, $b, $c)
        {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        }

        public function getValue()
        {
            $f = 0;
            return $this->$f;
        }

        protected function exp1($a, $b, $c): int
        {
            $qw=$a*($b**$c);
            return $qw;
        }

        protected function exp2($a,$b,$c): float
        {
            $qe=($a/$b)**$c;
            return $qe;
        }

        public function CalcImplement($a,$b,$c): int
        {
            $f=( ($this->exp1($a,$b,$c)) + ((($this->exp2($a,$b,$c)) % 3) ** min($a, $b, $c)));
            return $f;
        }
    }

    $class2 = new F1(4,5,6);
    $class2->getValue();
    echo $class2->CalcImplement(4,5,6) . "\n";

    ?>

</p>
</body></html>