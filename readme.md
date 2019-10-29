# imd8
webapps 

Developer Guide
-------

### Required Softwares

We need install Composer. https://getcomposer.org/.


### Installations
- clone repo https://github.com/bemp/imdb-clone.git
- run composer install
- set up .evn config
- php artisan key:generate
- php artisan migrate:fresh
- php artisan db:seed
- php artisan serve 


### Coding standard
* Use PSR-2 (http://www.php-fig.org/psr/psr-2/)
* If you are using sublime text editor (you can install this https://github.com/phpfmt/sublime-phpfmt and build your own macro)


### Unit Testing
To do unit testing, we can use phpunit.

```
vendor/bin/phpunit tests/
```

### A successful Git branching model
http://nvie.com/posts/a-successful-git-branching-model/
