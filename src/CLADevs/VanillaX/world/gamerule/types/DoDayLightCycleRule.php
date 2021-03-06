<?php

namespace CLADevs\VanillaX\world\gamerule\types;

use pocketmine\world\World;
use CLADevs\VanillaX\world\gamerule\GameRule;

class DoDayLightCycleRule extends GameRule
{

    public function __construct()
    {
        parent::__construct(self::DO_DAY_LIGHT_CYCLE, true);
    }

    public function handleValue($value, World $world): void
    {
        if ($value) {
            $world->startTime();
        } else {
            $world->stopTime();
        }
    }
}
