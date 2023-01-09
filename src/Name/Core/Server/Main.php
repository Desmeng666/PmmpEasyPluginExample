<?php

namespace Name\Core\Server;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener {

	public function onLoad(): void {
		$this->getLogger()->info("Loading This Plugin");
	}

	public function onEnable(): void {
		$this->getLogger()->info("This Plugin Is Enable");
		$this->getLogger()->info("Bug Can Fix Me :DD");
		$this->getLogger()->info("Discord: Desmeng666#7361");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function onDisable(): void {
		$this->getLogger()->info("This Plugin Is Disable");
	}
}