1. https://symfony.com/doc/current/bundles/EasyAdminBundle/index.html
2. https://symfony.com/doc/current/bundles/EasyAdminBundle/book/edit-new-configuration.html
    easyadmin_autocomplete
3. custom AdminController of EasyAdmin
    update route: app/config/routing.yml
    AdminController extends BaseAdminController
    preUpdateCommandEntity($entity)
4. Examples of more complex many-to-many relations #846: 
   https://github.com/javiereguiluz/EasyAdminBundle/issues/1683
5. install VichUploaderBundle
    https://symfony.com/doc/current/bundles/EasyAdminBundle/integration/vichuploaderbundle.html
    https://github.com/dustin10/VichUploaderBundle/blob/master/Resources/doc/index.md
    https://github.com/dustin10/VichUploaderBundle/blob/master/Resources/doc/usage.md
6. install IvoryCKEditorBundle
    https://symfony.com/doc/current/bundles/EasyAdminBundle/integration/ivoryckeditorbundle.html
    php bin/console ckeditor:install
    php bin/console assets:install --symlink
7. list icon for web application
    https://www.w3schools.com/icons/fontawesome_icons_webapp.asp
    https://w3layouts.com/admin-templates/
    