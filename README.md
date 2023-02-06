## Test technique NetAppli

Ce projet est un projet laravel avec un formulaire de contact pour le faire fonctionner rendez-vous dans le
fichier `.env` et attribuer une valeur à la clé `ADMIN_DEFAULT_EMAIL` qui se trouve être la dernière clé du fichier ,
ensuite configurer votre base de donnée `mysql`, en remplaçant les valeurs des clés `DB_HOST=127.0.0.1,
DB_PORT=3306,
DB_DATABASE=netappli_csv,
DB_USERNAME=root,
DB_PASSWORD=password` par les vôtres et pour finir, exécuter un coup de `php artisan migrate` et un coup
de `php artisan serve`
pour démarrer votre serveur.
