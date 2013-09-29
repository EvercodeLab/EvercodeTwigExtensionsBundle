README
======

Installation
------------

Install using Composer:

```
./composer require evercodelab/twig-extensions-bundle
```

Add the bundle to your AppKernel.php:

``` php
$bundles = array(
    //...
    new Evercode\TwigExtensionsBundle\EvercodeTwigExtensionsBundle(),
);
```

Usage
-----

```
{{ date | strftime('%e %B') }}
```