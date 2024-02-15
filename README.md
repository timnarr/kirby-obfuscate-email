# Kirby Obfuscate E-Mail

This plugin provides e-mail obfuscation via field-methods to prevent spam bots from harvesting e-mail addresses from your website.

## Credits
First things first - I basically copied this plugin code from [seehat's post](https://forum.getkirby.com/t/email-obfuscate/4475/20) in the Kirby forum. Many thanks to him.

## Installation

### Composer
```
composer require timnarr/kirby-obfuscate-email
```

## Usage
Use the `obfuscateEmail()` field method if you just want to obfuscate an single e-mail value from a field. Example:
`$page->emailField()->obfuscateEmail()`.

If you want to obfuscate multiple e-mails in a text field you can use the `obfuscateEmails()` method. This method uses regex to find all e-mails and obfuscate them. Example: `$page->myTextField()->obfuscateEmails()`.

## Options
| Option | Default | Type | Description |
| ------ | ------- | ---- | ----------- |
| `regex` | `/[A-Z0-9\._%+-]+(@)[A-Z0-9\.-]+(\.)[a-z]{2,}/i` | string | Regular expression, used to find e-mails in text. Change to your pattern if needed. |

## License
[MIT License](./LICENSE) Copyright © 2024-present Tim Narr
