```php
function incrementArrayValue(array &$arr, int $index): void {
  if (!isset($arr[$index])) {
    $arr[$index] = 0; // Initialize if the index doesn't exist
  }
  $arr[$index]++;
}

$myArray = [];
incrementArrayValue($myArray, 2); // Trying to increment a non-existing element
echo $myArray[2]; // Output: 1

incrementArrayValue($myArray, 1000000000); // Using a huge index that may cause problems
echo $myArray[1000000000]; // Output: 1

incrementArrayValue($myArray, -1); // Negative index, PHP will treat as array key.
echo $myArray[-1]; // Output: 1
```