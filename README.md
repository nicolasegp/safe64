# Base64 Seguro para PHP

Class estática para encriptar cadenas de Base64 en PHP

* [X] Soporte para encriptación por token único
* [X] [Aplicaciones en URL](https://es.wikipedia.org/wiki/Base64#Aplicaciones_en_URL)

### Configuración

Primero es necesario crear un Token único con la función `token()`

```php
echo Safe64::token();
```

Ahora editamos la constante `E64` con el resultado obtenido por `token()`

```php
class Safe64 {

	const B64 = '<🚫 NO TOCAR ESTA CONSTANTE>';
	const E64 = '<✅ RESULTADO AQUI>';
	...
```

### Como usarlo

```php
$str = Safe64::encode('Hello World!!');
echo Safe64::decode($str); // Hello World!!
```

### Token personalizado

```php
// Generar con Safe64::token();
$customToken = 'x9rRIj1EPoi5zJsg8hqDdGwcTCuFKS0a7YbnX6kLlUeV3WtBQHp4MmA2ZOyNfv';

$str = Safe64::encode('Hello World!!', $customToken);
echo Safe64::decode($str); // Error
echo Safe64::decode($str, $customToken); // Hello World!!
```

### Licencia

> **GPL v3.0 ©** Siéntase libre de utilizar este código y adaptarlo a su software; sólo tiene que mencionar esta página si comparte su software (gratuito o de pago).
