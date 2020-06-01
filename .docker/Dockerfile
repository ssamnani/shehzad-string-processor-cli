FROM php:7.2-cli

RUN apt-get update -y
RUN apt-get install -y --no-install-recommends git zip nano wget curl libxslt-dev graphviz unzip zlib1g-dev libzip-dev

RUN curl --silent --show-error https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version

RUN wget https://github.com/phpDocumentor/phpDocumentor2/files/2310268/phpdoc.7.2.phar.zip

RUN docker-php-ext-install xml
RUN docker-php-ext-install xsl
RUN docker-php-ext-install xmlwriter
RUN docker-php-ext-install zip

RUN yes | pecl install xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=off" >> /usr/local/etc/php/conf.d/xdebug.ini

ADD . /app
WORKDIR /app

# Do the install of the required
# RUN composer install

# For documentation purposes
# php phpDocumentor.phar -d ./app/src -t ./app/docs --ignore vendor/ --template="new-black"