local_build:
	docker-compose up -d --build app

local_first_build:
	make local_build
	sleep 10
	make local_first_build_after

local_first_build_after:
	docker cp path-api:/var/www/app/vendor .
	docker cp path-api:/var/www/app/.env .
	docker cp path-api:/var/www/app/composer.json .
	docker cp path-api:/var/www/app/composer.lock .
	docker exec --user root path-api /bin/sh -c "chown -hR www-data:www-data ."
	docker exec --user www-data path-api /bin/sh -c "php bin/console d:s:u --force"
	docker exec --user www-data path-api /bin/sh -c "php bin/console d:m:m"

local_remove_build:
	rm -rf ./vendor
	rm -rf ./.env
	docker-compose down --rmi all -v

local_prune_all:
	docker system prune -a --all
	docker system prune -a --volumes