FROM ubuntu:14.04

ENV DEBIAN_FRONTEND noninteractive
ENV LANG C.UTF-8

RUN apt-get update && apt-get install -y \
    software-properties-common \
    python-software-properties
RUN apt-get update && apt-get upgrade -y
RUN add-apt-repository -y ppa:ondrej/php5-5.6
RUN apt-get update && apt-get install -y \
    php5-cli \
    php5-fpm \
    php5-json \
    php5-curl \
    php5-intl

ADD start.sh /start.sh
ADD symfony_environment.sh /etc/profile.d/symfony_environment.sh

EXPOSE 9000

WORKDIR /var/www

ENTRYPOINT ["/start.sh"]
