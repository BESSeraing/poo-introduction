#Introduction à la POO

##Définition de classe :
La classe est la définition de ce que sera l'objet. Elle sert à décrire l'object qui en sera l'instance. Elle en possède les propriétés et méthodes.
##Définition d'objet :
L'object est la concrétisation de la classe. Il est le résultat de l'instanciation de la classe (quand on fait `new MaClasse()`). On peut créer une infinité d'objects à partir d'une classe, comme une usine peut produire une infinité de téléphones sur base d'un seul cahier des charges (par exemple). 
##Visibilité:
Les méthodes et propriétés de la classe peuvent avoir une visibilité définie. Il en existe trois, mais nous allons commencer avec deux.
* public : la méthode ou propriété est accessible de partout. Depuis l'intérieur de l'object comme depuis l'extérieur.
* private: la méthode ou propriété n'est accessible que depuis l'intérieur de l'object lui même (via le mot-clé $this).
##Encapsulation:
Le principe d'encapsulation est un principe selon lequel les propriétés de l'object sont privées, et uniquement accessibles via des méthodes publiques dédiées (getter/setter). Ce principe permet de valider directement la valeur qui est assignée à une propriété, et le cas échéant de `throw` une `Exception` (lire erreur) pou expliquer ce qui ne va pas. 
##Méthodes magiques
Il existe plusieurs méthodes magiques en POO ave PHP. Le principe d'une méthode magique est qu'elle s'execute automatiquement sans qu'on ait besoin de l'appeller explicitement.
Elles commencent toutes par `__`. La première que nous voyons est `__contruct()`. Cette méthode s'execute automatiquent lors de l'instanciation d'une classe.