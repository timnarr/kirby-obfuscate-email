<?php

@include_once __DIR__ . '/vendor/autoload.php';

use TimNarr\Obfuscate;

Kirby::plugin('timnarr/obfuscate-email', [
	'options' => [
		'regex' => '/[A-Z0-9\._%+-]+(@)[A-Z0-9\.-]+(\.)[a-z]{2,}/i',
	],
	'fieldMethods' => [
		'obfuscateEmail' => function ($field) {
			$field->value = Obfuscate::email((string)$field->value);

			return $field;
		},
		'obfuscateEmails' => function ($field) {
			$field->value = Obfuscate::emailsInText((string)$field->value);

			return $field;
		},
	],
]);
