<?php
namespace MinecraftLotto;

use pocketmine\player;
use pocketmine\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use onebone\economyapi\EconomyAPI;
use pocketmine\utils\Config;



class NewPlugin extends listner{

public function onEnable(){
   $this->getServer()->getPluginManager()->registerEvents($this,$this);
			$this->api = EconomyAPI::getInstance();
}
{
   $player = $event->getEntity();
			$name = strtolower($player->getName());
}
if($player = $event->/lotto){
   $this->api->reduceMoney($player, 100);
   $plammount() = array($coal, $iron, $gold, $diamond);
give $player{
   $coal rand(0,9);
  $iron rand(0,9);
  $gold rand(0,9);
  $diamond rand(0,9);
  
}
$lotto = array($coal, $iron, $gold, $diamond){
 do {
  $coal rand(0,9);
  $iron rand(0,9);
  $gold rand(0,9);
  $diamond rand(0,9);
 }
}

if($lotto = $plammount){
   echo "You've won the lotto!";
   $this->api->setMoney($player, rand(10, 20, 50, 100, 200));
}
else{
   echo "Sorry you lost play again?"
}
else{
   
}






