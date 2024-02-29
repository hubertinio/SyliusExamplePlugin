FROM sylius/standard:1.11-traditional

RUN apt-get update; \
    apt-get install -y \
      memcached \
      php8.0-memcached \
      php8.0-xdebug \
      libmemcached-tools \
      curl \
      git \
      nano; \
    apt-get clean -y; \
    apt-get autoremove -y; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

RUN apt-get remove -y nodejs; \
    curl -sL https://deb.nodesource.com/setup_20.x | bash -; \
    apt-get install -y nodejs; \
    apt-get clean -y; \
    apt-get autoremove -y; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

#COPY .ssh/ /root/.ssh/
#
#RUN chown -R root:root /root/.ssh; \
#    chmod 0700 /root/.ssh; \
#    chmod 0600 /root/.ssh/id_rsa

RUN mkdir -p /var/www/.yarnrc; \
    chmod 775 /var/www/.yarnrc; \
    chown -R 33:33 /var/www/.yarnrc; \
    chown www-data:www-data /var/www/.yarnrc; \
    mkdir -p /var/www/.npm; \
    chmod 775 /var/www/.npm; \
    chown -R 33:33 /var/www/.npm; \
    chown www-data:www-data /var/www/.npm;

USER root

CMD "php-fpm -R -F"