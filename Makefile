SHELL=/bin/bash

UID = $(shell id -u)
GID = $(shell id -g)

help: ## show Help
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

RUN_PHP:=docker-compose exec -u dev php
DOCKER_COMPOSE:=docker-compose

.PHONY: up
up: down ## restart containers
	if [ ! -f .env -a -f .env.dist ]; then sed "s,#UID#,$(UID),g;s,#GID#,$(GID),g" .env.dist > .env; fi
	${DOCKER_COMPOSE} up -d

.PHONY: down
down: ## stop containers
	${DOCKER_COMPOSE} down --remove-orphans

.PHONY: install
install: ## install deps
	${RUN_PHP} composer install

.PHONY: test
test: ## run tests
	${RUN_PHP} ./vendor/bin/phpunit --testdox

.PHONY: shell
shell: ## enter php container
	${RUN_PHP} bash

.PHONY: jane
jane: ## generate a client (make jane CONFIG=config/jane-rpc-openapi.php)
	${RUN_PHP} vendor/bin/jane-openapi generate --config-file=${CONFIG}
	${RUN_PHP} composer dumpautoload
