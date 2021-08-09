<?php

namespace App\libs\SchoolBoard;

use App\libs\Student;
use App\libs\SchoolBoardType\SchoolBoardType;

class SchoolBoard
{
    private string $name;

    private SchoolBoardType $type;

    private array $grades;

    /**
     * Constructor for the SchoolBoard class
     * @param $name string
     * @param SchoolBoardType $type
     * @param $grades array
     */

    public function __construct(string $name, SchoolBoardType $type, array $grades = [])
    {
        $this->name = $name;
        $this->type = $type;
        $this->grades = $grades;
    }

    /**
     * Function that determines final result for the Student
     * 
     * @param $average float
     * @param $grades array
     *  
     */ 
    public function pass($average,$grades)
    {
        if ($type = "CSBM") {
            if ($average >= 7) {
                return json_encode(true);
            }
            return json_encode(false); 
        } else {
            $arrayWithoutSmallestGrade = $this->remove_element($grades, min($grades));
            $newGradesArray = array_filter($arrayWithoutSmallestGrade, function($value){
                    return $value > 8;
                });
            $moreThanTwoGrades = count($newGradesArray) >= 2 ? true : false;

            if($moreThanTwoGrades === true && (max($arrayWithoutSmallestGrade) > 8)) {
                return true;
            } return false;
        };

    }

    /**
     * Function that gets type
     *  
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Function that gets name
     *  
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Function that removes element from the array
     * 
     * @param $array array
     * @param $value
     *  
     */ 
    public function remove_element($array, $value)
    {
        if(($key = array_search($value,$array)) !== false) {
              unset($array[$key]);
         }    
    }
}