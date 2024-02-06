# Softway Medical - Guide d'Installation

Ce guide vous aidera à installer et à exécuter l'application Softway Medical localement en utilisant Docker. Suivez ces étapes pour mettre en place votre environnement de développement.

## Prérequis

Avant de commencer, assurez-vous d'avoir les éléments suivants installés sur votre système:
- [Docker](https://docs.docker.com/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Installation

1. Clonez ce dépôt Git sur votre machine locale:

    ```shell
    git clone <lien du dépôt>
    ```

2. Accédez au répertoire de votre application:

    ```shell
    cd softway_medical
    ```

3. Utilisez Docker Compose pour créer et exécuter les conteneurs Docker:

    ```shell
    docker-compose up -d
    ```

   Cela démarrera les conteneurs PHP et MySQL définis dans le fichier `docker-compose.yml`.

4. Installez les dépendances PHP en exécutant Composer dans le conteneur PHP:

    ```shell
    docker-compose exec php composer install
    ```

**Installation de la Base de Données**

Pour installer la base de données, exécutez le script datas.sql situé dans le dossier `migrations` avec phpMyAdmin par exemple ou bien dans le terminal avec Docker.

    ```shell
    docker-compose exec database mysql -uroot -proot SoftwayDB
    ```

Puis une fois dans MySQL, copiez/collez le script datas.sql.

Assurez-vous que l'application est accessible à l'adresse [http://localhost:8000](http://localhost:8000) dans votre navigateur web.

## Utilisation

L'application Softway Medical devrait maintenant être opérationnelle. Vous pouvez accéder à la page d'accueil à l'adresse [http://localhost:8000](http://localhost:8000) dans votre navigateur.

## Arrêt

Pour arrêter les conteneurs Docker, exécutez la commande suivante dans le répertoire du projet:

```shell
docker-compose down
