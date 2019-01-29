# laravel_kly
First project with laravel framework
-Project CRUD Form 

# cara install framework laravel
1.install composer, yang jadi penyambung untuk install laravel 
2.karena pakai xampp, maka rubah file di folder apache -> httpd-vhost.conf
VirtualHost for LARAVEL.DEV
<VirtualHost laravel.dev:80>
  DocumentRoot "C:\xampp\htdocs\laravel\public"
  ServerAdmin laravel.dev
  <Directory "C:\xampp\htdocs\laravel">
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
  </Directory>
</VirtualHost>

lalu rubah file hosts  
127.0.0.1	laravel.dev

3.buka cmd cd(change directory) to xampp\htdocs
4.composer create-project laravel/laravel nama project "5.1.*"


Controller : app/Http/Controllers/
Routing : app/Http/routes.php
View : resources/views/
Menyimpan file/foto secara lokal : storage/app/
Menyimpan file/foto untuk dipanggil secara public : public/images/
