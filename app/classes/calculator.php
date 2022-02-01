<?php


namespace App\classes;
use App\classes\user;


//class calculator extends user
class calculator
{
    public $firstNumber;
    protected $secondNumber;
    private $operator;
    public $result;
    //public $user;

    public function __construct($data)
    {
        //echo is_array($data) ? 'data is array': 'data is variable';

        $this->firstNumber =$data['first_number'];
        $this->secondNumber =$data['second_number'];
        $this->operator     =$data['operator'];
    }


    public function index()
    {
        switch ($this->operator)
        {
            case '+':
                $this->result =$this->add();
                break;
            case '-':
                $this->result =$this->sub();
                break;
            case '*':
                $this->result =$this->multiplication();
                break;
        }
        return $this->result;
    }

    protected function add()
    {
        return $this->firstNumber + $this->secondNumber;
    }

    protected function sub()
    {
        return $this->firstNumber - $this->secondNumber;
    }

    protected function multiplication()
    {
        return $this->firstNumber * $this->secondNumber;
    }



    private function two()
    {
        echo 'in three';
    }

}