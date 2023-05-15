<?php
// Grading <50 = F, 50-59 = C, 60-69 = B, >70=A
$score = 40;
if ($score < 50) {
    echo "F";
}elseif ($score < 60) {
    echo "C";
}elseif ($score < 70) {
    echo "B";
}else{
    echo "A";
}
?>