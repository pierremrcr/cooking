# cooking
Etapes pour installer le site wordpress en local

1. Pour commencer, vous allez devoir récupéré les fichiers sources wordpress du site. Pour cela, rendez vous sur ce lien : https://github.com/pierremrcr/cooking Cliquez sur le
bouton code puis download zip. Décompressez le dossier et renommez le "cooking".
2. Ensuite, téléchargez XAMPP à l'adresse suivante : https://www.apachefriends.org/fr/index.html 
XAMPP est un outil permettant de simuler un site en ligne mais sur une machine locale grâce à un certains nombre d'outils (un serveur web de type Apache, un 
système de gestion de bases de données MySQL ainsi qu'un environnement PHP). Une fois l'installation terminée, lancez XAMPP le logiciel va se lancer et un panneau de controle va s'afficher. 
3. Après avoir démarré XAMPP, lancez Apache et MySQL en cliquant sur les boutons start.
4. Lancez phpMyadmin en cliquant sur le bouton Admin au niveau de MySQL afin d'administrer la base de données du site. Vous allez être redirigé sur l'interface phpMyAdmin.
5. Cliquez sur nouvelle base de données et nommez la cooking en sélectionnant utf8_bin parmi la liste. Notre base de données est maintenant prête mais elle est vide. 
Nous allons donc la restaurer avec les données fournies dans le repository github. Revenez dans le dossier cooking et décompressez le dossier db.zip. 
Revenez sur phpMyadmin et cliquez sur l'onglet Importer. Choisissez le fichier db.sql et faites Executer.  
6. Dans le dossier C:\xampp\htdocs (ou le répertoire dans lequel se trouve xampp), déposez y le dossier cooking récupéré depuis Github.
7. Ouvrez ensuite le navigateur de votre choix et saisissez l'url suivante : localhost/cooking/ 
Vous être redirigé sur l'interface d'administration de Wordpress. Choisissez la langue puis remplissez les informations suivantes : 
titre du site : L'Atelier de Pitou
identifiant : admin
mot de passe : admin 
8. Cliquez sur Installer Wordpress puis sur Se connecter.
9. Vous voilà enfin sur le tableau de bord de Wordpress ! Il va falloir maintenant restaurer les données de notre site.  
Nous allons importer le script XML présent dans le dossier base de données.zip afin de restaurer les données de notre site. 
Dans le dossier db que vous avez décompressé à l'étape 5, un fichier script.xml se trouve dedans, c'est ce fichier que nous allons utiliser. 
Dans le menu latéral de Wordpress, allez dans Outils puis sur Importer. Tout en bas, sélectionnez "Lancer l'outil d'importation". Sélectionnez le fichier script.xml et faites 
"Téléverser et importer le fichier". 
Il se peut que les médias type images ne s'importent pas correctement. Pour remédier à cela, dans le menu matéral de Wordpress, allez dans Medias puis cliquez sur Ajouter. Sélectionner le dossier qui se trouve 
dans le chemin suivant : cooking\wp-content\themes\cooking\ressources afin d'importer les images.
10. Tout en haut du tableau de bord de Wordpress, cliquez sur L'Atelier de Pitou à droite du logo de Wordpress. Vous êtes redirigé sur le site et pourrez accéder ainsi aux dernières recettes ! 

 
