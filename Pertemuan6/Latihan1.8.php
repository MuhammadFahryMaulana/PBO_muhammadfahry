<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = $i; $j <= 5; $j++) {
        echo "&nbsp;"; // It will print blank space
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo '<br />';
}
?>
