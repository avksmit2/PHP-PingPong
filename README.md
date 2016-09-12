# _Ping-Pong_

#### _Website that displays "ping" and "pong" instead of numbers, August 19, 2016_

#### _**By Angela Smith**_

##Description
_This website receives a number from a user and returns numbers 1 through the number received, replacing "ping" and "pong" for numbers divisible by 3, 5 and 15._

## Specifications
  1. display the result to the user
    * input example: 5
    * output example: 5
  5. change all numbers divisible by 3 to "ping"
    * input example: 5
    * output example: 12"ping"45
  6. change all numbers divisible by 5 to "pong"
    * input example: 5
    * output example:  1234"pong"
  7. change all numbers divisible by 15 to "ping-pong"
    * input example: 15
    * output example: 1234567891011121314"ping-pong"
  8. display result as a new list
    * input example: 5
    * output example: * pong
                      * 4
                      * ping
                      * 2
                      * 1

## Setup/Installation Requirements
* Clone the GitHub repository to your local machine
* Make sure you have composer installed
* Run composer install from the project root folder
* Start php server from the web folder ( php -S localhost:8000 )
* Go to localhost:8000 from your web browser

## Known Bugs
There are no known bugs

## Support and contact details
_If there are any issues, questions or ideas regarding this application, contact Angie Smith at avksmit2@gmail.com._

##Technologies Used
* Silex
* Bootstrap
* PHP
* Composer
* Tiwg

###License
*MIT License*

Copyright (c) 2016 **_Angela Smith_**
