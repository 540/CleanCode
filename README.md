# PHP 8.2 docker base image and testing base

By default git, composer, php8.2 and Zsh are installed

The project can be mounted using docker:
 - Start docker daemon
 - Run: docker-compose up -d
 - To go into the container: docker exec -it php8.2 /bin/zsh
 - Project is on /home/php/CleanCode
 - To execute test: ./vendor/phpunit/phpunit/phpunit
 - To stop de container: docker-compose stop
