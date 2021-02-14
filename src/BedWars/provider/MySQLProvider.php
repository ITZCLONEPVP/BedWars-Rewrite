<?php

namespace BedWars\provider;

class MySQLProvider implements DataProviderInterface{

	private $config;

	public function __construct($config){
		$this->config = $config;
	}

	public function init(){

	}

	public function fetchArenas(){

	}

	public function fetchArena(int $id){

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