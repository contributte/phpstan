.PHONY: install
install:
	composer update

.PHONY: qa
qa: cs

.PHONY: cs
cs:
ifdef GITHUB_ACTION
	vendor/bin/phpcs --standard=ruleset.xml --encoding=utf-8 --colors -nsp --extensions="php,phpt" -q --report=checkstyle tests | cs2pr
else
	vendor/bin/phpcs --standard=ruleset.xml --encoding=utf-8 --colors -nsp --extensions="php,phpt" tests
endif

.PHONY: csf
csf:
	vendor/bin/phpcbf --standard=ruleset.xml --encoding=utf-8 --colors -nsp --extensions="php,phpt" tests

.PHONY: tests
tests:
	vendor/bin/tester -s -p php --colors 1 -C tests/Cases
