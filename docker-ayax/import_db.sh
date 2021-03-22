#!/bin/bash

docker exec -i ayax_mysql_db sh -c 'exec mysql -u"$MYSQL_USER" -p"$MYSQL_ROOT_PASSWORD" -e "CREATE DATABASE IF NOT EXISTS cabinet"'
docker exec -i ayax_mysql_db sh -c 'exec mysql -u"MYSQL_USER" -p"$MYSQL_ROOT_PASSWORD" cabinet < ../database/dumps/cabinet.sql'
