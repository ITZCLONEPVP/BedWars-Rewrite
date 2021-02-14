<?php

namespace BedWars;

use pocketmine\plugin\PluginBase;

use BedWars\provider\JSONProvider;
use BedWars\provider\MySQLProvider;

class BedWars extends PluginBase{

	private $provider;

	public function onEnable() : void{
		$this->getLogger()->info("BedWars by boi1485");
		$this->saveResource("config.yml");
		if(($provider = $this->getConfig()->get("data-provider")) == "mysql"){
			$this->provider = new MySQLProvider($this->getConfig());
			$this->getLogger()->info("Provider: MySQL");
		}else if($provider == "json"){
			$this->provider = new JSONProvider($this->getDataFolder());
			$this->getLogger()->info("Provider: JSON");
		}

		if($this->provider == null){
			$this->getLogger()->error("Invalid data provider! Check your config");
			return;
		}

		$this->provider->init();

		$this->getLogger()->info("Arenas loaded: " . count($this->provider->fetchArenas()));
	}
}