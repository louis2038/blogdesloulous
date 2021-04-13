<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>site de louis</title>

<link href="css/style.php?rnd=132" rel="stylesheet" type="text/css" media="all"/>

</head>

<body>
	
<?php include('./menu.php');?>
	
<nav id="menu-blog">
	<ul class="menu-nav">
	<li><a href="#moi">Qui suis-je ?</a></li>
	<li><a href="#mon-serveur">Mon Serveur</a></li>
	<li><a href="#gros-projet">Gros Project</a></li>
	</ul>
</nav>
<div id="content_blog">
	
<h1 id="moi">Qui suis-je ?</h1>

<p>Louis Triouleyre-Roberjot, 17 ans. Je suis passionné par l'informatique et les sciences d'une manière générale. J'ai une envie naturelle d'innover et d’inventer.
J'ai des compétences confirmées en programmation, surtout en python et en java. Mais je connais et pratique également du C++, html, css, PHP, java EE, bash.
Je connais et j'utilise MySQL, arduino ou alors les API. J'ai aussi découvert un peu de Rust. Je suis très curieux, et je me pose beaucoup de questions sur le fonctionnement de ce qui m'entoure, et quand cela arrive, je me renseigne et j’apprends. Je connais également le fonctionnement du deep learning, tel que les réseaux de neurones ( simple ou à convolution ), fonction de transfert, descente de gradient, classification linéaire ou non linéaire et régression. J’ai également programmé de simples IA avec tensor flow (bibliothèque créée par google) en python.
J'ai donc des connaissances confirmées en sciences informatiques (transistor, porte logique, algèbre de boole, logique binaire, etc), mais aussi en réseaux (protocole http, https, tcp, routage bgp, Autonomous System, etc) et je fais également de l'électronique. Mais je ne suis expert en aucun domaine, et j'ai encore beaucoup à apprendre !
C'est pourquoi je cherche actuellement des personnes qui pourraient m'aider sur certains projets (voir ci-dessous).

</p>
	
<h1 id="mon-serveur">Mon Serveur ( en cours de développement )</h1>

<h2>Pourquoi ce site ?</h2>
	
<p>Ce site est hébergé chez moi, sur mon étagère. Effectivement, je ne loue aucun service d'hébergement et je n'ai même pas pour l'instant de nom de domaine !
Mais à quoi sert ce site? en plus il est moche et il n'a aucun style !
Malheureusement je ne suis pas designer, et je ne souhaite pas  passer du temps à faire du css, alors que je n'aime pas spécialement ça.
Ce que j'aime dans la programmation, c'est la logique, la complexité des systèmes, et les casses têtes des langages orientés objets. Le css et html n’a aucun intérêt pour moi !
	</p>
<img id="img-raspberry" src="img/raspberry.jpg" width="3386" height="2080" alt=""/>
 
<h2>Un jeu particulier en dévloppement</h2>	

<h4>But : </h4>
<p>Mon projet est de développer un “jeu”, si on peut appeler cela un jeu...je m'explique !
Le but du jeu est de coloniser une planète ( nommée Atlantor ), sauf que l’on ne peut pas envoyer d'humains, car cela serait trop coûteux et trop dangereux. Sur cette planète il y a de rares ressources très chères, car elle possède une immense quantité d'énergie.
Sauf que tout le monde veut cette ressource, et sur cette planète il n'y a pas de règles ! c'est donc la guerre.
Le monde est un monde en 2d, c'est un quadrillage de case.
</p>
	
<h4>réalisme : </h4>
<p>Le problème avec ce jeu, c'est qu'il essaye d'être réaliste, et donc il y a des contraintes !
Comme par exemple un temps de latence, entre l'information que vous envoyez et l'exécution de l'information ( car il y a une longue distance entre la terre et la planète).
Ou par exemple le fait que l’on ne peut pas savoir ce qui ce passe sur la planète, il faut pour cela faire de l'exploration avec par exemple des drones d'exploration,
et envoyer les informations sur terre, toujours avec un temps de latence...Bref autant de contraintes que de fun !
Note très importante, le jeu ce joue en python ( pour être le plus accessible ), un jeu ou l’on doit coder ! Au bonheur des passionnés d'informatiques,
et à la découverte des débutants. Ce jeu s'adresse à un public qui a envie de découvrir tout un univers, ou à des personnes qui ont envie de se surpasser, et d'innover !
</p>
	
<h4>déroulement : </h4>

<p>Dans un premier temps, vous atterrissez sur une case avec des coordonnées (x,y), une fois votre base installée, il va falloir explorer le terrain avec un drone,
1er étape : Construire le drone, 
2eme étape : Programmer le drone pour qu'il se déplace correctement, qu’il prenne les informations, les stocke, qu’il revienne à la base, et renvoie toutes les informations sur terre (avec toujours un temps de latence). Vous aurez compris qu'il va falloir automatiser les tâches et faire des algorithmes de plus en plus performants !
</p>
	
<h4>portée : </h4>
	
<p>Ce projet a une grande portée, car il y a plusieurs personnes sur la carte, ce qui signifie que l’on pourrait pirater les systèmes voisins pour leurs voler autant de ressource que l'on souhaite !
il faudra alors inventer, créer, innover de nouvelles façons de sécuriser et optimiser son écosystème !
</p>
	
	
<h1 id="gros-projet">Mes gros projets ! (par ordre chronologique)</h1>
	
	
	
	
<h3>Jeu des batonnets.</h3>	
	
<p>Explication du jeu : Deux entités s'affrontent, ici un algorithme et un joueur ! sur une table il y a 10 bâtonnets, chaque entité a le droit de prendre entre 1 et 3 bâtonnets.
L’entité qui pioche le dernier bâtonnet perd ! Il faut donc piocher le bon nombre de bâtonnets pour qu'il n'en reste qu'un seul, et donc que l'adversaire le pioche et perde la partie.
Ce jeu est un jeu résolue, et vous jouez donc contre un algorithme (très simple)
Ce jeu est un des premiers projets que j'ai fait.
</p>
	
<p><a href="https://github.com/louis2038/jeu-des-10-batonnet" target="_blank">lien vers le dépot git-hub</a></p>

	
<h3>Jeu d'esquive (python) </h3>
	
<p>Ce jeu nommé STAR-KIFF, m'a demandé énormément d'énergie et de temps, le concept est basique, le jeu en lui même est 'facile' à coder ( avec pygame ) , mais le plus dure a été la gestion de la base de donné mysql,
et aussi de synchroniser la quantité d'astéroïdes et la couleur du fond en fonction de la musique ! Le jeu est un peu addictif, et plaisant, malheureusement il n'y a que deux niveaux, cause : plus l'envie.
Si l'envie vous prend, allez l'essayer, il existe une version compilée avec un .exe !
</p>

<p><a href="https://github.com/louis2038/START-KIFF" target="_blank">lien vers le dépot git-hub</a></p>
	
<h3>Jeu de labyrinth avec générateur aléatoire !</h3>
	
<p>Puis, je me suis intéressé plus a l'algorithme a proprement parlé, je me suis beaucoup amusé avec les matrices, et elles sont nombreuses, complexes, et grandes !
L'algorithme génère un labyrinth purement aléatoire. Il y a un curseur qui se déplace de façon aléatoire sur la grille, et crée le labyrinth.
</p>
<p><a href="https://github.com/louis2038/labyrinthe-generateur" target="_blank">lien vers le dépot git-hub</a></p>
	
<h3>Logiciel de communication décentralisé ( en python ).</h3>
	
<p>développement : 
Ce logiciel m'a demandé énormément de temps d’apprentissage et de conception ! J’ai dû apprendre le fonctionnement d’internet même ( routage bgp, Autonomous System, protocole tcp, http et https, socket ). Sauf que je me suis heurté à un gros problème qui a rendu le logiciel totalement instable, ce problème est nommé python ! Effectivement, je suis aller a la limite de python, car c’est effectivement un langage orienté objet, mais malheureusement il manque énormément de concept primordiale pour créer un serveur multi-thread ( pouvant gérer plusieur connexion en même temps ). En java, on peut créer des interfaces, et ainsi pouvoir faire du polymorphisme, pour pouvoir créer des listes dynamiques, d'objets de classe. Ce qui n’est pas possible de faire en python, où en tout cas j’ai dû passer par des subterfuges farfelus, et ainsi mon logiciel est devenu vraiment très instable ! 
</p>
<p>Explication du logiciel : 
L’objectif du logiciel, est que n’importe qui puisse créer son serveur, où des utilisateurs puissent se connecter enfin de pouvoir communiquer ! Donc si il y a beaucoup de serveurs disponibles, cela crée un réseau décentralisé. Les avantages d’un réseau décentralisé, c’est que l’interception des messages est beaucoup plus complexe, et que chaque serveur peut alors créer sa propre politique d’utilisation. C’est le principe même d’internet, ce n’est pas qu’une seule entité qui gère le fonctionnement d’internet. Mais le logiciel est conçu pour être pratique ! C’est à dire qu’au début, vous avez deux ou trois serveurs de base, ou sont stockés les ip de pleins d'autres serveurs. N’importe qui peut inscrire son serveur sur les serveurs de base ! Et ainsi le rendre accessible à tout le monde. Il suffit alors à l'utilisateur de récupérer le serveur souhaité, et de pouvoir communiquer sur celui-ci. Ainsi nous pouvons communiquer avec une personne par plein de serveurs différents ! Et nous pouvons également créer des serveurs privés pour plus de sécurité.
</p>
<p><a href="https://github.com/louis2038/comm-python" target="_blank">lien vers le dépot git-hub</a></p>
	
<h3>Serveur java multi thread et modulaire !</h3>

<p>Explication du programme :
Ce projet est un serveur multi-thread ( pouvant accueillir plusieur connection en même temps ), et également modulaire, et adaptable à tout type de projet ayant besoin d’une communication serveur, client. Que se soit un jeu, un logiciel de communication, ou alors un serveur NAS ( c’est un serveur permettant de stocker des fichiers à distance ) , comme c’est le cas dans ce projet ! Il y a un système de token ( besoin de s'identifier pour accéder à certaines fonctionnalités ) avec pour chaque utilisateur des droits différents. Une fois le serveur actif, on peut alors parcourir tous les fichiers de celui-ci, ( seulement si nous avons les droits ) , télécharger les fichiers souhaités et les uploadés ! ( avec l’aide de mega cmd ). Le système est adaptable à tout type de plateforme, on peut même l’utiliser via un simple terminal tcp. Il a également une documentation pour connaître les commandes disponibles, ainsi que les  différents niveaux d’accès. Le développement de ce programme ne m'a pas demandé énormément de temps, vu que je l’avais déjà fait un python. Et le langage java a rendu le programme extrêmement stable,  je n’ai rencontré aucun problème particulier, et il n’y a pour l’instant aucun bug détecté !
</p>
<p><a href="https://github.com/louis2038/serveur-java" target="_blank">lien vers le dépot git-hub</a></p>

<h3>Calcule de probabilité avec la technique monte-carlos.</h3>
	
<p>Connaissez-vous le rummikub ? Ce jeu contient des pions, ou des plaques,  avec des nombres allant de 1 à 13, et de 4 couleurs différentes.  Le but du jeu est de poser toutes ses plaques. Pour commencer à jouer il faut totaliser un total de 30 points sur son chevalet. Pour marquer des points il faut soit : 
avec une suite d’au minimum 3 chiffres de la même couleur, par exemple : 4 orange, 5 orange et 6 orange forment 4+5+6 points donc 15 points !
ou avoir 3 ou 4 fois le même chiffres mais de couleurs différentes, par exemple j’ai un 4 orange, 4 bleu et 4 noir. J'obtiens donc 4+4+4 points soit 12 points. 
Pour commencer à jouer, il faut avoir au minimum 30 points sur son chevalet, sinon on pioche et on passe son tour !
Et je me suis posé la question suivante : quelle est la probabilité de pouvoir jouer dès le premier tour ? C'est-à-dire, quelle est la probabilité d’avoir 30 points si nous piochons 14 plaques ? 
On considère que nous jouons à quatre joueurs. Au début, j’ai essayé d'appliquer la méthode traditionnelle, et de raisonner avec ce qu’on m'a appris au lycée, c'est-à-dire le dénombrement. Mais le dénombrement a des limites, quand on fait face à un problème d’une telle complexité, il est vraiment très compliqué de raisonner comme ça ! J’ai donc opté pour une autre solution, plus radicale ! Celle de simuler des milliers de partie de rummikub, et de compter le nombre de fois ou j’ai pu jouer le premier tour. C’est ce que j’ai fait, et j’ai alors observé grâce à un graphique de la probabilité calculée en fonction de l’effectif de test ( nombre de parties simulées ). Une convergence de celle-ci en un point, ce point étant une valeur approchée au millième près de la probabilité. J’ai trouvé un résultat de 33% !
</p>
<p><a href="https://github.com/louis2038/rummikub" target="_blank">lien vers le dépot git-hub</a></p>

<p>en construction...</p>	
	

	
	

</div>

</body>
</html>