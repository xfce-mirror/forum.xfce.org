<?php

// Language definitions used in admin_groups.php
$lang_admin_groups = array(

'Must enter title message'		=>	'Vous devez entrer un titre de groupe.',
'Title already exists message'	=>	'Il existe déjà un groupe avec le titre <strong>%s</strong>.',
'Default group redirect'		=>	'Ensemble de groupe par défaut. Redirection…',
'Cannot remove default message'	=>	'Le groupe par défaut ne peut pas être supprimé. Pour supprimer ce groupe, vous devez d\'abord configurer un autre groupe par défaut.',
'Group removed redirect'		=>	'Groupe supprimé. Redirection…',
'Group added redirect'			=>	'Groupe ajouté. Redirection…',
'Group edited redirect'			=>	'Groupe édité. Redirection…',

'Add groups head'				=>	'Ajouter/configurer des groupes',
'Add group subhead'				=>	'Ajouter un nouveau groupe',
'New group label'				=>	'Baser le nouveau groupe sur',
'New group help'				=>	'Sélectionnez un groupe d\'utilisateurs dont le nouveau groupe héritera de ses paramètres d\'autorisation. La page suivante vous permettra d\'affiner ses paramètres.',
'Default group subhead'			=>	'Définir le groupe par défaut',
'Default group label'			=>	'Groupe par défaut',
'Default group help'			=>	'Il s\'agit du groupe d\'utilisateurs par défaut, par ex. les utilisateurs du groupe sont placés lors de leur inscription. Pour des raisons de sécurité, les utilisateurs ne peuvent pas être placés dans les groupes d\'utilisateurs modérateur ou administrateur par défaut.',
'Existing groups head'			=>	'Groupes existants',
'Edit groups subhead'			=>	'Modifier/supprimer des groupes',
'Edit groups info'				=>	'Les groupes prédéfinis Invités, Administrateurs, Modérateurs et Membres ne peuvent pas être supprimés. Cependant, ils peuvent être modifiés. Veuillez noter que dans certains groupes, certaines options ne sont pas disponibles (par exemple, l\'autorisation de <em>modifier les messages</em> pour les invités). Les administrateurs ont toujours des autorisations complètes.',
'Edit link'						=>	'Modifier',
'Delete link'					=>	'Supprimer',
'Group delete head'				=>	'Suppression de groupe',
'Confirm delete subhead'		=>	'Confirmer la suppression du groupe',
'Confirm delete info'			=>	'Voulez-vous vraiment supprimer le groupe <strong>%s</strong> ?',
'Confirm delete warn'			=>	'AVERTISSEMENT! Après avoir supprimé un groupe, vous ne pouvez pas le restaurer.',
'Delete group head'				=>	'Supprimer le groupe',
'Move users subhead'			=>	'Déplacer les utilisateurs actuellement dans le groupe',
'Move users info'				=>	'Le groupe <strong>%s</strong> compte actuellement <strong>%s</strong> membres. Veuillez sélectionner un groupe auquel ces membres seront affectés lors de la suppression.',
'Move users label'				=>	'Déplacer les utilisateurs vers',
'Delete group'					=>	'Supprimer le groupe',

'Group settings head'			=>	'Paramètres de groupe',
'Group settings subhead'		=>	'Configurer les options et les autorisations du groupe',
'Group settings info'			=>	'Les options et autorisations ci-dessous sont les autorisations par défaut pour le groupe d\'utilisateurs. Ces options s\'appliquent si aucune autorisation spécifique au forum n\'est en vigueur.',
'Group title label'				=>	'Titre du groupe',
'User title label'				=>	'Titre de l\'utilisateur',
'User title help'				=>	'Les utilisateurs de rang dans ce groupe ont atteint. Laissez vide pour utiliser le titre par défaut ("%s").',
'Promote users label'			=>	'Promouvoir les utilisateurs',
'Promote users help'			=>	'Vous pouvez promouvoir automatiquement les utilisateurs dans un nouveau groupe s\'ils atteignent un certain nombre de publications. Sélectionnez "%s" pour désactiver. Pour des raisons de sécurité, vous n\'êtes pas autorisé à sélectionner un groupe d\'administrateurs ici. Notez également que les modifications de groupe pour les utilisateurs concernés par ce paramètre prendront effet <strong>immédiatement</strong>. Notez que le nombre de messages que vous entrez est le nombre total de messages d\'un utilisateur, et non le nombre de messages publiés en tant que membre de ce groupe.',
'Disable promotion'				=>	'Désactiver la promotion',
'Mod privileges label'			=>	'Autoriser les privilèges de modérateur des utilisateurs',
'Mod privileges help'			=>	'Pour qu\'un utilisateur de ce groupe ait les capacités de modérateur, il doit être affecté à la modération d\'un ou plusieurs forums. Cela se fait via la page d\'administration des utilisateurs du profil de l\'utilisateur.',
'Edit profile label'			=>	'Autoriser les modérateurs à modifier les profils des utilisateurs',
'Edit profile help'				=>	'Si les privilèges de modérateur sont activés, autorisez les utilisateurs de ce groupe à modifier les profils utilisateur.',
'Rename users label'			=>	'Autoriser les modérateurs à renommer les utilisateurs',
'Rename users help'				=>	'Si les privilèges de modérateur sont activés, autorisez les utilisateurs de ce groupe à renommer les utilisateurs.',
'Change passwords label'		=>	'Autoriser les modérateurs à modifier les mots de passe',
'Change passwords help'			=>	'Si les privilèges de modérateur sont activés, autorisez les utilisateurs de ce groupe à modifier les mots de passe des utilisateurs.',
'Mod promote users label'		=>	'Autoriser les modérateurs à promouvoir les utilisateurs',
'Mod promote users help'		=>	'Si les privilèges de modérateur sont activés, autorisez les utilisateurs de ce groupe à promouvoir des utilisateurs.',
'Ban users label'				=>	'Autoriser les modérateurs à bannir des utilisateurs',
'Ban users help'				=>	'Si les privilèges de modérateur sont activés, autorisez les utilisateurs de ce groupe à bannir des utilisateurs.',
'Read board label'				=>	'Lire le forum',
'Read board help'				=>	'Autoriser les utilisateurs de ce groupe à afficher le forum. Ce paramètre s\'applique à tous les aspects du forum et ne peut donc pas être remplacé par des paramètres spécifiques au forum. S\'il est défini sur "Non", les utilisateurs de ce groupe pourront uniquement se connecter/se déconnecter et s\'enregistrer.',
'View user info label'			=>	'Afficher les informations de l\'utilisateur',
'View user info help'			=>	'Autoriser les utilisateurs à afficher la liste des utilisateurs et les profils des utilisateurs.',
'Post replies label'			=>	'Poster des réponses',
'Post replies help'				=>	'Autoriser les utilisateurs de ce groupe à publier des réponses dans les sujets.',
'Post topics label'				=>	'Publier des sujets',
'Post topics help'				=>	'Autoriser les utilisateurs de ce groupe à publier de nouveaux sujets.',
'Edit posts label'				=>	'Modifier les messages',
'Edit posts help'				=>	'Autoriser les utilisateurs de ce groupe à modifier leurs propres publications.',
'Delete posts label'			=>	'Supprimer les messages',
'Delete posts help'				=>	'Autoriser les utilisateurs de ce groupe à supprimer leurs propres messages.',
'Delete topics label'			=>	'Supprimer des sujets',
'Delete topics help'			=>	'Autoriser les utilisateurs de ce groupe à supprimer leurs propres sujets (y compris les réponses).',
'Post links label'				=>	'Publier des liens',
'Post links help'				=>	'Autoriser les utilisateurs de ce groupe à inclure des liens dans leurs publications. Ce paramètre s\'applique également aux signatures et au champ du site Web dans les profils des utilisateurs.',
'Set own title label'			=>	'Définir son propre titre d\'utilisateur',
'Set own title help'			=>	'Autoriser les utilisateurs de ce groupe à définir leur propre titre d\'utilisateur.',
'User search label'				=>	'Utiliser la recherche',
'User search help'				=>	'Autoriser les utilisateurs de ce groupe à utiliser la fonction de recherche.',
'User list search label'		=>	'Rechercher dans la liste des utilisateurs',
'User list search help'			=>	'Autoriser les utilisateurs de ce groupe à rechercher en texte libre des utilisateurs dans la liste des utilisateurs.',
'Send e-mails label'			=>	'Envoyer des emails',
'Send e-mails help'				=>	'Autoriser les utilisateurs de ce groupe à envoyer des e-mails à d\'autres utilisateurs.',
'Post flood label'				=>	'Intervalle de flodd des messages',
'Post flood help'				=>	'Nombre de secondes que les utilisateurs de ce groupe doivent attendre entre les publications. Mettre à 0 pour désactiver.',
'Search flood label'			=>	'Rechercher l\'intervalle de flood',
'Search flood help'				=>	'Nombre de secondes que les utilisateurs de ce groupe doivent attendre entre les recherches. Mettre à 0 pour désactiver.',
'E-mail flood label'			=>	'Intervalle de flood d\'e-mails',
'E-mail flood help'				=>	'Nombre de secondes que les utilisateurs de ce groupe doivent attendre entre les e-mails. Mettre à 0 pour désactiver.',
'Report flood label'			=>	' l\'intervalle de flood Signalement',
'Report flood help'				=>	'Nombre de secondes que les utilisateurs de ce groupe doivent attendre entre les rapports. Mettre à 0 pour désactiver.',
'Moderator info'				=>	'Veuillez noter que pour qu\'un utilisateur de ce groupe ait les capacités de modérateur, il doit être affecté à la modération d\'un ou plusieurs forums. Cela se fait via la page d\'administration des utilisateurs du profil de l\'utilisateur.',

);
