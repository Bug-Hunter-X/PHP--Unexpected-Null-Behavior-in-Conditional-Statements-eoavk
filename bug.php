```php
function myFunction($arg) {
  if ($arg === null) {
    return null; // Correct handling of null
  }
  // ... other code ...
}

// Incorrect usage leading to unexpected behavior:
$result = myFunction(null);
if ($result) { // This condition will always be false, even if you expect null to be true
  // This code will never be executed
} else {
  // This code block will always be executed
}
```