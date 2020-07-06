
## TACO test Setup

* run cmd : composer install

(php require version : >7.1)

## Description

packages that I use in this test

- pecee/simple-router : https://packagist.org/packages/pecee/simple-router
- Helper laravel

note :

Regarding the parameter {name} in the route, I now consider it as a slug so we can only use the name slug: lorem_ipsum, lorem-ipsum.
If you use spaces for {name} parameter, the error will show up with message is "not found the route"

I modified the db file with slug names format. Please check it out