FROM gitpod/workspace-full:latest

# install corresponding PHP Xdebug
RUN sudo install-packages php-xdebug

# optional: use a custom apache config.
COPY apache.conf /etc/apache2/apache2.conf

# optional: change document root folder. It's relative to your git working copy.
ENV APACHE_DOCROOT_IN_REPO="www"