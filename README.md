# Système de Notation Universitaire

Application de traitement automatisé des copies d'examen et de calcul des pénalités de retard.

Pourquoi le dossier /vendor ne doit-il pas être versionné ?
Le dossier /vendor contient des outils téléchargés qui sont très lourds et qui n'ont pas été écrits par vous. Au lieu de les envoyer sur Git, on les laisse de côté pour alléger le projet, car chaque développeur peut les retélécharger facilement en un instant


Quelle différence existe entre un commit et un tag ?
Un commit, c'est comme une sauvegarde que vous faites régulièrement pendant que vous travaillez pour ne pas perdre votre avancée. Un tag, c'est comme une étiquette "Version Finale" que l'on colle sur une sauvegarde précise pour dire : « Ce travail-là est totalement terminé et prêt à être noté ou utilisé ».



Pourquoi la branche main doit-elle rester stable ?
La branche main est la vitrine officielle et la référence de l'application en production. Si elle contient des bugs ou du code cassé, cela bloque le travail de toute l'équipe, empêche le déploiement et complique l'intégration de nouvelles fonctionnalités.



Pourquoi placer index.php dans un dossier public ?
Placer le fichier index.php dans un dossier public est une excellente pratique de sécurité et d'architecture appelée le modèle du contrôleur unique .Placer index.php dans un dossier public sert avant tout à sécuriser votre application

Pourquoi toutes les requêtes devraient-elles passer par ce fichier ?
Faire passer toutes les requêtes par index.php permet de centraliser le contrôle de votre application. C'est le principe du contrôleur unique (Front Controller).

Quels éléments ne devraient jamais se trouver dans le dossier public ?
Pour garantir la sécurité de votre application, le dossier public ne doit contenir aucun code logique ou donnée sensible.


