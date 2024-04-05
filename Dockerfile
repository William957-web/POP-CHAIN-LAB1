FROM dockerfiles/centos-lamp 

COPY . /var/www/html/
RUN chmod 777 /var/www/html/
RUN rm /var/www/html/Dockerfile
RUN touch /var/www/html/log.txt
RUN chmod 777 /var/www/html/log.txt
