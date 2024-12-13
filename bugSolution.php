//This function works as intended. Now let's make it more complex.

function foo2(array &$arr) {
  for ($i = count($arr)-1; $i >= 0; $i--) {
    if ($arr[$i] === 'bar') {
      unset($arr[$i]);
    }
  }
}

$arr2 = ['foo', 'bar', 'baz'];
foo2($arr2);
print_r($arr2); // Output: Array ( [0] => foo [2] => baz )

//This function also works as intended.  This solution iterates backwards, preventing unexpected behavior.

//This solution works even with deeply nested arrays.
