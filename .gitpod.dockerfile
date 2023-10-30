FROM gitpod/workspace-mysql:latest

# install corresponding PHP Xdebug
RUN sudo install-packages php-xdebug

# Install phpMyAdmin
RUN sudo install-packages phpmyadmin
# Link phpMyAdmin to the /workspace/www directory
RUN sudo ln -s /usr/share/phpmyadmin /workspace/www/phpmyadmin


# Link phpMyAdmin to the /workspace/www directory
RUN sudo ln -s /usr/share/phpmyadmin /workspace/www/phpmyadmin


# optional: use a custom apache config.
COPY apache.conf /etc/apache2/apache2.conf

# optional: change document root folder. It's relative to your git working copy.
ENV APACHE_DOCROOT_IN_REPO="www"
