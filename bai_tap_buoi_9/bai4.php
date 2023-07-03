<?php
class Clock {
    private $hour;
    private $minute;
    private $second;

    public function __construct($hour, $minute, $second) {
        $this->hour = $hour;
        $this->minute = $minute;
        $this->second = $second;
    }

    public function displayTime() {
        $formattedHour = str_pad($this->hour, 2, '0', STR_PAD_LEFT);
        $formattedMinute = str_pad($this->minute, 2, '0', STR_PAD_LEFT);
        $formattedSecond = str_pad($this->second, 2, '0', STR_PAD_LEFT);
        return "$formattedHour:$formattedMinute:$formattedSecond";
    }

    public function increaseSecond() {
        $this->second++;
        if ($this->second >= 60) {
            $this->second = 0;
            $this->minute++;
            if ($this->minute >= 60) {
                $this->minute = 0;
                $this->hour++;
                if ($this->hour >= 24) {
                    $this->hour = 0;
                }
            }
        }
    }
}
?>