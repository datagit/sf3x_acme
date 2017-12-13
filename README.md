sf3_mycc
========

A Symfony project created on November 29, 2017, 11:47 pm.

1. $php bin/console generate:bundle
    Mcc\DataSourceBundle
    update composer.json
    $composer dump-autoload
    guide: https://symfony.com/doc/current/bundles/SensioGeneratorBundle/commands/generate_bundle.html
2. $php bin/console doctrine:generate:entity
    The Entity shortcut name: MccDataSourceBundle:Product
3. install $composer require doctrine/doctrine-migrations-bundle "^1.0"
    https://symfony.com/doc/master/bundles/DoctrineMigrationsBundle/index.html
4. install $composer require --dev doctrine/doctrine-fixtures-bundle
    https://symfony.com/doc/master/bundles/DoctrineFixturesBundle/index.html
    doctrine:fixtures:load
5. install $composer require davidbadura/faker-bundle
    https://github.com/DavidBadura/FakerBundle
        https://github.com/fzaninotto/Faker
            https://stackoverflow.com/questions/3191664/list-of-all-locales-and-their-short-codes
6. install $composer require friendsofsymfony/user-bundle "~2.0"
    https://symfony.com/doc/master/bundles/FOSUserBundle/index.html
7. install $php -dmemory_limit=1G /usr/local//bin/composer.phar require javiereguiluz/easyadmin-bundle
    https://symfony.com/doc/master/bundles/EasyAdminBundle/book/installation.html
    $composer clear-cache
    $php bin/console assets:install public --symlink
8. generate $php bin/console generate:bundle
        Mcc\BackendBundle
        update composer.json
        $composer dump-autoload
9. Update schema tables
        php bin/console doctrine:schema:update --force
10. $php bin/console generate:bundle
        Mcc\DemoBundle
        update composer.json
        $composer dump-autoload
11. install StofDoctrineExtensionsBundle
    $composer require stof/doctrine-extensions-bundle
    https://symfony.com/doc/master/bundles/StofDoctrineExtensionsBundle/index.html
    https://github.com/Atlantic18/DoctrineExtensions/tree/master/doc/
    https://github.com/Atlantic18/DoctrineExtensions/blob/master/doc/blameable.md
    https://github.com/Atlantic18/DoctrineExtensions/blob/master/doc/sluggable.md
    https://github.com/Atlantic18/DoctrineExtensions/blob/master/doc/symfony2.md
    php bin/console  doctrine:mapping:info
12. install $composer require --dev doctrine/doctrine-fixtures-bundle
    https://symfony.com/doc/master/bundles/DoctrineFixturesBundle/index.html
    https://stackoverflow.com/questions/47613979/symfony-3-4-0-could-not-find-any-fixture-services-to-load
13. install $php -dmemory_limit=1G /usr/local//bin/composer.phar require friendsofsymfony/rest-bundle
    http://symfony.com/doc/master/bundles/FOSRestBundle/index.html
14. install $php -dmemory_limit=1G /usr/local//bin/composer.phar require jms/serializer-bundle
    http://jmsyst.com/bundles/JMSSerializerBundle
15. install $php -dmemory_limit=1G /usr/local//bin/composer.phar require nelmio/api-doc-bundle
    https://symfony.com/doc/master/bundles/NelmioApiDocBundle/index.html
16. install $php -dmemory_limit=1G /usr/local//bin/composer.phar require eightpoints/guzzle-bundle
    http://knpbundles.com/8p/GuzzleBundle
17. install $php -dmemory_limit=1G /usr/local//bin/composer.phar require voryx/restgeneratorbundle dev-master
    https://github.com/voryx/restgeneratorbundle

