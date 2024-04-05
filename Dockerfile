FROM dockerfiles/centos-lamp 

RUN apt update -y
RUN apt install curl -y
RUN yum install -y wget
RUN chmod 777 /var/www/html/
RUN rm /var/www/html/Dockerfile
RUN touch /var/www/html/log.txt
RUN chmod 777 /var/www/html/log.txt
RUN echo 'ICED{U_r_the_b3s7_observer_though...}' > /flag-$(xxd -l 6 -p /dev/urandom)
