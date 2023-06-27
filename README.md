# command-attack

Qu’est ce qu’une injection de commande ?
Une injection de commande est une faille pouvant toucher toutes les applications ayant accès à un système.

Dans une application web, une injection de commande se produit lorsqu’un serveur utilise une entrée utilisateur pour exécuter une commande sur son système d’exploitation sans la filtrer.

Le système va alors utiliser cette commande dans un shell puis renvoyer sa sortie vers le serveur et donc vers l’utilisateur.

[Cours] (https://www.hacksplaining.com/exercises/command-execution)

## Rappel
Le fait d'accéder ou de se maintenir, frauduleusement, dans tout ou partie d'un système de traitement automatisé de données est puni de deux ans d'emprisonnement et de 60 000 € d'amende.
Le but est de comprendre le principe de l'attaque afin de mettre en place la sécurité adequat.

## Context ping équipement Sportludique

L'entreprise SportLudique possède une application web interne permettant aux administrateurs de ping un équipement de l'entreprise depuis n'importe où dans l'entreprise.
Nouvel.le arrivant.e dans l'entreprise en tant que RSSI vous voulez faire quelques testes de sécurité que vous remonterez à votre supérieur.

## Chercher une faille

- Tester l'application, Entrer une adresse ip du réseau et valider
- Comment fonctionne le script php celon vous?
- Allez sur l'url /admin. Que constatez-vous?
- Une double authentification htaccess htpassw et formulaire d'authentification php est-elle justifié?
- Cette double authentification est-elle sufisante? (justifier)
- Executer dans l'outil la commande || echo 1
- Expliquer ce que fait la commande précèdente et en quoi cela est source de faille potentielle.
- Essayer maintenant de lister le contenu du repertoire admin que vous mettrez dans un fichier tmp.txt
- Lisez le fichier tmp.txt. Quelles infos récupérez vous?
- Accèder au fichier en question, si vous n'y arrivez pas que pouvez vous faire?
- Une fois le(s) fichier(s) appeler le professeur et expliquez votre démarche. 

## Correction
Sécuriser le site en mettant en place un correctif pérenne dans le temps.
