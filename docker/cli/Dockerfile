ARG PHP_VERSION

FROM composer
FROM php:${PHP_VERSION}-cli-alpine

WORKDIR /app

RUN apk update &&  \
    apk add git

COPY --from=composer /usr/bin/composer /usr/bin/composer
CMD ["sleep", "infinity"]