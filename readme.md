# Installation

( sudo apt-get install php7.0-mbstring php7.0-dom php7.0-xml )

composer install

set up db

cp .env.example .env

edit .env db settings

php artisan panel:install

php artisan migrate --path="vendor/serverfireteam/panel/src/database/migrations"

php artisan migrate

php artisan key:generate

sudo chmod -R 777 storage

npm install

gulp