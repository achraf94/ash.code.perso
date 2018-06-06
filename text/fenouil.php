<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<style>
    div{
        font-family: 'Lato', sans-serif;
        font-size: 13px;
        height: 100%;
    }
</style>
<div>

    La société DÉCO-PERSO vend, par correspondance, du matériel de bricolage et de décoration pour les particuliers.
<br><br>
    Cette société désire refondre son système de prise et suivi des commandes FENOUIL.<br>
    Un groupe de travail, composé d’experts du métier de DÉCO-PERSO, a rédigé le cahier des charges du nouveau système Fenouil.<br>
<br><br>
    CAHIER DES CHARGES DU NOUVEAU SYSTÈME FENOUIL<br>
<br><br>
    Via l’application FENOUIL :
    Le département « Prospection » crée des cibles de routage commerciales, permettant l’édition et l’envoi en masse d’informations publicitaires à un ensemble d’individus.<br>
    Les assistants de saisie enregistrent et/ou valident les commandes reçues par courrier postal ainsi que les commandes en ligne faites par les clients eux-mêmes.<br>
    Les gestionnaires administratifs traitent les anomalies, et envoient les courriers d’anomalies nécessaires.<br>
    Le responsable de données valide et le cas échéant met à jour le référentiel des individus.

    <h1> 1. Cibles de routage</h1>

    Une cible de routage est un regroupement d’individus pour lesquels la société désire envoyer une publicité. Une publicité permet à la société DÉCO-PERSO de proposer un ou plusieurs articles de bricolage ou de décoration. Le nombre d’articles d’une publicité est limité à cinq.<br>
<br>
    Les publicités sont de plusieurs sortes : catalogue papier envoyé par la poste, courriel envoyé par Internet, SMS, publicité par mots clés dans un moteur de recherche. L’application devra être conçue de telle sorte que toutes ces fonctionnalités puissent être réalisées au moindre coût.<br>
<br>
    La création d’une cible de routage se fait en deux étapes :<br>
     -1. Saisir des critères de sélection d’individus. Les critères proposés sont les suivants :<br>
<br>
    Catégorie socio-professionnelle,<br>
    Age,<br>
    Département de résidence,<br>
    Sélection d’individus déjà client ou non.<br>
<br>
    - 2. Créer la publicité : choisir catalogue papier ou canaux Internet, puis saisir un titre et une<br>
    description, et sélectionner les articles à inclure dans la publicité. Un catalogue papier peut<br>
    être imprimé sur différentes qualités de papier au choix : standard, supérieur ou économique.<br>
<br>
    Une cible de routage, une fois créée, doit être validée par le directeur de la stratégie. L’édition<br>
    et l’envoi de la publicité ne peuvent se faire qu’une fois la cible validée. C’est le responsable du<br>
    routage qui lance l’envoi des publicités pour les cibles validées.<br><br>

    L’envoi d’une publicité consiste à transmettre à un système d’édition un fichier (au format XML)<br>
    qui contient les informations de la cible. C’est le système d’édition qui gère la mise en forme et<br>
    l’envoi des publicités (sous forme papier et sous les différentes formes adaptées à internet) aux individus.<br>
<br>
    Le fichier XML transmis contient le support d’envoi de la publicité (papier ou message par<br>
    internet), la liste des individus et leurs caractéristiques, le titre et la description de la publicité,<br>
    et le nom et le prix des articles de la publicité.<br>
<br>
    Les cibles de routage qui ont fait l’objet d’un envoi sont détruites automatiquement par le<br>
    système dix jours après l’envoi de la publicité associée à la cible.<br>
<br>
    2. Saisie des commandes<br>
<br>
    La saisie et vérification des commandes consiste à :<br>
<br>
    Identifier l’individu qui a effectué la commande,<br>
    Saisir ou compléter les informations concernant la commande : quantité et référence des articles commandés,<br>
    Saisir les informations de règlement : type de règlement (chèque ou carte bancaire), montant, et en fonction du type de règlement :<br>
    Pour un règlement par chèque : numéro de chèque, nom de la banque émettrice du chèque,<br>
    Pour un règlement par carte bancaire : numéro et date d’expiration de la carte.<br>
<br>
    Remarque : si l’individu est inconnu, alors le système propose à l’utilisateur de créer ce nouvel
    individu et de saisir ses caractéristiques.
<br>
    Le système affecte à chaque commande un numéro unique.
<br>
    Lorsque le montant du règlement est différent du montant attendu, le système enregistre une
    anomalie « Erreur sur le montant ».
    Lorsque le chèque n’est pas signé, ou le numéro de carte bancaire invalide, le système génère une anomalie « Problème sur le moyen de paiement ».<br>
<br>
    Une commande est valide si elle ne possède pas d’anomalies. Lorsque cela est le cas, la commande est transmise au logiciel de gestion des stocks « DÉCO-PERSO-STOCK ».<br>
<br>
    Les commandes qui possèdent une ou plusieurs anomalies sont placées en attente.
    Lorsqu’une commande est valide, l’individu qui a effectué la commande devient client, s’il ne l’était pas déjà.
<br>
    3. Anomalies et courriers des anomalies
<br>
    Le système permet la recherche multi-critères d’anomalies, par individu, par numéro de
    commande, ou par date de génération de l’anomalie.
<br>
    Le gestionnaire administratif peut éditer un courrier concernant les anomalies enregistrées sur
    les commandes. Une anomalie ne peut faire l’objet que d’un seul courrier. Lorsque le gestionnaire administratif demande l’édition d’un courrier, le système teste s’il existe d’autres anomalies associées à la même commande, et propose le cas échéant d’éditer un courrier pour l’ensemble des anomalies de la commande. L’édition du courrier se fait par envoi au système d’édition d’un fichier contenant les informations à inclure dans le courrier d’anomalie.<br>

    Lorsqu’une anomalie est résolue, le gestionnaire administratif l’indique au système. Une<br>
    commande qui ne possède plus d’anomalie non résolue devient valide.<br>
<br>
    Si une anomalie n’est pas résolue 30 jours après sa génération par le système, alors l’individu à<br>
    l’origine de la commande devient « Client interdit ». Cet individu ne peut plus faire partie d’une<br>
    cible de routage commerciale, et ne peut plus effectuer de commande.<br>
<br>
    4. Administration du référentiel
<br>
    L’administrateur de données crée et met à jour les données suivantes :
    Articles,
    Individus.
<br>
    Un article est caractérisé par les données suivantes :
<br>
    numéro unique (et non modifiable),<br>
    Désignation,<br>
    prix de vente.<br>
<br>
    Un individu est caractérisé par les données suivantes :<br>
    Nom et prénom,<br>
    Date de naissance,<br>
    Catégorie socio-professionnelle,<br>
    Adresse :<br>
    3 lignes permettant la saisie du numéro, de la voie ou de la rue,<br>
    code postal,
    Ville,
<br>
    Numéro de téléphone,<br>
    Adresse mail (facultatif),<br>
    Caractéristique commerciale : prospect (individu n’ayant jamais effectué de commande valide chez DÉCO-PERSO), client, client interdit.<br>

<br><br>
    TRAVAUX À RÉALISER POUR LA MISE EN ROUTE DU NOUVEAU SYSTÈME FENOUIL

    L’objectif de cette étude est de faire l’analyse et la conception objet du système informatique FENOUIL décrit par le cahier des charges.<br>
    Pour ce faire, la première partie du travail consiste à définir le périmètre du système, puis
    reformuler et préciser les besoins auxquels doit répondre ce système. C’est l’objectif des
    travaux d’architecture fonctionnelle.
    Dans un deuxième temps, le travail consiste à réaliser l’analyse et la conception objet du
    système. Le résultat de ce travail, combiné à l’étude des exigences techniques, doit permettre de réaliser le développement du système Fenouil sous un langage orienté objet.<br>
<br>
    1. Architecture fonctionnelle
<br>
    Déterminer et décrire les acteurs et les cas d’utilisation du système.
    Décrire sous forme de diagramme de séquence de niveau système le cas d’utilisation « Saisir une commande ».
<br>
    2. Analyse objet
<br>
    A. Modèle statique
<br>
    Identifier les classes, les décrire, préciser leurs propriétés et leurs relations.
    Illustrer le diagramme de classes par un diagramme d’objets montrant une commande et ses
    relations à d’autres objets.
<br>
    B. Modèle dynamique
<br>
    Créer les diagrammes de séquence objet pour quelques cas d’utilisation les plus significatifs.
    Créer les diagrammes d’états nécessaires.
<br>
    C. Architecture
<br>
    Identifier les packages de classes, répartir les classes dans les packages en justifiant les
    dépendances entre packages.

<br>
    CONDUITE DE PROJETS
<br>
    Avant de commencer les “TRAVAUX À RÉALISER” vous devez :
<br>
    Prendre en mains Basecamp pour enregistrer tous les échanges dans votre équipe.
    Prendre en mains la plateforme de management de projet qui vous a été assigné et:
<br>
    Proposer la décomposition des tâches à réaliser
    Faire une estimation de la durée total du projet à l’aide de la méthode COCOMO ou de la méthode PONTS DE FONCTION
    Planifier votre projet à l’aide de l’outil assigné
    Montrer l’assignation des ressources aux différentes tâches
    Proposer les SPRINT
    Exécuter les TRAVAUX À RÉALISER POUR LA MISE EN ROUTE DU NOUVEAU SYSTÈME FENOUIL (cahier des charges UML)
    Rédiger les mémoire Architecture (UML) et Conduite de Projets (outil assigné)
    Faire une dissertation pour présenter vos résultats, vos indicateurs de suivi de projet et la démonstration du fonctionnement de l’outil qui vous a été assigné
<br>
<br>
    LIVRABLES<br>

    Livrable 1. Planification<br>
    Livrable 2. État d’avancement 1<br>
    Livrable 3. État d’avancement 2<br>
    Livrable 4. Pre-recette<br>
    Livrable 5. Mémoire UML, Mémoire Conduite de Projets<br>
    Livrable 6. Outil configuré avec quick guide<br>
    Livrable 7. Diapositives pour la soutenance<br>
    Livrable 8. Soutenance<br>

</div>