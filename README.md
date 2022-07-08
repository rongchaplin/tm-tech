# Tokio Marine Tech Assessment  

## Docker Integration
Using a [Docker](https://www.docker.com/)-based installer and runtime for the [Symfony](https://symfony.com) web framework, with full [HTTP/2](https://symfony.com/doc/current/weblink.html), HTTP/3 and HTTPS support.

Following the steps outlined in [Using Symfony Docker with an existing project](docs/existing-project.md) I have integrated 
the docker environment suggested by the [Symfony docs](https://symfony.com/doc/current/setup/docker.html)

The Symfony Encore Webpack package has been added along with support for Bootstrap and React JS.

## Getting Started

1. If not already done, [install Docker Compose](https://docs.docker.com/compose/install/)
2. Run `docker-compose build --pull --no-cache` to build fresh images
3. Run `docker-compose up` (the logs will be displayed in the current shell)
4. Run `docker-compose down --remove-orphans` to stop the Docker containers.
5. Run `composer install`
6. Run `yarn install` or `npm install` if using npm.
7. Run `yarn watch` or `npm watch` to run the [Symfony Encore webpack](https://symfony.com/doc/current/frontend.html#webpack-encore) build system.
8. Open `https://localhost` in your favorite web browser and [accept the auto-generated TLS certificate](https://stackoverflow.com/a/15076602/1352334)


## Credits

Docker container created by [Kévin Dunglas](https://dunglas.fr), co-maintained by [Maxime Helias](https://twitter.com/maxhelias) and sponsored by [Les-Tilleuls.coop](https://les-tilleuls.coop).

SPA created by [Ron Chaplin](https://github.com/rongchaplin/tm-tech)
