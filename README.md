# cooking
Etapes pour installer le site wordpress en local

1. Pour commencer, vous allez devoir récupéré les fichiers sources wordpress du site. Pour cela, rendez vous sur ce lien : https://github.com/pierremrcr/cooking Cliquez sur le
bouton code puis download zip. Décompressez le dossier et renommez le "cooking".
2. Ensuite, téléchargez XAMPP à l'adresse suivante : https://www.apachefriends.org/fr/index.html XAMPP est un outil permettant de simuler un site en ligne mais sur une machine locale grâce à un certains nombre d'outils (un serveur web de type Apache, un 
système de gestion de bases de données MySQL ainsi qu'un environnement PHP). Une fois l'installation terminée, lancez XAMPP le logiciel va se lancer et un panneau de controle va s'afficher. 
3. Après avoir démarré XAMPP, lancez Apache et MySQL en cliquant sur les boutons start.
4. Lancez phpMyadmin en cliquant sur le bouton Admin au niveau de MySQL afin d'administrer la base de données du site. Vous allez être redirigé sur l'interface phpMyAdmin.
5. Cliquez sur nouvelle base de données et nommez la db_cooking par exemple. Notre base de données est maintenant prête ! 
6. Dans le dossier C:\xampp\htdocs (ou le répertoire dans lequel se trouve xampp), déposez y le dossier cooking récupéré depuis Github.
7. Ouvrez ensuite le navigateur de votre choix et saisissez l'url suivante : localhost/cooking/ 
Vous être redirigé sur l'interface d'administration de Wordpress. Choisissez la langue puis remplissez les informations suivantes : titre du site, identifiant, mot de passe etc... 
Encore une fois, afin de rester
cohérent, je vous conseille de nommer votre site "Cooking". Comme identifiant vous pouvez choisir admin. Cliquez sur Installer Wordpress puis sur Se connecter.
8. Vous voilà enfin sur le tableau de bord de Wordpress ! Il va falloir maintenant restaurer les données de notre site.  
Nous allons importer le script XML présent dans le dossier base de données.zip afin de restaurer les données de notre site. 
Dans le dossier cooking, décompressez le .zip nommé Base de données.zip. Un fichier cooking.xml se trouve dedans, c'est ce fichier que nous allons utiliser. 
Dans le menu latéral de Wordpress, allez dans Outils puis sur Importer. Tout en bas, sélectionnez "Lancer l'outil d'importation". Sélectionnez le fichier cooking.xml et faites "Téléverser et importer le fichier".

 
