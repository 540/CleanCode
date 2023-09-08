# CleanCodeRepo

Good morning and welcome to our repository of best practice programming principles.

In this repository we will create code examples in PHP to explain the principles of programming with good practices such as DRY, Tell don't ask, etc.

The organization of the project will be in the ``src`` folder, one directory for each principle:

    - /src/DRY
    - /src/LawOfDemeter

Within the folder of each principle, we will have 3 folders and a README:

    - /src/DRY/Error 
    - /src/DRY/Success
    - /src/DRY/Trial
    - /src/DRY/README.md

Error -> Example of a code where we will be breaking the principle with a comment where we are breaking the code.

Success -> Example of a code where we will be fixing the beginning with a comment of how we have done it.

Trial -> The error code so that you can try to fix it after looking at the solution or immediately after seeing the error case.

README.md -> Explanation of the principle and the example.

Each of the classes we have within the principle has independent tests for you to try.

## PHP 8.2 Docker 

By default, git, composer, php8.2 and Zsh are installed

The project can be assembled using docker:
 - Start docker daemon
 - Run: docker-compose up -d
 - To go into the container: docker exec -it php8.2 /bin/zsh
 - Project is on /home/php/CleanCode
 - To execute test: ./vendor/phpunit/phpunit/phpunit
 - To stop de container: docker-compose stop

## Community contribution

The idea of creating this repository is purely educational. While we review the basic principles of programming with good practices we create this repo for everyone who is interested in learning with real cases.

This repository is free if you want to make a contribution create a PR and we will gladly attend it.