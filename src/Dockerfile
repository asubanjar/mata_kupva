ARG PHP_VERSION=8.2
ARG PHP_VARIANT=cli

FROM php:${PHP_VERSION}-${PHP_VARIANT}

# Set Environment Variables
ENV DEBIAN_FRONTEND noninteractive

ARG DEBIAN_APT_MIRROR
ENV DEBIAN_APT_MIRROR=$DEBIAN_APT_MIRROR

RUN if [ -n "${DEBIAN_APT_MIRROR}" ]; then \
    sed -i -e "s|http://deb.debian.org|$DEBIAN_APT_MIRROR|" /etc/apt/sources.list.d/debian.sources \
    ;fi

RUN if [ -n "${HTTP_PROXY}" ]; then \
    pear config-set http_proxy $HTTP_PROXY \
    ;fi

RUN useradd -ms /bin/bash dinamis \
    && pecl channel-update pecl.php.net \
    && apt update -yqq \
    && apt install -yqq --no-install-recommends \
    apt-utils \
    curl \
    g++ \
    git \
    gnupg2 \
    libicu-dev \
    libpng-dev \
    libldap2-dev \
    libzip-dev \
    locales \
    unzip \
    zlib1g-dev

################################################################################
# INSTALL BASH_COMPLETION:
################################################################################
ARG INSTALL_BASH_COMPLETION=false

RUN if [ ${INSTALL_BASH_COMPLETION} = true ]; then \
    apt install -y --no-install-recommends bash-completion \
    ;fi

################################################################################
# INSTALL COMPOSER:
################################################################################
RUN curl https://composer.github.io/installer.sig | tr -d '\n' > installer.sig \
    && curl https://getcomposer.org/installer -o composer-setup.php \
    && php -r "if (hash_file('SHA384', 'composer-setup.php') === file_get_contents('installer.sig')) { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php'); unlink('installer.sig');" \
    && mv composer.phar /usr/local/bin/composer

################################################################################
# INSTALL EXT:
################################################################################
RUN docker-php-ext-install iconv intl bcmath gd zip ldap

################################################################################
# INSTALL LESS:
################################################################################
ARG INSTALL_LESS=false

RUN if [ ${INSTALL_LESS} = true ]; then \
    apt install -y --no-install-recommends less \
    ;fi

################################################################################
# INSTALL MSSQL:
################################################################################
RUN set -eux; \
    ########################################################################
    #  The following steps were taken from
    #  https://github.com/Microsoft/msphpsql/wiki/Install-and-configuration
    ########################################################################
    curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add - \
    && printf "deb [arch=amd64,arm64,armhf] https://packages.microsoft.com/debian/12/prod bookworm main" | tee /etc/apt/sources.list.d/mssql-release.list \
    && apt update -yqq \
    && ACCEPT_EULA=Y apt install -yqq msodbcsql18 mssql-tools unixodbc unixodbc-dev libgss3 odbcinst locales \
    && ln -sfn /opt/mssql-tools/bin/sqlcmd /usr/bin/sqlcmd \
    && ln -sfn /opt/mssql-tools/bin/bcp /usr/bin/bcp \
    && printf "en_US.UTF-8 UTF-8" > /etc/locale.gen \
    && locale-gen \
    && if [ $(php -r "echo PHP_MAJOR_VERSION;") = "8" ] && [ $(php -r "echo PHP_MINOR_VERSION;") = "1" ]; then \
    pecl install pdo_sqlsrv-5.11.0 sqlsrv-5.11.0 \
    ;else \
    pecl install pdo_sqlsrv sqlsrv \
    ;fi \
    && printf "extension=sqlsrv.so"     > /usr/local/etc/php/conf.d/20-sqlsrv.ini \
    && printf "extension=pdo_sqlsrv.so" > /usr/local/etc/php/conf.d/20-pdo_sqlsrv.ini \
    && php -m | grep -q 'sqlsrv' \
    && php -m | grep -q 'pdo_sqlsrv'

################################################################################
# INSTALL NETCAT:
################################################################################
ARG INSTALL_NETCAT=false

RUN if [ ${INSTALL_NETCAT} = true ]; then \
    apt install -y --no-install-recommends netcat-openbsd \
    ;fi

################################################################################
# INSTALL NODEJS:
################################################################################
ARG INSTALL_NODEJS=false
ENV INSTALL_NODEJS=$INSTALL_NODEJS

RUN if [ "$INSTALL_NODEJS" = "current" ]; then \
    curl -fsSL https://deb.nodesource.com/setup_current.x | bash - && apt install -y nodejs \
    ;elif [ "$INSTALL_NODEJS" = "lts" ]; then \
    curl -fsSL https://deb.nodesource.com/setup_lts.x | bash - && apt install -y nodejs \
    ;fi

################################################################################
# INSTALL OPENSSH CLIENT:
################################################################################
ARG INSTALL_OPENSSH_CLIENT=false

RUN if [ ${INSTALL_OPENSSH_CLIENT} = true ]; then \
    apt install -y --no-install-recommends openssh-client \
    ;fi

################################################################################
# INSTALL SUDO:
################################################################################
ARG INSTALL_SUDO=false

RUN if [ ${INSTALL_SUDO} = true ]; then \
    apt install -yqq --no-install-recommends sudo \
    && echo "dinamis  ALL=(ALL) NOPASSWD:ALL" | sudo tee /etc/sudoers.d/dinamis \
    && usermod -aG sudo dinamis \
    ;fi

################################################################################
# INSTALL SUPERVISOR:
################################################################################
ARG INSTALL_SUPERVISOR=false

RUN if [ ${INSTALL_SUPERVISOR} = true ]; then \
    apt install -yqq --no-install-recommends supervisor \
    ;fi

################################################################################
# INSTALL VIM:
################################################################################
ARG INSTALL_VIM=false

RUN if [ ${INSTALL_VIM} = true ]; then \
    apt install -y --no-install-recommends vim \
    ;fi

################################################################################
# INSTALL ZSH:
################################################################################
ARG INSTALL_ZSH=false

RUN if [ ${INSTALL_ZSH} = true ]; then \
    apt install -y --no-install-recommends zsh \
    && usermod --shell /bin/zsh dinamis \
    && usermod --shell /bin/zsh root \
    ;fi

################################################################################
# SET TIMEZONE
################################################################################

ARG TIMEZONE=UTC
ENV TIMEZONE=${TIMEZONE}

RUN ln -snf /usr/share/zoneinfo/$TIMEZONE /etc/localtime \
    && printf $TIMEZONE > /etc/timezone

################################################################################

COPY .workspace/php.conf.d/* $PHP_INI_DIR/conf.d/

USER dinamis
