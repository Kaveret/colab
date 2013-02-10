#!/bin/bash

rm -rf www/

bash scripts/build

cd www

cp sites/default/default.settings.php sites/default/settings.php
mkdir sites/default/files

drush si -y kavertet --account-pass=admin --db-url=mysql://root@localhost/kavertet --db-su=root -v
drush en migrate_ui migrate_extras
drush mi --all --user=1

chmod -R 777 sites/default/files

