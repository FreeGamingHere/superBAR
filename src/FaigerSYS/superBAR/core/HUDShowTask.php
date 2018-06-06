<?php

namespace FaigerSYS\superBAR\core;

use pocketmine\scheduler\PluginTask;

class HUDShowTask extends PluginTask
{

    private $HUD;
    private $plugin;

    /**
     * HUDShowTask constructor.
     * @param \pocketmine\plugin\Plugin $plugin
     * @param $HUD
     */
    public function __construct($plugin, $HUD)
    {
        $this->HUD = $HUD;
        $this->plugin = $plugin;
    }

    /**
     * @param int $tick
     */
    public function onRun(int $tick)
    {
        $this->HUD->processHUD($this->plugin->getServer());
    }

    /**
     * @return mixed
     */
    public function getHUD()
    {
        return $this->HUD;
    }

    /**
     * @param mixed $HUD
     */
    public function setHUD($HUD)
    {
        $this->HUD = $HUD;
    }

}
