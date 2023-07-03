<?php 
// Bài tập Tạo lớp Điểm 2D:
// Tạo một lớp Diem2D với các thuộc tính x và y.
// Tạo phương thức để tính khoảng cách từ điểm hiện tại tới một điểm khác.

class Distance2D {
    protected $x;
    protected $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
    public function calculateDistance($point) {
        $deltaX=$point->x - $point->x;
        $deltaY=$point->y - $point->y;
        $distanceCount = sqrt($deltaX * $deltaX + $deltaY * $deltaY);
        return $distanceCount;
    }

}
?>