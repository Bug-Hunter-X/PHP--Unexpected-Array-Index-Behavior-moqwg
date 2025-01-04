```php
function incrementArrayValueSafe(array &$arr, int $index): void {
  if ($index < 0) {
    throw new InvalidArgumentException('Index cannot be negative.');
  }
  if ($index > PHP_INT_MAX) {
    throw new InvalidArgumentException('Index too large for this system');
  }
    
  $arr[$index] = isset($arr[$index]) ? $arr[$index] + 1 : 1;
}

$myArray = [];
incrementArrayValueSafe($myArray, 2);
echo $myArray[2]; // Output: 1

//try{ // uncomment to test exception
//  incrementArrayValueSafe($myArray, 1000000000000);
echo $myArray[1000000000000]; // Output: 1
//} catch (InvalidArgumentException $e){
//  echo "Exception: " . $e->getMessage();
//}

//try{ // uncomment to test exception
//  incrementArrayValueSafe($myArray, -1);
echo $myArray[-1]; // Output: 1
//} catch (InvalidArgumentException $e){
//  echo "Exception: " . $e->getMessage();
//}
```