# laravelProject0


php artisan make:migration create_messages_table --create messages
php artisan migrate

php artisan make:migration add_created_at_index_to_messages_table --table messages
php artisan migrate

php artisan make:model Message



php artisan migrate:rollback
php artisan migrate:reset
php artisan migrate:refresh


php artisan make:controller MessagesController
php artisan make:request CreateMessageRequest