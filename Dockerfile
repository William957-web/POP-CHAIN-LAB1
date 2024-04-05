FROM dockerfiles/centos-lamp 

COPY . /var/www/html/
RUN rm /var/www/html/Dockerfile
RUN touch log.txt
RUN chmod 777 log.txt
RUN echo 'ICED{U_r_the_b3s7_observer_though...}' > /flag-$(xxd -l 6 -p /dev/urandom)
