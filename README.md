# Dockerised PHP7-FPM, Nginx and MySQL.

Docker setup for PHP projects with PHP7-FPM, Nginx and MySQL.


## Instructions
1) Checkout this repository
2) Run on terminal: `docker-compose up` <br>
3) Open a browser and go to localhost:8080 (/etc/hosts file must be an entry to your local ip e.g: `192.168.99...  localhost`), but you can usethe server name you want: `192.168...  mysite.local`

PHP7 is running on Nginx with MySQL enabled!!!

OBS: Edit Dockerfile file to add some PHP extensions tha you need.
