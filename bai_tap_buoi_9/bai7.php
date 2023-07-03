<?php
class Fraction {
    private $numerator;
    private $denominator;

    public function __construct($numerator, $denominator) {
        $this->numerator = $numerator;
        $this->denominator = $denominator;
    }

    public function add($fraction) {
        $resultNumerator = ($this->numerator * $fraction->denominator) + ($fraction->numerator * $this->denominator);
        $resultDenominator = $this->denominator * $fraction->denominator;
        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function subtract($fraction) {
        $resultNumerator = ($this->numerator * $fraction->denominator) - ($fraction->numerator * $this->denominator);
        $resultDenominator = $this->denominator * $fraction->denominator;
        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function multiply($fraction) {
        $resultNumerator = $this->numerator * $fraction->numerator;
        $resultDenominator = $this->denominator * $fraction->denominator;
        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function divide($fraction) {
        $resultNumerator = $this->numerator * $fraction->denominator;
        $resultDenominator = $this->denominator * $fraction->numerator;
        return new Fraction($resultNumerator, $resultDenominator);
    }
}
?>
