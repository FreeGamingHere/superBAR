<?php

namespace FaigerSYS\superBAR;

use pocketmine\scheduler\Task as PluginTask;

class LoaderTask extends PluginTask
{

    private $loader;
    private $plugin;

    /**
     * LoaderTask constructor.
     * @param superBAR $plugin
     * @param Loader $loader
     */
    public function __construct(superBAR $plugin, Loader $loader)
    {
        $this->loader = $loader;
        $this->plugin = $plugin;
    }

    /**
     * @param int $tick
     */
    public function onRun(int $tick)
    {
        $this->loader->onEnable($this->plugin);
    }

}
