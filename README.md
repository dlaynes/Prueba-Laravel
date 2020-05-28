##Prueba API Token

En el archivo .env llenar APP_URL y SECRET_API_TOKEN (Clave de autenticación del servicio web remoto) antes de ejecutar los siguientes comandos en la consola:

composer install
php artisan key:generate

También se deberán llenar las credenciales de acceso a la Base de datos correspondientes antes de ejecutar los siguientes comandos:

php artisan migrate
php artisan db:seed

Al final, en un servidor Linux es necesario ajustar de forma correcta los permisos de Laravel ( https://vijayasankarn.wordpress.com/2017/02/04/securely-setting-file-permissions-for-laravel-framework/ ) antes de optimizar el portal con el siguiente comando:

php artisan optimize
