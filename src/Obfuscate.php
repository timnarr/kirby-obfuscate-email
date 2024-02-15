<?php

namespace TimNarr;

use Kirby\Toolkit\Str;

class Obfuscate
{
	/**
	 * Encodes an email address.
	 *
	 * @param string $value The email address to be obfuscated.
	 * @return string The obfuscated email address.
	 */
	public static function email(string $value): string
	{
		return Str::encode($value);
	}

	/**
	 * Finds and obfuscates all email addresses in a given text.
	 *
	 * @param string $text The text containing email addresses to be obfuscated.
	 * @return string The text with all email addresses obfuscated.
	 */
	public static function emailsInText(string $text): string
	{
		$regex = option('timnarr.obfuscate-email.regex');
		$text = preg_replace_callback($regex, fn (array $matches): string => self::email($matches[0]), $text);

		return $text;
	}
}
