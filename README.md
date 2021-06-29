## Инструкция для разработчика

### Предварительные шаги
1. На компьютере установлен [Docker](https://docs.docker.com/get-docker/) и [Docker-Compose](https://docs.docker.com/compose/install/).
2. В директории `docker-ayax/` cоздай копию файла `.env.example` и перименуйте копию на `.env`
3. В директории проекта `src/` cоздай копию файла `.env.example` и перименуйте копию на `.env`
4. Рядом с директорией `docker-ayax` создайте папку `database/`, внутри две папки `data/` и `dumps/`, можете создать свои директории главное указать пути верно в `.env`

1. Находясь в папке проекта `docker-ajax` запусти команду `docker-compose up -d` - она сбилдит и запустит контейнеры.
2. Подтянуть зависимости проекта в контейнере `docker exec -i ayax_php sh -c 'exec composer install'`

### Накатить 
1. Переместите дамп `cabinet.sql` в директорию `database/dumps` 
2. Находясь в папке проекта `docker-ajax` запусти баш скрипт ./import_db.sh

### Пользуйся 
1. Сайт доступен по адресу localhost:8080

### Памятка для работы с Docker'ом
`docker-compose build` - сбилдить
`docker-compose up -d` - поднять 
`docker-compose down`  - остановить

### Удалить и очистить  
1. Для полного удаления контейнеров и образов, выполните баш скрипт ./remove_all_containers.sh
