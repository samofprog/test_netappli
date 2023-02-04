## Test technique NetAppli

Ce projet est un projet laravel avec un formulaire de contact pour le faire fonctionner rendez-vous dans le dossier
controller ensuite dans le fichier
ContactController.php et a la ligne 38 qui contient :
``Mail::to('ici')->send(new AdminContact($request->message, $request->subject, $request->name));``
remplacez ici par l'adresse à laquelle vous souhaitez recevoir le mail ; Modifiez egalement la valaur de la clé *DB_DATABASE* par le chemin absolue permetta r d'avoir accès a votre fichier de base de donnée sqlite 
```DB_DATABASE=/home/samofprog/Dev/trainning/laravel/net_appli/netappli_csv```
