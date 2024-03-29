<?php

// Language definitions used in admin_bans.php
$lang_admin_bans = array(

'No user message'			=>	'Aucun utilisateur avec ce nom d\'utilisateur enregistré. Si vous souhaitez ajouter une interdiction non liée à un nom d\'utilisateur spécifique, laissez simplement le nom d\'utilisateur vide.',
'No user ID message'		=>	'Aucun utilisateur enregistré avec cet identifiant.',
'User is admin message'		=>	'L\'utilisateur %s est un administrateur et ne peut pas être banni. Si vous souhaitez bannir un administrateur, vous devez d\'abord le rétrograder.',
'User is mod message'		=>	'L\'utilisateur %s est un modérateur et ne peut pas être banni. Si vous souhaitez bannir un modérateur, vous devez d\'abord le rétrograder',
'Must enter message'		=>	'Vous devez entrer soit un nom d\'utilisateur, une adresse IP ou une adresse e-mail (au moins).',
'Cannot ban guest message'	=>	'L\'utilisateur invité ne peut pas être banni.',
'Invalid IP message'		=>	'Vous avez saisi une adresse IP/IP invalide.',
'Invalid e-mail message'	=>	'L\'adresse e-mail (par exemple, utilisateur@domaine.com) ou le domaine d\'adresse e-mail partielle (par exemple, domaine.com) que vous avez saisi n\'est pas valide.',
'Duplicate domain message'	=>	'Le domaine %s a déjà été banni.',
'Duplicate e-mail message'	=>	'L\'adresse e-mail %s a déjà été bannie.',
'Invalid date message'		=>	'Vous avez saisi une date d\'expiration invalide.',
'Invalid date reasons'		=>	'Le format doit être AAAA-MM-JJ et la date doit être au moins un jour dans le futur.',
'Ban added redirect'		=>	'Interdiction ajoutée. Redirection …' ,
'Ban edited redirect'		=>	'Interdiction éditée. Redirection …',
'Ban removed redirect'		=>	'Interdiction levée. Redirection …',

'New ban head'				=>	'Nouvelle interdiction',
'Add ban subhead'			=>	'Ajouter une interdiction',
'Username label'			=>	'Nom d\'utilisateur',
'Username help'				=>	'Le nom d\'utilisateur à bannir (insensible à la casse).',
'Username advanced help'	=>	'Le nom d\'utilisateur à bannir (insensible à la casse). La page suivante vous permettra d\'entrer une adresse IP et un e-mail personnalisés. Si vous souhaitez simplement interdire une adresse IP/IP ou un e-mail spécifique, laissez-le vide.',

'Ban search head'			=>	'Rechercher',
'Ban search subhead'		=>	'Entrez les critères de recherche',
'Ban search info'			=>	'Rechercher des interdictions dans la base de données. Vous pouvez entrer un ou plusieurs termes à rechercher. Les caractères génériques sous forme d\'astérisques (*) sont acceptés. Pour afficher toutes les interdictions, laissez tous les champs vides.',
'Date help'					=>	'(aaaa-mm-jj)',
'Message label'				=>	'Message',
'Expire after label'		=>	'Expire après',
'Expire before label'		=>	'Expire avant',
'Order by label'			=>	'Commandé par',
'Order by username'			=>	'Nom d\'utilisateur',
'Order by ip'				=>	'IP',
'Order by e-mail'			=>	'E-mail',
'Order by expire'			=>	'Date d\'expiration',
'Ascending'					=>	'Ascendant',
'Descending'				=>	'Descendant',
'Submit search'				=>	'Soumettre la recherche',

'E-mail label'				=>	'E-mail',
'E-mail help'				=>	'L\'e-mail ou le domaine de messagerie que vous souhaitez interdire (par exemple, quelqu\'un@quelquepart.com, quelque part.com, .com ou com). Voir "Autoriser les adresses e-mail interdites" dans Autorisations pour plus d\'informations.',
'IP label'					=>	'Adresse IP/plages IP',
'IP help'					=>	'L\'adresse IP ou les plages IP que vous souhaitez interdire (par exemple 150.11.110.1 ou 150.11.110). Adresses séparées par des espaces. Si une adresse IP est déjà saisie, il s\'agit de la dernière adresse IP connue de cet utilisateur dans la base de données.',
'IP help link'				=>	'Cliquez sur %s pour voir les statistiques IP de cet utilisateur.',
'Ban advanced head'			=>	'Interdire les paramètres avancés',
'Ban advanced subhead'		=>	'Compléter l\'interdiction avec IP et e-mail',
'Ban message label'			=>	'Message d\'interdiction',
'Ban message help'			=>	'Un message qui sera affiché à l\'utilisateur banni lorsqu\'il visitera le forum.',
'Message expiry subhead'	=>	'Message d\'interdiction et expiration',
'Ban IP range info'			=>	'Vous devez être très prudent lorsque vous interdisez une plage d\'adresses IP en raison de la possibilité que plusieurs utilisateurs correspondent à la même adresse IP partielle.',
'Expire date label'			=>	'Date d\'expiration',
'Expire date help'			=>	'La date à laquelle cette interdiction doit être automatiquement levée (format : aaaa-mm-jj). Laissez vide pour supprimer manuellement.',

'Results head'				=>	'Résultats de recherche',
'Results username head'		=>	'Nom d\'utilisateur',
'Results e-mail head'		=>	'E-mail',
'Results IP address head'	=>	'Adresse IP/plages IP',
'Results expire head'		=>	'Expire',
'Results message head'		=>	'Message',
'Results banned by head'	=>	'Banni par',
'Results actions head'		=>	'Actions',
'No match'					=>	'Aucune concordance',
'Unknown'					=>	'Inconnue',

);
