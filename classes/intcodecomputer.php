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

    public function interpretProgrammeWithExpectedResult($array, $expectedResult){
        $noun = 0;
        $verb = 0;
        for($i=0;$i<=99;$i++){
            for($j=0;$j<=99;$j++){
                $arrayCopy = $array;
                $arrayCopy[1] = $noun = $i;
                $arrayCopy[2] = $verb =$j;

                $pointer = 0;
                while($pointer < count($arrayCopy)){
                    switch($arrayCopy[$pointer]){
                        case 1:
                            $arrayCopy[$arrayCopy[$pointer+3]] = $arrayCopy[$arrayCopy[$pointer+1]] +  $arrayCopy[$arrayCopy[$pointer + 2]];
                            $pointer += $this->step;
                            break;
                        case 2:
                            $arrayCopy[$arrayCopy[$pointer+3]] = $arrayCopy[$arrayCopy[$pointer+1]] *  $arrayCopy[$arrayCopy[$pointer + 2]];
                            $pointer += $this->step;
                            break;
                        case 99:
                            $pointer = count($arrayCopy) +1;
                            $pointer += 1;
                            break;
                        default:
                            return 'Something went wrong when interpreting the programme';
                    }
                }
                if($arrayCopy[0] == $expectedResult){
                    return [$noun, $verb];
                }
            }
        }
        return null;
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