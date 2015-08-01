Laravel 5.1 Authentication Scaffold
===================================

Laravel 5.0 had this cool "opt-in" artisan command to generate files required
 to quickly scaffold a simple authentication system. Apart from the 
 auth, this also created a master layout page. This was a great time 
 saver for me.
  
 For unknown reasons, this feature did not make it to version 5.1.  So, I 
 reused (and slightly modified) the code that Taylor Otwell wrote for the 5.0 
 branch and created a package.

**I would ideally like to see this feature included in "Laravel Collective". **

Installation
-------------
Pull in the package via composer:

```
composer require mnshankar/auth-scaffold
```

Add the package service provider to your config/app.php file:

```php

/*
 * Application Service Providers...
 */

mnshankar\auth\AuthServiceProvider::class,

```

Usage
-----
The package exposes an artisan command called 'scaffold:auth'
```
php artisan scaffold:auth
```
Navigating to /home should bring up the auth page.

Usage Notes
-----------
It is *highly recommended* that you run this on a fresh Laravel install. It 
replaces and copies several (key) files (controllers,routes,views) 

Credits
-------

1. Laravel Framework, Taylor Otwell - Original Code
2. https://github.com/laravel/framework/tree/3db46b66ea66cae863514ea5c8f6f9d08dadab35/src/Illuminate/Foundation/Console