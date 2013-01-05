; run drush make path/to/cforge.make $new_dest_dir
core = 7.x
api = 2

projects[drupal][version] = "7.17"
projects[drupal][type] = "core"

projects[cforge][type] = profile

projects[] = admin_menu
projects[] = advanced_help
projects[] = autocategorise
projects[] = backup_migrate
projects[] = captcha
projects[] = ckeditor
projects[] = community_tasks
projects[] = date
projects[] = field_convert
projects[] = mutual_credit
projects[] = mailsystem
projects[] = mimemail
projects[] = offers_wants
projects[] = uid_login
projects[] = uif
projects[] = usertabs
projects[] = views
projects[] = views_data_export

libraries[ckeditor][download][type] = "file"
libraries[ckeditor][download][url] = "http://download.cksource.com/CKEditor/CKEditor/CKEditor%203.6.2/ckeditor_3.6.2.zip"
