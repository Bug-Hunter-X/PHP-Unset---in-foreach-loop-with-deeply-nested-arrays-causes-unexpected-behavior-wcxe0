function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

//This function works as intended. Now let's make it more complex.

function foo2(array &$arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
}

$arr2 = ['foo', 'bar', 'baz'];
foo2($arr2);
print_r($arr2); // Output: Array ( [0] => foo [2] => baz )

//This function also works as intended. However, if you use this function on an array that is nested too deep, you'll get this error:

/* PHP Fatal error:  Uncaught Error: Cannot unset string offsets in ... */

//The error occurs because the foreach loop keeps iterating over the array even after the element is unset.
//This is an uncommon error because it is hard to reproduce with a shallowly nested array. It is caused by the internal workings of the foreach loop. The unset() function actually modifies the array while the loop is iterating over it.
//The solution is to use a for loop which will not be affected by the modification of the array during iteration.
