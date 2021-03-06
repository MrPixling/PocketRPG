<?php

namespace PocketRPG\RPG\neededstuff;

////////////////////
// Warrior weapon //
////////////////////

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\entity\Living;
use pocketmine\math\Vector3;
use pocketmine\level\Position;
use pocketmine\level\particle\CriticalParticle;
use pocketmine\Player;
use pocketmine\Server;
use PocketRPG\main;

class warriorsword extends PluginBase implements Listener {
    
    public function onFight(EntityDamageEvent $event) {  
      if($event instanceof EntityDamageByEntityEvent && $event->getDamager() instanceof Player) {
        $hit = $event->getEntity();
        $damager = $event->getDamager();
        $level = $this->config->get("RPG_LEVEL");
        if($damager->getLevel() == $configlevel) {
          if($damager->getItemInHand()->getId() == 267) {
            $x = $hit->x;
            $y = $hit->y;
            $z = $hit->z;
            $hitpos = $hit->getPosition(new Vector3($x, $y, $z));
            $level->addParticle(new CritialParticle($hitpos));
            $this->setKnockBack(2);
          }
        }
      }
  }
}
}
