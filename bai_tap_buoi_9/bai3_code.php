<?php
class IntArray {
    protected $array;

    public function __construct($array)
    {
        $this->array=$array;
    }

    public function sum(){
        return array_sum($this->array);
    }

    public function average(){
        $sum = $this->sum();
        $count=count($this->array);
        return $sum/$count;
    }

    public function maxElement(){
        return max($this->array);
    }
}

$array=[2, 4, 8, 5, 9];
$intArray= new IntArray($array);

echo "Sum: ".$intArray->sum()."<br>";
echo "Average: ".$intArray->average()."<br>";
echo "Max Element: ".$intArray->maxElement()."<br>";