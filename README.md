# Safe Base64 for PHP

Simple class to encrypt Base64 in PHP

* [X] Unique token encryption support
* [X] [URL Safe](https://en.wikipedia.org/wiki/Base64#URL_applications)

### How to configure

First need create a new token using the function `token()`

```php
echo Safe64::token();
```

Now edit the class constant `E64`

```php
class Safe64 {

	const B64 = '<🚫 DO NOT TOUCH THIS>';
	const E64 = '<✅ RESULT HERE>';
	...
```

### How to use

```php
$Str = Safe64::encode('Hello World!!');
echo Safe64::decode($Str); // Hello World!!
```

### Custom Token "Express"

```php
// Generate with Safe64::token();
$CustomToken = 'x9rRIj1EPoi5zJsg8hqDdGwcTCuFKS0a7YbnX6kLlUeV3WtBQHp4MmA2ZOyNfv';

$Str = Safe64::encode('Hello World!!', $CustomToken);
echo Safe64::decode($Str); // Error
echo Safe64::decode($Str, $CustomToken); // Hello World!!
```

### License

> **GPL v3.0 ©** Feel free to use this code and adapt it to your software; just mention this page if you share your software (free or paid).
