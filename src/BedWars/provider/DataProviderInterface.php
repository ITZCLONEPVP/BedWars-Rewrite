<?php

namespace BedWars\provider;

interface DataProviderInterface{

	function init();

	function fetchArenas();

	function fetchArena(int $id);

	function fetchPlayer(int $id);

	function writeArena();

	function writePlayer();

	function update();
}