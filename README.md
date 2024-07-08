Installation de PHP : Assurez-vous que PHP est installé sur votre machine. Vous pouvez vérifier cela en utilisant la commande php -v.

Installation de Composer : Composer est un gestionnaire de dépendances pour PHP. Pour l'installer, exécutez la commande suivante dans votre terminal :
php -r "copy('<https://getcomposer.org/installer>', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
mv composer.phar /usr/local/bin/composer

1. **Configurer Doctrine :** Pour configurer Doctrine, ouvrez le fichier `.env` et définissez les informations de connexion à la base de données.
# .env
DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name"


Symfony fourni la commande pour créer la BDD paramétrée
- php bin/console doctrine:database:create`

Créer une entité : Utilisez la commande suivante pour créer une nouvelle entité.
- php bin/console make:entity

commandes utilisées 

- php bin/console doctrine:database:create`.
- php bin/console make:migration
- php bin/console doctrine:migrations:migrate
