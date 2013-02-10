#!/bin/bash

rm -rf www/

bash scripts/build

cd www

cp sites/default/default.settings.php sites/default/settings.php
mkdir sites/default/files

drush si -y cadaboo --account-pass=admin --db-url=mysql://root@localhost/cadaboo --db-su=root -v
drush mi --all --user=1

chmod -R 777 sites/default/files

