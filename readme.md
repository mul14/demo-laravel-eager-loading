### Laravel Demo - Select fields and eager loading

Ini default-nya pake SQLite. Jangan lupa migrate.

    ./artisan migrate --seed

Idupin web server

    ./artisan serve

Buka http://localhost:8000

Lihat file `app/routes.php`

File yang diubah/tambah cuma:

    app/routes.php
    app/models/Post.php
    app/models/Comment.php
    app/database/migrations/*.php
    app/database/seeder/*.php
