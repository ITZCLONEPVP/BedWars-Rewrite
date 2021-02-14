<?php

namespace BedWars\provider;

class JSONProvider implements DataProviderInterface{

	private $dataPath;
	public $arenas;
	public $players;

	public function __construct($dataPath){
		$this->dataPath = $dataPath;
	}

	public function init(){
        @mkdir($this->dataPath . "arenas");
        @mkdir($this->dataPath . "players");

        $this->arenas = $this->fetchArenas();
	}

	public function fetchArenas(){
		$a = array();
		foreach(glob($this->dataPath . "arenas/*.json") as $arenaFile){
			$fileContents = file_get_contents($arenaFile);
			$arena = json_decode($fileContents);
			if($arena['id'] == null || $arena['type'] == null)continue;
			$a[$arena['id']] = $arena;
		}
		return $a;
	}

	public function fetchArena(int $id){
       $arena = null;

	}

	public function fetchPlayer(int $id){

	}

	public function writeArena(){

	}

	public function writePlayer(){

	}

	public function update(){

	}
}