<?php
function task1($array, $y)
{
    for($i=1; $i<=count($array);  $i++) {
        echo "<p>$array[$i]</p>";
    }
    $str = "";
    foreach ($array as $array_element){
        $str .= $array_element." ";
    }
    if($y==true){
        return $str;
    }
}

function task2 ($action){
    $data = func_get_args();
    $calc=0;
    switch($data[0]){
        case '+':
            for($i=1; $i<=count($data);  $i++) {
               $calc +=$data[$i];
            }
            return $calc;
            break;
        case '-':
            if (count($data)>=2){
                for($i=2; $i<=count($data); $i++) {
                    $calc += $data[$i]*(-1);
                }
                $calc= $data[1]+$calc;
            }
            else {
                $calc=$data[1];
            }
            return $calc;
            break;
        case '/':
            if (count($data)>=2) {
                $calc=$data[1];
                for ($i = 1; $i < count($data); $i++) {
                    $calc /= $calc / $data[$i];
                }
            }
            else {
                $calc=$data[1];
            }
            return $calc;
            break;
        case '*':
            $calc=1;
            for($i=1; $i<count($data); $i++) {
                 $calc *= $data[$i];
            }
            return $calc;
            break;
        default:
            echo "Введите знак операции!";
            break;
    }
}

function task3 ($arg1, $arg2) {
    if (is_int($arg1)==true&&is_int($arg2)==true)
    {
        echo "<table border='1' cellpadding='5' cellspacing='5'>";
        for($j=1; $j<=$arg1; $j++){
            echo "<tr>";
            for($i=1; $i<=$arg2; $i++){
                $result = $j*$i;
                echo"<td>$result</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    else
    {
        echo "Ошибка! Аргументами функции могут быть только целые числа!";
    }
}

function task4 ($date2) {
    echo date('d.m.Y H:i')."<br/>".strtotime($date2);
}

function task5($string, $string2){
    echo "Начальная строка: ".$string."<br/>";
    echo "Измененная строка: ".str_replace('К', '', $string)."<br/>";
   // echo $string."<br/>";
    echo "Начальная строка2: ".$string2."<br/>";
    echo "Измененная строка2: ".str_replace('Две', 'Три', $string2);
}

function task6($file){
    echo file_get_contents($file);
}