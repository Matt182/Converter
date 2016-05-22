install:
	composer install

autoload:
	composer dump-autoload

test:
	composer exec phpunit --bootstrap tests

lint:
	composer exec phpcs src tests
