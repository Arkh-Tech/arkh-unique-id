# ArkhUniqueId
Script for generate unique id in PHP

### Download
Clone the repository:

    git clone https://github.com/Arkh-Tech/arkh-unique-id.git

### Usage
Add file ArkhUniqueId in your project
...
```php
<?php
require __DIR__.'/vendor/autoload.php';

use ArkhTech\ArkhUniqueId\ArkhUniqueId;

$unique = new ArkhUniqueId();

$id = $unique->uniqueId4Numeric();
echo $id.PHP_EOL;
/*4329*/

$id = $unique->uniqueId4AlphaNumeric();
echo $id.PHP_EOL;
/*4e2D*/

$id = $unique->uniqueId8Numeric();
echo $id.PHP_EOL;
/*44005232*/

$id = $unique->uniqueId8AlphaNumeric();
echo $id.PHP_EOL;
/*4w0s5c3s*/

$id = $unique->uniqueId12Numeric();
echo $id.PHP_EOL;
/*047427145956*/

$id = $unique->uniqueId12AlphaNumeric();
echo $id.PHP_EOL;
/*G3y1q3q0O6q4*/

$id = $unique->uniqueId16Numeric('-');
echo $id.PHP_EOL;
/*2224-1181-5460-4569*/

$id = $unique->uniqueId16AlphaNumeric('-');
echo $id.PHP_EOL;
/*g3a0-m2y5-s6a6-y0s2*/

$id = $unique->uniqueId32Numeric('-');
echo $id.PHP_EOL;
/*0244-4542-1561-3255-0055-0146-9020-2244*/

$id = $unique->uniqueId32AlphaNumeric('-');
echo $id.PHP_EOL;
/*p0v1-a5Q13-K4a5-v2v4-Q2v3-v0p6-p6K2-Q0Q5*/
?>
```
