<?php

//Namespace is the name of the directory this class is located in.
namespace PocketMineTacos;

//Use tells the server what Parts of PocketMine you are using. the "as *" is to shorten the pieces used in the php.
use pocketmine\plugin\PluginBase as P;
use pocketmine\event\Listener as L;
use pocketmine\event\player\PlayerItemConsumeEvent as Eat;
use pocketmine\utils\TextFormat as Color;
use pocketmine\item\Item as I;

//You need to extend PluginBase to get the plugin to work, Listener will Listen for events being executed.
class PocketmineTacos extends P implements L{ //After this, you tab. and when it ends, you stop using tab in that row.
  
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this,$this); //This is how you register $this, $this is used to execute events not done by the function.
    $this->getServer()->getLogger()->info(Color::RED."[Tacos] ".Color::GREEN."Tacos enabled!");
    //Remember in the "use" part when I shortened TextFormat? I used the shortened code in line 18 :)
  }
  
  public function onEat(Eat $e){
    $p = $e->getPlayer(); //How to get a player. Simple if you want to do things when the function is used.
    $item = $this->getItem();
    if($item == I::STEAK){
      $p->sendMessage("Ayyy me amigooo! You just ate a tacoooo!");
      //Sends the player a message when they eat the "taco" (Its actually steak)
    }
  }
}
