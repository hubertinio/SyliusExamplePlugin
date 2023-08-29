<p align="center">
    <a href="https://sylius.com" target="_blank">
        <img src="https://demo.sylius.com/assets/shop/img/logo.png" />
    </a>
</p>

<h1 align="center">Plugin Skeleton</h1>

<p align="center">Skeleton for starting Sylius plugins.</p>

## Init

```
git clone git@github.com:hubertinio/SyliusExamplePlugin.git sylius-unicorn-plugin
cd sylius-unicorn-plugin
git remote remove origin
; create repo
git remote add origin git@github.com:hubertinio/SyliusUnicornPlugin.git
git push -u origin 1.12
```

## What to rename?

- name in the composer.json
- find and replace "Hubertinio\\\\SyliusExamplePlugin" into "Hubertinio\\\\SyliusApaczkaPlugin"
- find and replace "Hubertinio\SyliusExamplePlugin" into "Hubertinio\SyliusApaczkaPlugin"
- find and replace with case sensitive "HubertinioSyliusExamplePlugin" into "HubertinioSyliusApaczkaPlugin"
- find and replace with case sensitive "hubertiniosyliusexampleplugin" into "hubertiniosyliusapaczkaplugin"
- find and replace "hubertinio_sylius_example" into "hubertinio_sylius_apaczka"
- refactor class and file name src/HubertinioSyliusExamplePlugin.php
- refactor class and file name DependencyInjection/HubertinioSyliusExampleExtension.php


## Composer install

Set private repository.

```
    "repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:hubertinio/SyliusUnicornPlugin.git"
        }
    ],
```

Install.

```
composer require hubertinio/sylius-cachbill-plugin:1.12.x-dev
```


## Register plugin

Insert into `config/bundles.php` array that line:

```
Hubertinio\SyliusApaczkaPlugin\HubertinioSyliusApaczkaPlugin::class => ['all' => true],
```

## How to add routing?

Insert into `config/routes.yaml` this content:

```
hubertinio_sylius_apaczka_plugin:
    resource: "@HubertinioSyliusApaczkaPlugin/config/routing.yml"
```

## Documentation

For a comprehensive guide on Sylius Plugins development please go to Sylius documentation,
there you will find the <a href="https://docs.sylius.com/en/latest/plugin-development-guide/index.html">Plugin Development Guide</a>, that is full of examples.

## Quickstart Installation

### Traditional

1. Run `composer create-project sylius/plugin-skeleton ProjectName`.

2. From the plugin skeleton root directory, run the following commands:

    ```bash
    $ (cd tests/Application && yarn install)
    $ (cd tests/Application && yarn build)
    $ (cd tests/Application && APP_ENV=test bin/console assets:install public)
    
    $ (cd tests/Application && APP_ENV=test bin/console doctrine:database:create)
    $ (cd tests/Application && APP_ENV=test bin/console doctrine:schema:create)
    ```

To be able to set up a plugin's database, remember to configure you database credentials in `tests/Application/.env` and `tests/Application/.env.test`.

### Docker

1. Execute `docker compose up -d`

2. Initialize plugin `docker compose exec app make init`

3. See your browser `open localhost`

## Usage

### Running plugin tests

  - PHPUnit

    ```bash
    vendor/bin/phpunit
    ```

  - PHPSpec

    ```bash
    vendor/bin/phpspec run
    ```

  - Behat (non-JS scenarios)

    ```bash
    vendor/bin/behat --strict --tags="~@javascript"
    ```

  - Behat (JS scenarios)
 
    1. [Install Symfony CLI command](https://symfony.com/download).
 
    2. Start Headless Chrome:
    
      ```bash
      google-chrome-stable --enable-automation --disable-background-networking --no-default-browser-check --no-first-run --disable-popup-blocking --disable-default-apps --allow-insecure-localhost --disable-translate --disable-extensions --no-sandbox --enable-features=Metal --headless --remote-debugging-port=9222 --window-size=2880,1800 --proxy-server='direct://' --proxy-bypass-list='*' http://127.0.0.1
      ```
    
    3. Install SSL certificates (only once needed) and run test application's webserver on `127.0.0.1:8080`:
    
      ```bash
      symfony server:ca:install
      APP_ENV=test symfony server:start --port=8080 --dir=tests/Application/public --daemon
      ```
    
    4. Run Behat:
    
      ```bash
      vendor/bin/behat --strict --tags="@javascript"
      ```
    
  - Static Analysis
  
    - Psalm
    
      ```bash
      vendor/bin/psalm
      ```
      
    - PHPStan
    
      ```bash
      vendor/bin/phpstan analyse -c phpstan.neon -l max src/  
      ```

  - Coding Standard
  
    ```bash
    vendor/bin/ecs check
    ```

### Opening Sylius with your plugin

- Using `test` environment:

    ```bash
    (cd tests/Application && APP_ENV=test bin/console sylius:fixtures:load)
    (cd tests/Application && APP_ENV=test bin/console server:run -d public)
    ```
    
- Using `dev` environment:

    ```bash
    (cd tests/Application && APP_ENV=dev bin/console sylius:fixtures:load)
    (cd tests/Application && APP_ENV=dev bin/console server:run -d public)
    ```
