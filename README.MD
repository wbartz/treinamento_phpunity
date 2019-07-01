# Testes unitários com PHP utilizando PHPUnit

Dependências

- PHP 5.6
  - php5.6-xml
  - php5.6-mbstring
- [PHPUnit](https://phpunit.de/)
- [Composer](https://getcomposer.org/)

### Instalando o composer

```sh
$ sudo apt-get install curl
$ sudo curl -s https://getcomposer.org/installer | php
$ sudo mv composer.phar /usr/local/bin/composer
```

Criar o arquivo **composer.json**

```javascript
{
  "name": "wbartz/treinamento_phpunity",
"description": "Treinamento de testes unitários",
  "type": "project",
  "require-dev": {
    "phpunit/phpunit": "^5"
  },
  "license": "MIT",
  "authors": [
    {
      "name": "William Bartz",
      "email": "williamf.brtz@gmail.com"
    }
  ],
  "autoload": {
    "psr-4": {
      "wbartz\\acme\\": "src/"
    }
  },
  "scripts": {
    "test": "vendor/bin/phpunit"
  },
  "require": {}
}
```

Instalar as dependências com o comando

```sh
$ composer install
```
