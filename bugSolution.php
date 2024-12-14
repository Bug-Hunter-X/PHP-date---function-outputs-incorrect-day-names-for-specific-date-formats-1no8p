```php
$dateString = '2024-03-10';
$date = DateTime::createFromFormat('Y-m-d', $dateString);
echo $date->format('l'); // Correct Output
```