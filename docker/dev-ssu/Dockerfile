FROM serversideup/php:8.2-fpm-nginx
ARG POSTGRES_VERSION=15
ARG NODE_VERSION=18
RUN apt-get update && \
    apt-get install -y php-pgsql postgresql-client && \
    curl -sLS https://deb.nodesource.com/setup_$NODE_VERSION.x | bash - && \
    apt-get install -y nodejs && \
    npm install -g npm
RUN apt-get -y autoremove && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

RUN echo "alias ll='ls -al'" >>/etc/bash.bashrc
RUN echo "alias a='php artisan'" >>/etc/bash.bashrc
RUN echo "alias mfs='php artisan migrate:fresh --seed'" >>/etc/bash.bashrc
RUN echo "alias cda='composer dump-autoload'" >>/etc/bash.bashrc
RUN echo "alias run='./scripts/run'" >>/etc/bash.bashrc
