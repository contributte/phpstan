![](https://heatbadger.now.sh/github/readme/contributte/phpstan/)

<p align=center>
	<a href="https://github.com/contributte/phpstan/actions"><img src="https://badgen.net/github/checks/contributte/phpstan/master?cache=300"></a>
	<a href="https://coveralls.io/r/contributte/phpstan"><img src="https://badgen.net/coveralls/c/github/contributte/phpstan?cache=300"></a>
	<a href="https://packagist.org/packages/contributte/phpstan"><img src="https://badgen.net/packagist/dm/contributte/phpstan"></a>
	<a href="https://packagist.org/packages/contributte/phpstan"><img src="https://badgen.net/packagist/v/contributte/phpstan"></a>
</p>
<p align=center>
	<a href="https://packagist.org/packages/contributte/phpstan"><img src="https://badgen.net/packagist/php/contributte/phpstan"></a>
	<a href="https://github.com/contributte/phpstan"><img src="https://badgen.net/github/license/contributte/phpstan"></a>
	<a href="https://bit.ly/ctteg"><img src="https://badgen.net/badge/support/gitter/cyan"></a>
	<a href="https://bit.ly/cttfo"><img src="https://badgen.net/badge/support/forum/yellow"></a>
	<a href="https://contributte.org/partners.html"><img src="https://badgen.net/badge/sponsor/donations/F96854"></a>
</p>

<p align=center>
Website 🚀 <a href="https://contributte.org">contributte.org</a> | Contact 👨🏻‍💻 <a href="https://f3l1x.io">f3l1x.io</a> | Twitter 🐦 <a href="https://twitter.com/contributte">@contributte</a>
</p>

Opinionated PHPStan setup with strict rules and Contributte/Nette extensions prepared for your projects.

## Versions

|  State   | Version  |  Branch  | Nette  |   PHP   |
|----------|----------|----------|--------|---------|
|   dev    |  ^0.4.0  |  master  |  3.3+  |  >=8.2  |
|  stable  |  ^0.3.0  |  master  |  3.3+  |  >=8.2  |

## Installation

To install latest version of `contributte/phpstan` use [Composer](https://getcomposer.org).

```bash
composer require --dev contributte/phpstan
```

## Usage

Include our prepared config in your `phpstan.neon`.

```neon
includes:
	- vendor/contributte/phpstan/phpstan.neon
```

Run PHPStan for your codebase.

```bash
vendor/bin/phpstan src
```

## Development

See [how to contribute](https://contributte.org) to this package. This package is currently maintained by these authors.

<a href="https://github.com/f3l1x">
	<img width="80" height="80" src="https://avatars2.githubusercontent.com/u/538058?v=3&s=80">
</a>

-----

Consider to [support](https://contributte.org/partners) **contributte** development team.
Also thank you for using this package.
