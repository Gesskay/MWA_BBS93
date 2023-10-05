<?php
// Declare variables
$city = "New York";
$temperature = 72.5;

// Display variables in the console
echo "City: " . $city . "\n";
echo "Temperature: " . $temperature . "°F\n";
?>


<!-- global_scope.php -->
<?php
$globalVar = "I'm a global variable";

function accessGlobal() {
    global $globalVar;
    echo $globalVar;
}

accessGlobal();
?>


<!-- local_scope.php -->
<?php
function localScope() {
    $localVar = "I'm a local variable";
    echo $localVar;
}

localScope();
// Attempting to access $localVar outside the function will result in an error.
?>


<!-- static_scope.php -->
<?php
function incrementCounter() {
    static $counter = 0;
    $counter++;
    echo "Counter: $counter\n";
}

incrementCounter(); // Counter: 1
incrementCounter(); // Counter: 2
incrementCounter(); // Counter: 3
?>

<?php
// String
$carBrand = "Tesla Model S";

// Boolean
$isElectric = true;

// Integer
$yearManufactured = 2023;

// Float
$priceUSD = 79999.99;

// Array
$features = array("Autopilot", "Electric", "Ludicrous Mode");

// Object
class Car {
    public $brand;
    public $year;
    
    public function __construct($brand, $year) {
        $this->brand = $brand;
        $this->year = $year;
    }
}

$myCar = new Car("Audi Q5", 2022);

// Display variables in the console
echo "Car Brand: " . $carBrand . "\n";
echo "Is Electric: " . ($isElectric ? "Yes" : "No") . "\n";
echo "Year Manufactured: " . $yearManufactured . "\n";
echo "Price (USD): $" . number_format($priceUSD, 2) . "\n";
echo "Features: " . implode(", ", $features) . "\n";
echo "My Car: " . $myCar->brand . ", Year: " . $myCar->year . "\n";
?>


