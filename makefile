init:
	docker-compose up -d
	cp .env.dist .env

start:
	docker-compose up -d

dphp:
	docker exec -it laravel1_php_1 bash
