<?php
$str = "the clown ran after the car and the car ran into the tent and the tent fell down on the clown and the car.  And the quick brown fox stole a banana from the monkey while the ring leader laughed all day";
print_r ($str);
$array = (explode(" ",$str));
print_r (array_count_values($array));
?>