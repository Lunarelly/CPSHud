<?php

/**
 *  _                               _ _       
 * | |   _   _ _ __   __ _ _ __ ___| | |_   _ 
 * | |  | | | |  _ \ / _  |  __/ _ \ | | | | |
 * | |__| |_| | | | | (_| | | |  __/ | | |_| |
 * |_____\____|_| |_|\____|_|  \___|_|_|\__  |
 *                                      |___/ 
 *
 * Best use with Glowstone software!
 *
 * @author: Lunarelly
 * @link: https://github.com/Lunarelly
 *
 */

namespace Hud;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\scheduler\CallbackTask;

class Lunarelly extends PluginBase implements Listener {

    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getServer()->getScheduler()->scheduleRepeatingTask(new CallbackTask(array($this, "updateHud")), 20);
    }

    public function onHud($p) {
        foreach($this->getServer()->getOnlinePlayers() as $p) {
            $cps = $p->getCPS();
            $p->sendTip
        }
    }
}