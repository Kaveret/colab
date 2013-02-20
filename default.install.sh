#!/bin/bash

rm -rf www/
mkdir www
chmod 777 www

bash scripts/build

cd www

mkdir sites/default/files
chmod -R 777 sites/default/files

drush si -y kaveret --account-pass=admin --db-url=mysql://root@localhost/kaveret --db-su=root -v

drush mi --all --user=1
