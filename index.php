<?php

@include_once __DIR__ . '/vendor/autoload.php';

use TimNarr\Obfuscate;

Kirby::plugin('timnarr/obfuscate-email', [
	'options' => [
		'regex' => '/[A-Z0-9\._%+-]+(@)[A-Z0-9\.-]+(\.)[a-z]{2,}/i',
	],
	'fieldMethods' => [
		'obfuscateEmail' => function ($field) {
			$field->value = Obfuscate::email($field->value);

			return $field;
		},
		'obfuscateEmails' => function ($field) {
			$field->value = Obfuscate::emailsInText($field->value);

			return $field;
		},
	],
]);
