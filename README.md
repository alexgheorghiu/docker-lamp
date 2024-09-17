# Docker for LAMP

Simple Docker/Docker-Composer configuration to be used for quick setting up a LAMP dev enviroment

## Prerequisites

Have been tested and found to work against:

* Docker: 24.0.5
* Docker compose: 1.29.2
* (optional) OS: Linux Mint 21

## Build it and launch it
```bash
#only launch
docker-compose up

#(force re-)build and launch
docker-compose up --build

#rebuild ONLY a single container and launch
docker-compose up -d --force-recreate --build container_name
```

App should run at http://localhost:8080

PhpMyAdmin should run at http://localhost:8001

## Shut it down
```bash
docker-compose down
```

## Access it
* Index file:  http://localhost:8080/index.php
* PHP info: http://localhost:8080/info.php
* XDebug info: http://localhost:8080/xdebug.php

### IDEs

#### Visual Studio Code

Run and Debug > PHP and inside the newly created launch.json file change the "Listen for Xdebug" section to

```json
{
    "name": "Listen for Xdebug on Docker",
    "type": "php",
    "request": "launch",
    "port": 9003,
    "pathMappings": {
        "/var/www/html/": "${workspaceFolder}"
    }
},
```

#### NetBeans 20

New Project > with Existing Sources :
    Sources Folder (this folder)
    PHP Version: 8.1

Run Configuration:
    Run As: Local Web Site
    Project URL: localhost:8080
    Index File: index.php

Debug should work right now flawlessly 

## Links
* [Setup Step Debugging in PHP with Xdebug 3 and Docker Compose](https://matthewsetter.com/setup-step-debugging-php-xdebug3-docker/)
* [How to connect to the Docker host from inside a Docker container?](https://medium.com/@TimvanBaarsen/how-to-connect-to-the-docker-host-from-inside-a-docker-container-112b4c71bc66) to fix 'host.docker.internal' issue
* [Xdebug in VSCode with Docker](https://dev.to/jackmiras/xdebug-in-vscode-with-docker-379l) for Visual Studio Code settings

