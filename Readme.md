Pour pouvoir utiliser cette pplication il est necesaire de suivre les étapes dans l'ordre:

1.-Créer une base de données sous le nom todos
2.- Dans la BDD "todos" il faut créer une premiere table sous le nom "listes" avec les attributes: 
		"id" du type int(5) AUTO_INCREMENT Primary Key not_null
		"name" du type varchar(100) not_null
3.-Dans la BDD "todos" il faut créer une deuxieme table sous le nom "taches" avec les attributes:
		"id_tache" du type int(5) AUTO_INCREMENT Primary Key not_null
		"name" du type varchar(150) not_null
		"list_id" du type int(5) not_null FOREIGN_KEY liée vers l'attribut id de la table listes.
4.-Ouvrir le fichier database.php et selon la configuration de votre BDD modifier les variables $hostname, $user $password et $database.
5.-L'application doit s'executer toujours a partir du fichier index.php sinon l'application ne fonctionnera pas correctement.
6.-Se référer à la notice d'utilisation notice.docx avant d'utiliser l'application.