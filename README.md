# plugin Sluggable  for CakePHP

[![Build Status](https://api.travis-ci.org/atelfoto/sluggable.png?branch=master)](https://travis-ci.org/atelfoto/sluggable)
[![License](https://poser.pugx.org/atelfoto/sluggable/license)](//packagist.org/packages/atelfoto/sluggable)
[![Latest Stable Version](https://poser.pugx.org/atelfoto/sluggable/v)](//packagist.org/packages/atelfoto/sluggable)
[![Latest Unstable Version](https://poser.pugx.org/atelfoto/sluggable/v/unstable)](//packagist.org/packages/atelfoto/sluggable)
![Packagist PHP Version Support (specify version)](https://img.shields.io/packagist/php-v/cakephp/cakephp/3.9.1?color=green&logo=cakephp)
![GitHub repo size](https://img.shields.io/github/repo-size/atelfoto/sluggable?color=red&logo=cakephp)




## Installation

You can install this plugin into your CakePHP application using [composer](https://getcomposer.org).

The recommended way to install composer packages is:

```
composer require atelfoto/sluggable
```
 1. And in a Table in initialize add this line

 ```php
 //src/Model/Table/model.php
 $this->addBehavior('Admin.Sluggable');
 ```


