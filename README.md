# command-attack

Qu’est qu’une injection de commande ?
Une injection de commande est une faille pouvant toucher toutes les applications ayant accès à un système.

Dans une application web, une injection de commande se produit lorsqu’un serveur utilise une entrée utilisateur pour exécuter une commande sur son système d’exploitation sans la filtrer.

Le système va alors utiliser cette commande dans un shell puis renvoyer sa sortie vers le serveur et donc vers l’utilisateur.

[Cours] (https://www.hacksplaining.com/exercises/command-execution)

# Context ping équipement Sportludique

L'entreprise SportLudique possède une application web interne permettant aux administrateurs de ping un équipement de l'entreprise depuis n'importe où dans l'entreprise.
Nouvel.le arrant.e dans l'entreprise en tant que RSSI vous voulez faire quelques testes de sécurité que vous remonterez à votre supérieur.

# Chercher une faille

- Entrer une adresse ip du réseau et valider
- Allez sur l'url /admin. Que constatez-vous?
- Ajouter une ip et lister le contenu du repertoir admin que vous mettrez dans un fichier tmp.txt
- lisez le fichier text. Quels infos récupérez vous?

# Correction
Sécuriser le site en mettant en place un correctif pérenne dans le temps.
