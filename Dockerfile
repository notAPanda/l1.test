FROM dunglas/frankenphp

RUN apt-get update && apt-get install -y \
    nodejs \
    npm

RUN install-php-extensions \
    pcntl \
    redis
    # Add other PHP extensions here...

COPY . /app

ENTRYPOINT ["php", "artisan", "octane:frankenphp"]
