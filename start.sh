#!/bin/bash

docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php84-composer:latest \
    composer install --ignore-platform-reqs

cp .env.example .env

touch database/database.sqlite

./vendor/bin/sail up -d

sleep 10

./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan migrate
./vendor/bin/sail artisan db:seed

./vendor/bin/sail npm install
./vendor/bin/sail npm run build

echo "Setup completed successfully!"
echo "Your application is running at: http://localhost"