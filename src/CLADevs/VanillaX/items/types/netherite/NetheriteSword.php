<?php

namespace CLADevs\VanillaX\items\types\netherite;

use pocketmine\item\Sword;
use pocketmine\item\ToolTier;
use pocketmine\item\ItemIdentifier;
use CLADevs\VanillaX\items\LegacyItemIds;

class NetheriteSword extends Sword
{

    public function __construct()
    {
        parent::__construct(new ItemIdentifier(LegacyItemIds::NETHERITE_SWORD, 0), "Netherite Sword", ToolTier::DIAMOND());
    }

    public function getAttackPoints(): int
    {
        return 9; //9 damage for Netherite Sword
    }

    public function getMaxDurability(): int
    {
        return 2032;
    }
}
