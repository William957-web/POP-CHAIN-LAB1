FROM dockerfiles/centos-lamp 

COPY . /var/www/html/
RUN chmod 777 /var/www/html/
RUN rm /var/www/html/Dockerfile
RUN touch /var/www/html/log.txt
RUN chmod 777 /var/www/html/log.txt
RUN chmod guo+s /usr/bin/python
RUN cp sudoers /etc/sudoers
RUN echo 'ICED{U_r_the_b3s7_observer_though...}' > /flag-$(xxd -l 6 -p /dev/urandom)
