install:
	composer install
phpcs:
	./vendor/bin/phpcs src
phpcbf:
	./vendor/bin/phpcbf src
