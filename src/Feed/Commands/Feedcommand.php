<?php
#c toujous du php
namespace Feed\Commands;
#Le namespace qui change
use pocketmine\command\Command;
#la class des command
use pocketmine\command\CommandSender;
#la classe de lenvoyeur de commande
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\utils\TextFormat as TX;
#pour les couleur vous pouvez aussi utiliser §
class Feedcommand extends Command {

	#private je declare la fonction en private tu connais et je dis qu'elle équivaut à [Feed]
	private $prefix = "[Feed] ";

#fonction construct
public function __construct(string $name){
		parent::__construct(
			$name,
			"Feeder un joueur",
			"/feed",
			[]
		);
    #ici on enregistre le nom de la commande la description et son usage
	}
  #la foncion quand vous faite la commande
  public function execute(CommandSender $sender, $command, array $args){
		$usages = "/feed";
    #on vérifie si le joueur est op?
		if(!$sender->isOp()){
    #il est non op alors on lui renvoie un message
    #$this->prefix vu que le $prefix est en private on l'ecris comme ceci
    return $sender->sendMessage(TX::RED.$this->prefix."Erreur: ".TX::RESET."Cette commande nécessite d'avoir les privilèges d'opérateur");
    #$sender est celui qui utilise la cmd
    #$sender->sendMessage(); on lui envoie un message
    #le return bah retourne?
    }
    #Ici on vérifie si l'utilisateur de la commande est un Joueur non pas une console
    if(!$sender instanceof Player){
    #c'est la console
    #on lui retourne un message
    return $sender->sendMessage(TX::RED.$this->prefix."Tu n'est pas un joueur tu n'as donc pas besoin de régénerer ta vie");
    }
    #on obtiens la nourriture maximale
    $maxfood = $sender->getMaxFood();
    #on lui met la nourriture maximale
    $sender->setFood($maxfood);
    $sender->sendMessage("Bonne appétit!");
    return true;
   }
   }
