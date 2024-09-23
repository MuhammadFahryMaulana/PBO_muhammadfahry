<?php
class Perulangan {
    public function loop() {
        $array = array(1, 2, 3, 4, 5, 5, 4, 3, 2, 1);
        foreach ($array as $num) {
            echo str_repeat('*', $num) . "<br/>";
        }
    }
}
$ObjekPerulangan = new Perulangan();
$ObjekPerulangan->loop();
?>
 
 