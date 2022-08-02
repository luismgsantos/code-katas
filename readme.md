## Run the project

Open up a terminal in the root of the project and run
```shell
$ docker-compose up -d --build
```

Use composer?
```shell
$ docker-compose run --rm composer (...)
$
$ # Installing a package?
$ docker-compose run --rm composer require <vendor/package>
```

Run tests
```shell
$ docker-compose run --rm php vendor/bin/phpunit tests
```