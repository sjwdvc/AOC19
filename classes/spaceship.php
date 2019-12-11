<?php

class Spaceship{
    private $name;
    private $modules = array();
    private $totalFuelNeeded;

    public function __Construct($name){
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getModules()
    {
        return $this->modules;
    }

    /**
     * @param mixed $modules
     */
    public function setModules($modules)
    {
        $this->modules = $modules;
    }

    public function addModule($module){
        array_push($this->modules, $module);
    }

    /**
     * @return mixed
     */
    public function getTotalFuelNeeded()
    {
        return $this->totalFuelNeeded;
    }

    /**
     * @param mixed $totalFuelNeeded
     */
    public function setTotalFuelNeeded($totalFuelNeeded)
    {
        $this->totalFuelNeeded = $totalFuelNeeded;
    }

    public function calculateTotalFuelNeeded(){
        $totalFuelNeeded = 0;
        foreach($this->modules as $module){
            $totalFuelNeeded += (int)$module->getFuelRequired();
        }
        $this->totalFuelNeeded = $totalFuelNeeded;
    }
}