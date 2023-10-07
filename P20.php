// Define a custom exception class
class CustomException extends Exception {
    public function errorMessage() {
        // Custom error message
        return "Custom Exception: " . $this->getMessage();
    }
}

// Function to simulate an exception
function divide($numerator, $denominator) {
    if ($denominator == 0) {
        throw new CustomException("Division by zero is not allowed.");
    }
    return $numerator / $denominator;
}

try {
    $result = divide(10, 2); // Valid division
    echo "Result: " . $result . "<br>";
    
    $result = divide(10, 0); // Attempting to divide by zero
    echo "Result: " . $result . "<br>"; // This line will not be executed
} catch (CustomException $e) {
    // Catch the custom exception
    echo $e->errorMessage() . "<br>";
} catch (Exception $e) {
    // Catch other exceptions
    echo "An error occurred: " . $e->getMessage() . "<br>";
}

echo "Execution continues after the try-catch block.";
?>