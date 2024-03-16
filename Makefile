composer-install:
	composer install

test: composer-install
	vendor/bin/phpunit --configuration ../SOLID/phpunit.xml.dist

coverage: composer-install
	XDEBUG_MODE=coverage vendor/bin/phpunit --configuration ../SOLID/phpunit.xml.dist

coverage-report: coverage
	XDEBUG_MODE=coverage vendor/bin/phpunit --configuration ../SOLID/phpunit.xml.dist --coverage-html=artifacts/coverage \
	&& open artifacts/coverage/index.html

clean:
	rm -rf artifacts/

static: static-phpstan static-codesniffer static-codestyle-check

static-codesniffer: composer-install
	vendor/bin/phpcs --standard=PSR2 src tests

static-phpstan: composer-install
	vendor/bin/phpstan analyze $(PHPSTAN_PARAMS)

static-codestyle-fix: composer-install
	vendor/bin/php-cs-fixer fix --diff $(CS_PARAMS)

static-codestyle-check:
	$(MAKE) static-codestyle-fix CS_PARAMS="--dry-run"

.PHONY: composer-install test coverage coverage-report clean static static-codesniffer static-phpstan static-codestyle-fix static-codestyle-check
