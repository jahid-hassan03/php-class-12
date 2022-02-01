<?php


namespace App\classes;


class user
{
    public $city ='dhaka';
    protected $country ='bangladesh';
    private $area = 'kawranbazar';

    public function login()
    {
        echo 'in login';
    }

    protected function logout()
    {
        echo 'in logout';
    }

    private function profile()
    {
        echo 'in profile';
    }
}