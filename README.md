Buen día, soy Montse y ésta es mi prueba para TireClick.
Para correr mi proyecto solamente tienen que clonarlo con las siguientes especifícaciones:
- Versión de php: Yo utilicé la versión 8.1.22
- Escribir el comando "composer install" en la consola una vez clonado el proyecto
- Crear un archivo .env que hará conexión con la base de datos en MySQL. Mi archivo .env lo escribiré a continuación (lo que podría hacer que no funcione sería el DB_PORT, lo más común es 3306)

    APP_NAME=Laravel
    APP_ENV=local
    APP_KEY=base64:BcrurLhZJs9CKiOIFmsZmD8MqQVtf+qtVoyqXbzX2eo=
    APP_DEBUG=true
    APP_URL=http://localhost

    LOG_CHANNEL=stack
    LOG_DEPRECATIONS_CHANNEL=null
    LOG_LEVEL=debug

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3307
    DB_DATABASE=pruebaTireClick
    DB_USERNAME=root
    DB_PASSWORD=

    BROADCAST_DRIVER=log
    CACHE_DRIVER=file
    FILESYSTEM_DISK=local
    QUEUE_CONNECTION=sync
    SESSION_DRIVER=file
    SESSION_LIFETIME=120

    MEMCACHED_HOST=127.0.0.1

    REDIS_HOST=127.0.0.1
    REDIS_PASSWORD=null
    REDIS_PORT=6379

    MAIL_MAILER=smtp
    MAIL_HOST=mailpit
    MAIL_PORT=1025
    MAIL_USERNAME=null
    MAIL_PASSWORD=null
    MAIL_ENCRYPTION=null
    MAIL_FROM_ADDRESS="hello@example.com"
    MAIL_FROM_NAME="${APP_NAME}"

    AWS_ACCESS_KEY_ID=
    AWS_SECRET_ACCESS_KEY=
    AWS_DEFAULT_REGION=us-east-1
    AWS_BUCKET=
    AWS_USE_PATH_STYLE_ENDPOINT=false

    PUSHER_APP_ID=
    PUSHER_APP_KEY=
    PUSHER_APP_SECRET=
    PUSHER_HOST=
    PUSHER_PORT=443
    PUSHER_SCHEME=https
    PUSHER_APP_CLUSTER=mt1

    VITE_APP_NAME="${APP_NAME}"
    VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
    VITE_PUSHER_HOST="${PUSHER_HOST}"
    VITE_PUSHER_PORT="${PUSHER_PORT}"
    VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
    VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

- Una vez creado el archivo .env deben generar una key con el siguiente comando: php artisan key:generate
- Crear base de datos en MySQL, la mia se llama pruebaTireClick
- Correr las migraciones con: php artisan migrate:fresh
- Correr los seeders: php artisan db:seed
Adjuntaré la BD por si acaso. 

Si no se corren los seeders correctamente fallará el proyecto ya que se utilizan en la vista principal para mostrar productos. Adjuntaré un video de funcionamiento y cualquier duda éste es mi número 4444325572, espero les guste :D

NOTA: Toda la información es falsa creada con faker para generar muchos productos, de la misma forma las imágenes son solo adorno visual ya que no se guardan imágenes en la bd