<?php
#On déclare ou se trouve le fichier sans le src
namespace Feed;
#ici on dit ce que lon utilise parmis la librairie https://github.com/pmmp
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat as TX;
class Main extends PluginBase implements Listener{
	public static $logger = null;
	public static $instance = null;
    public $chatStaff = null;

	public function onLoad(){
		self::$logger = $this->getLogger();
		self::$logger->info("@PendoriaMCPE");
		self::$logger->info(TX::RED."Twitter: @Palente_Gaming");
		$this->getServer()->getCommandMap()->register("setgrade", new Setgrade("setgrade"));
 $this->getServer()->getCommandMap()->register("hub", new Hub("hub"));
 $this->getServer()->getCommandMap()->register("home", new Home("home"));
 $this->getServer()->getCommandMap()->register("sethome", new SetHome("sethome"));
		self::$instance = $this;
}
