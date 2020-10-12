# Plugin Sluggable  for CakePHP

[![Build Status](https://api.travis-ci.org/atelfoto/sluggable.png?branch=master)](https://travis-ci.org/atelfoto/sluggable)
[![License](https://poser.pugx.org/atelfoto/sluggable/license.svg)](//packagist.org/packages/atelfoto/sluggable)
[![Latest Stable Version](https://poser.pugx.org/atelfoto/sluggable/v/stable.svg)](//packagist.org/packages/atelfoto/sluggable)
[![Latest Unstable Version](https://poser.pugx.org/atelfoto/sluggable/v/unstable.svg)](//packagist.org/packages/atelfoto/sluggable)
![Packagist PHP Version Support (specify version)](https://img.shields.io/packagist/php-v/cakephp/cakephp/3.9.1?color=green&logo=cakephp)
![GitHub repo size](https://img.shields.io/github/repo-size/atelfoto/sluggable?color=red&logo=cakephp)
[![codecov](https://codecov.io/gh/atelfoto/sluggable/branch/master/graph/badge.svg)](https://codecov.io/gh/atelfoto/sluggable)
[![Code Qualité](https://scrutinizer-ci.com/g/atelfoto/sluggable/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/atelfoto/sluggable/?branch=master)
[![Coverage Status](https://coveralls.io/repos/github/atelfoto/sluggable/badge.svg?branch=master)](https://coveralls.io/github/atelfoto/sluggable?branch=master)


## Installation

You can install this plugin into your CakePHP application using [composer](https://getcomposer.org).

The recommended way to install composer packages is:

```
composer require atelfoto/sluggable
```
 1. And in a Table in ```initialize();``` add this line

 ```php
 //src/Model/Table/model.php
 $this->addBehavior('Sluggable.Sluggable');
 ```


