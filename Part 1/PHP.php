<?php

class Loop
{
    public function sumEvenNumbers()
    {
        $i = 0;
        $sum = 0;
        while ($i <= 10) {
            if ($i % 2 == 0) {
                $sum += $i;
            }
            $i++;
        }
        return $sum;
    }

    public function displayOddNumbers()
    {
        $i = 0;
        $print = "";
        do {
            if ($i % 2 != 0) {
                $print .= $i . ", ";
            }
            $i++;
        } while ($i <= 10);
        return $print;
    }

    public function fibonacci()
    {
        $first = 0;
        $second = 1;
        $print = $first . ', ' . $second . ', ';

        for ($i = 0; $i <= 8; $i++) {
            $next = $first + $second;
            $print .= $next . ', ';
            $first = $second;
            $second = $next;
        }
        return $print;
    }
}

class Arrays
{
    public function mostOccurance()
    {
        $array = array('Marvin', 'Marco', 'Marvin', 'Marco', 'Marco', 'Marvin', 'Christian');
        $x = array_count_values($array);
        arsort($array);
        // $print = "";
        // foreach ($array as $value) {
        //     $print .= $value.', ';
        // }
        return implode(', ', $array);
    }

    public function sortArray()
    {
        $array = array(9836, 7127, 2020, 80, 131, 55, 100);
        arsort($array);
        foreach ($array as $key => $value) {
            if ($value % 2 != 0) {
                $array[$key] = round($value, -1);
            } 
        }
        return implode(', ', $array);
    }
    
    public function uniqueValue(){
        $array = array('red', 'blue', 'black', 'red', 'blue', 'blue', 'red', 'gold');
        $array = array_count_values($array);
        $unique = array();
        foreach ($array as $key => $value ) {
            if($value == 1){
                $unique[$key] = $key;
            }
        }
        return implode(', ', $unique);
    }
}

$loop = new Loop();
echo "LOOP <br>";
echo "1.A) " . $loop->sumEvenNumbers() . "<br>";
echo "1.B) " . $loop->displayOddNumbers() . "<br>";
echo "1.C) " . $loop->fibonacci() . "<br>";
echo "<br>";


$arrays = new Arrays();
echo "Array <br>";
echo "2.A) " . $arrays->mostOccurance() . "<br>";
echo "2.B) " . $arrays->sortArray() . "<br>";
echo "2.C) " . $arrays->uniqueValue() . "<br>";

