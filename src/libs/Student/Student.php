<?php

namespace App\libs\Student;

use App\libs\SchoolBoardType;

class Student
{
    private int $id;
    private string $name;
    private array $grades;
    private float $average;
    private bool $result;
    private SchoolBoardType $schoolBoard;

    /**
     *  Constructor for the Student class 
     * @param $id int
     * @param $name string
     * @param $grades array
     * @param $average float
     * @param $bool boolean
     * @param SchoolBoardType $schoolBoard
     */ 
    public function __construct(int $id, string $name, array $grades = [], float $average, bool $result, SchoolBoardType $schoolBoard)
    {
        $this->id = $id;
        $this->name = $name;
        $this->grades = $grades;
        $this->average = $average;
        $this->result = $result;
        $this->schoolBoard = $schoolBoard; 
    }
}