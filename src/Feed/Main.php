<?php
#On déclare ou se trouve le fichier sans le src
namespace Feed;
#ici on dit ce que lon utilise parmis la librairie https://github.com/pmmp/PocketMine-MP
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
#ICI je dis que jutilise TextFormat qui sera entendu en TX;
use pocketmine\utils\TextFormat as TX;
use Feed\Commands\Feedcommand;
class Main extends PluginBase implements Listener{
	#public static je declare la fonction en static toi meme tu connais et je dis quelle vaux null
	public static $logger = null;

	#onLoad() est éxecuter au chargement du plugin
	public function onLoad(){
		#vu que $logger est static on l'appelle avec le self::$logger
		#$this->getLogger() fonction le getLogger() est a eu pres le logger
		#Je sais sa veux rien dire c a peu pres ce que tu veux mettre dans la console
		self::$logger = $this->getLogger();
		self::$logger->info("@PendoriaMCPE");
		#ICI on ecris une info dans la console la par exemple le twitter de pendoria
		self::$logger->info(TX::RED."Twitter: @Palente_Gaming");
		#Tiens le fameux TX TX::RED correspond a la couleur oui TextFormat permet de mettre de la couleur dans ces messages
		
		#On enregistre la commande sans le /
		#on appelle la class Feedcommand
		$this->getServer()->getCommandMap()->register("feed", new Feedcommand("feed"));
}
	#onEnable() s'execute quand le plugin à charger
	public function onEnable(){
		#le retour de logger et de TX
$this->getLogger()->info(TX::BLUE."v.1 Enabled");		
	}
	#onDisable() quand le plugin se desactive en géneral lorsque le serveur redémarre ou reload
	public function onDisable(){
		#le retour de logger et de TX
$this->getLogger()->info(TX::BLUE."v.1 Enabled");	
	}
#C fini pour le Main maintenant lis la class command
}
?>
