<?php

/**
 * @author ChalkPE <amato0617@gmail.com>
 * @since 2015-04-26 17:37
 */
namespace ifteam\GoodSPAWN;

use pocketmine\scheduler\PluginTask;
use pocketmine\Player;
use pocketmine\level\Position;

class GoodSPAWNTask extends PluginTask {
	private $player;
	private $position;
	function __construct(GoodSPAWN $owner, Player $player, Position $position) {
		parent::__construct ( $owner );
		$this->player = $player;
		$this->position = $position;
	}
	public function onRun($currentTick) {
		/**
		 * @var $owner GoodSPAWN
		 */
		$owner = $this->getOwner ();
		$owner->delayRespawn ($this->player, $this->position);
	}
}