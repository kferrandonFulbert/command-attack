# command-attack

Qu’est ce qu’une injection de commande ?
Une injection de commande est une faille pouvant toucher toutes les applications ayant accès à un système.

Dans une application web, une injection de commande se produit lorsqu’un serveur utilise une entrée utilisateur pour exécuter une commande sur son système d’exploitation sans la filtrer.

Le système va alors utiliser cette commande dans un shell puis renvoyer sa sortie vers le serveur et donc vers l’utilisateur.

[Cours](https://www.hacksplaining.com/exercises/command-execution)

## Rappel
Le fait d'accéder ou de se maintenir, frauduleusement, dans tout ou partie d'un système de traitement automatisé de données est puni de deux ans d'emprisonnement et de 60 000 € d'amende.
Le but est de comprendre le principe de l'attaque afin de mettre en place la sécurité adequat.

## Context ping équipement Sportludique

L'entreprise SportLudique possède une application web interne permettant aux administrateurs de ping un équipement de l'entreprise depuis n'importe où dans l'entreprise.
Nouvel.le arrivant.e dans l'entreprise en tant que RSSI vous voulez faire quelques testes de sécurité que vous remonterez à votre supérieur.

## Chercher une faille

- Veuillez tester l'application en entrant une adresse IP du réseau, puis validez.
- Selon vous, comment fonctionne le script PHP ?
- Accédez à l'URL /admin. Que constatez-vous ?
- Est-ce justifié d'avoir une double authentification avec htaccess, htpasswd et un formulaire d'authentification en PHP ?
- Est-ce que cette double authentification est suffisante ? Veuillez justifier votre réponse.
- Exécutez la commande "|| echo 1" dans l'outil.
- Expliquez ce que fait la commande précédente et en quoi cela pourrait constituer une faille potentielle.
- Essayez maintenant de lister le contenu du répertoire "admin" et enregistrez-le dans un fichier nommé "tmp.txt".
- Lisez le contenu du fichier "tmp.txt". Quelles informations récupérez-vous ?
- Essayez d'accéder au fichier en question. Si vous n'y parvenez pas, que pouvez-vous faire ?
- Une fois que vous avez accédé au(s) fichier(s), appelez le professeur et expliquez votre démarche.

## Correction
Sécuriser le site en mettant en place un correctif pérenne dans le temps.
