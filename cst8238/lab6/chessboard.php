<?php
/**
 * chessboard.php
 * 
 *      An incredibly simple module for displaying a chessboard programatically.
 */
?>
<div class="chessboard">
<!-- A chessboard is an 8x8 grid -->
<?php
    $GRID_X = 8;
    $GRID_Y = 8;

    for ($i=0; $i < ($GRID_X * $GRID_Y); ++$i) {
        $color = determineColor($i);
        echo("<div class=\"square " . $color . "\"></div>");
    }
    function determineColor ($n) {
        $row = floor(n / $GRID_X);
        
        if ($row % 2 === 0) {
            if ($n % 2 === 0) return "black";
            else return "white";
        } else {
            if ($n & 2 === 0) return "white";
            else return "black";
        }
    }
?>
</div>