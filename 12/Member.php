<?php

class Member
{

    private $name;
    private $age;
    private $address;
    
    /**
     * メンバーの名前、年齢、住所を受け、すぐに表示
     *
     * @param string $name
     * @param integer $age
     * @param string $address
     */
    public  function  __construct(string $name, int $age, string $address)
    {   
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        
        echo '<ul>';
        echo '<li>名前:' . $this->name . '</li>';
        echo '<li>年齢:' . $this->age . '</li>';
        echo '<li>住所:' . $this->address . '</li>';
        echo '</ul>';
    }
}
