<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 12/17/2018
 * Time: 8:36 AM
 */

namespace SimplifiedMagento\FirstModule\Model;


class Student
{
    private $name;
    private $age;
    private $scores;
    public function __construct($name = "Alex" , $age = 28,
                                array $scores= array('maths'=>92,'programming'=>90
        ))
    {
        $this->name = $name;
        $this->age = $age;
        $this->scores = $scores;

    }

}