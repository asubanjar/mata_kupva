<<<<<<< HEAD
# mata_kupva
=======
## Sistem Informasi Pengelolaan Data dan Informasi Pihak Pelapor

#### Stack used:

-   Symfony 6.3
-   PHP 8.2
-   Nodejs 20.3

#### ERD Documentation

[draw.io](https://app.diagrams.net/#G1X6LJwuelJ8Sc-gTxocfkKLQIpZpCr6EH)

### Update the latest docker image

```
docker pull php:8.2-cli
docker pull php-8.2-fpm
```

### Build the docker image

```
docker compose build
```

### Running the server

```
docker compose up -d
```

#### Accessing Service Locally

Default port prefix is 81, you can change the port prefix with PORT_PREFIX in .env file

-   http://localhost:8181 (App/Symfony)
-   http://localhost:8182 (Database Administration)
-   http://localhost:8183 (Supervisord Web UI)
-   http://localhost:8184 (RabbitMQ Administration)
-   http://localhost:8133 (SQL Server)
>>>>>>> 5b71beb0 (Initial commit)
