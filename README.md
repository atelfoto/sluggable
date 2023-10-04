# Plugin Sluggable  for CakePHP 5 `<!-- omit in toc -->`

[![Build Status](https://api.travis-ci.com/atelfoto/sluggable.svg?branch=master)](https://travis-ci.org/atelfoto/sluggable)
[![License](https://poser.pugx.org/atelfoto/sluggable/license.svg)](//packagist.org/packages/atelfoto/sluggable)
[![Latest Stable Version](https://poser.pugx.org/atelfoto/sluggable/v/stable.svg)](//packagist.org/packages/atelfoto/sluggable)
![Packagist PHP Version Support (specify version)](https://img.shields.io/packagist/php-v/cakephp/cakephp/4.1.1?color=green&logo=cakephp)
![GitHub repo size](https://img.shields.io/github/repo-size/atelfoto/sluggable?color=red&logo=cakephp)
[![Code Qualité](https://scrutinizer-ci.com/g/atelfoto/sluggable/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/atelfoto/sluggable/?branch=master)
![PHP Composer](https://github.com/atelfoto/sluggable/workflows/PHP%20Composer/badge.svg)

- [1. Requirements](#1-requirements)
- [2. Installation](#2-installation)
- [3. Configuration](#3-configuration)
  - [3.1. Model Table](#31-model-table)
  - [3.2. Controller](#32-controller)
  - [3.3. Route](#33-route)

## 1. Requirements

- cakephp 5.x

## 2. Installation

You can install this plugin into your CakePHP application using [composer](https://getcomposer.org).

The recommended way to install composer packages is:

```
composer require atelfoto/sluggable
```

- or  add it in the composer.json

```json
"require": {
    "atelfoto/sluggable": "1.*"
},
```

- And in a Table in ``initialize();`` add this line:

```php
 //src/Model/Table/model.php
 $this->addBehavior('Sluggable.Sluggable');
```

## 3. Configuration

### 3.1. Model Table

- **Field**
  - Default: _name_
  - The field to slug
    ```php
    $this->addBehavior('Sluggable.Sluggable', [
        'field' => 'your-field'
        ]
    );
    ```
- **Slug**
  - Default: _slug_
  - The slug field name in your database:
    ```php
    $this->addBehavior('Sluggable.Sluggable', [
        'field' => 'your-field',
        'slug' => 'your-slug'
        ]
    );
    ```
- **Replacement**
  - Default: `-`
  - The replacement characters used to replace space:

    ```php
    $this->addBehavior('Sluggable.Sluggable', [
        'replacement' => '_'
    ]);
    ```

### 3.2. Controller

- To use in a finder:

  ```php
  public function view($value = null)
    {
        $query = $this->Models->findBySlug($value)->firstOrFail();
        $this->set(compact('query'));
    }
  ```

### 3.3. Route

- In the Route

  ```php
  //config/routes

  $routes->connect(
        '/the title/:slug',
        ['controller' => 'YourController', "action" => "view"],
        [
            "_name" => "the title",
            "pass" => ['slug'],
        ]
    );
  ```
