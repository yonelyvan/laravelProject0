# laravelProject0

#create table
php artisan make:migration create_messages_table --create messages
php artisan migrate

#editar tabla ¿ new index
php artisan make:migration add_created_at_index_to_messages_table --table messages
php artisan migrate

#modelo
php artisan make:model Message


#migrations
php artisan migrate:rollback
php artisan migrate:reset
php artisan migrate:refresh

#creando controlador
php artisan make:controller MessagesController

#creando archivo request para validacion (required, max, ..)
php artisan make:request CreateMessageRequest

#generacion de data
php artisan db:seed
php artisan migrate:refresh --seed

#usuarios
php artisan make:auth

#add_users_id_column_to_messages_table
php artisan make:migration add_users_id_column_to_messages_table --table messages



#notificaciones
php artisan notifications:table
php artisan migrate

php artisan make:model Notification
php artisan make:notification UserOnWarning

#real time 
npm install laravel-echo pusher-js --save-dev
composer require pusher/pusher-php-server


npm run watch



#pusher.com






php artisan tinker
>>> use App\User;

>>> $controller = app()->make('App\Http\Controllers\AppController');
>>> app()->call([$controller, 'debug_notification'], []);