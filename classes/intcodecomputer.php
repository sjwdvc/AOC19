<?php

class IntcodeComputer{
    private $step;

    public function __Construct($step){
        $this->step = $step;
    }

    public function interpretProgramme($array){
        $pointer = 0;
        while($pointer < count($array)){
            switch($array[$pointer]){
                case 1:
                    $array[$array[$pointer+3]] = $array[$array[$pointer+1]] +  $array[$array[$pointer + 2]];
                    $pointer += $this->step;
                    break;
                case 2:
                    $array[$array[$pointer+3]] = $array[$array[$pointer+1]] *  $array[$array[$pointer + 2]];
                    $pointer += $this->step;
                    break;
                case 99:
                    $pointer = count($array) +1;
                    $pointer += 1;
                    break;
                default:
                    return 'Something went wrong when interpreting the programme';
            }
        }
        return $array;
    }

    /**
     * @return int
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * @param int $step
     */
    public function setStep($step)
    {
        $this->step = $step;
    }

}