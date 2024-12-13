# PHP Unset() in foreach loop with deeply nested arrays causes unexpected behavior
This repository demonstrates an uncommon bug in PHP related to using `unset()` within a `foreach` loop when dealing with deeply nested arrays.  The issue arises because the `foreach` loop continues to iterate even after elements are removed, potentially causing unexpected behavior or even a fatal error.

The `bug.php` file shows the problematic code, while `bugSolution.php` offers a corrected version using a `for` loop to avoid the issue.

## Reproducing the Bug
1. Clone this repository.
2. Run `bug.php`.
3. Observe the unexpected behavior or fatal error when using deeply nested arrays.

## Solution
The solution involves replacing the `foreach` loop with a `for` loop, which iterates over indices rather than values. This avoids the problems caused by modifying the array structure while iterating.
