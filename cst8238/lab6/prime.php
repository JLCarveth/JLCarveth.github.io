<?php
/**
 * prime.php
 * 
 *  A form and backend logic for displaying prime numbers within a range
 * 
 * Segmented Sieve algorithm
 */
# On load, run main method

function main() {
    if (isset($_POST['min']) && isset($_POST['max'])) {
        $min = $_POST['min'];
        $max = $_POST['max'];
        $prime = primeWithinInterval($min,$max);
        foreach ($prime as $p) {
            echo($p . " is a prime number.");
            echo("<br>");
        }
    }
}

function primeWithinInterval ($a, $b) {
    $prime = [];
    for ($i = $a; $i <= $b; $i++) {
        if (isPrime($i)) array_push($prime, $i);
    }

    return $prime;
}


/**
 * Returns true if n is a prime number
 * @param integer
 * @return boolean
 */
function isPrime($n) {
    if ($n == 1) return false; 
    for ($i = 2; $i <= $n/2; $i++){ 
        if ($n % $i == 0) 
            return false; 
    } 
    return true; 
}
?>

<form action="prime.php" method="POST">
    <div class="form-group">
        <label for="min">Minimum: </label>
        <input type="text" class="form-control" name="min" id="min">
        <label for="max">Maximum: </label>
        <input type="text" class="form-control" name="max" id="max">
        <input type="submit" name="submit" value="Submit">
    </div>
</form>

<?php
main();
?>