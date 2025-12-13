FROM ubuntu:latest
RUN apt-get update && apt-get install apache2 -y
RUN cd /var/www/html
RUN echo "Integration Successfully" > index.html
RUN service apache2 start
