# shehzad-string-processor-cli

## Overview
This CLI tool performs string convertion to 
1. Uppercase
2. Alternate case (starting first letter with lowercase)
3. Comma separated letters of string written to a CSV file named output.txt
4. String without change - basic string processor - it demostrates extensibility of design

Input phrases to convert; type quit to exit

### Introduction

Technical assessment display

## Setup

1. Install docker
2. Install docker-compose
3. Run `docker-compose up -d`
4. Wait and do some stretches ;)
5. Once done, Run `docker exec -it image_id /bin/sh -c "[ -e /bin/bash ] && /bin/bash || /bin/sh"`
6. Once inside container, Run `composer install`
7. `composer config repositories.shehzad-string-processor-lib git https://github.com/ssamnani/shehzad-string-processor-lib.git`
8. `composer require "ssamnani/shehzad-string-processor-lib:~1.3.0"`

## Usage
1. `php commander.php`
2. Ready to go! Type any phrase to convert the strings; type quit to exit.
