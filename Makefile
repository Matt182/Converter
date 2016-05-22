install:
	composer install

autoload:
	composer dump-autoload

test:
	composer exec phpunit -- --color tests

lint:
	composer exec phpcs src tests