<?php
class HotelBooking {
    private $name;
    private $checkInDate;
    private $numNights;

    public function __construct($name, $checkInDate, $numNights) {
        $this->name = $name;
        $this->checkInDate = $checkInDate;
        $this->numNights = $numNights;
    }

    public function calculateTotalPayment($roomPrice) {
        $totalPayment = $this->numNights * $roomPrice;
        return $totalPayment;
    }
}
?>