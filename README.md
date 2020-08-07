# Composer
  * `cd /var/www/html && composer update --with-dependencies && drush updatedb --yes`
  * composer update --with-dependencies
  * drush updatedb
  * `composer require 'drupal/devel_entity_updates:^3.0'` && `drush entity-updates `
  * `composer global require hirak/prestissimo`

# Drush
  * drush entity-updates

## services
```php
<?php
\Drupal::messenger()->addError("Hello world");
\Drupal::messenger()->addStatus("Hello world");
\Drupal::messenger()->addWarning("Hello world");

// Watchdog
\Drupal::logger('my_module')->notice($message);
\Drupal::logger('my_module')->error($message);
```

# Git
  * git config --global user.name "Anatoly Politsin"
  * git config --global user.email politsin@gmail.com
  * git config --global push.default simple
```
[user]
	email = politsin@gmail.com
	name = Anatoly Politsin
```

# Cab Snip
  * Modules
    - r4032login
    - email_registration
    - ultimate_cron
    - node_view_permissions
    - blank_node_title
    - mailsystem
    - s3fs
  * Drush
    - `drush generate module`
    - `drush generate content-entity`
    - `drush generate controller`, `drush generate permissions`, `drush generate form-config`

# Поискать файлы
```sh
grep -Hr pure-ftpd /etc/
grep ': ru' -P -R -I -l | xargs sed -i 's/: ru/: en/g'
grep 'project' -P -R -I -l | xargs sed -i 's/project/work/g'
grep 'Project' -P -R -I -l | xargs sed -i 's/Project/Work/g'
`find . -type f -mtime -4`  - позволит найти последние изменённые файлы за последние 4 дня в текущей папке.

```

# snipets
* https://www.drupal.org/node/2118743
* wget https://www.drupal.org/files/issues/core-8.3.0-twig_debug_not_display-suggestions-array-2118743-107.patch
* /var/www/html/core$ patch -p1 < core-8.3.0-twig_debug_not_display-suggestions-array-2118743-107.patch
* /var/www/html$ patch -p1 < twig_debug_output_does-2118743-93.patch.txt
* http://www.anexusit.com/blog/how-to-apply-patches-drupal-8-composer

```
<a href="/contact/myform"
   class="use-ajax"
   data-dialog-type="modal"
   data-dialog-options='{"width": 300}'>
  Hello world!
</a>
```
