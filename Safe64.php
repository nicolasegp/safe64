<?php
/**
 * Safe64
 * Simple Class to encrypt Base64 in PHP
 *
 * @author Nicolás Giacaman <nicolas.egp@gmail.com>
 *
 */
class Safe64 {

	// Ref. Token
	const B64 = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; // Don't touch this
	const E64 = 'S30EGnsQCxWAh91NLefB6mwUI8KtFagJzkpvd7ORZV2rPYobji4qDXTyHl5cMu'; // Result by Safe64::token()

	// URI Safe
	const B = '+/=';
	const E = '-_,';

	public static function token() {
		return str_shuffle(self::B64);
	}

	public static function encode($Str, $Token = null) {
		$Salt = empty($Token) ? self::E64 : $Token;
		return strtr(base64_encode($Str), self::B64.self::B, $Salt.self::E);
	}

	public static function decode($Str, $Token = null) {
		$Salt = empty($Token) ? self::E64 : $Token;
		return base64_decode(strtr($Str, $Salt.self::E, self::B64.self::B));
	}

}
?>
