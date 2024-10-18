<?php

class Pet extends Animal
{
    public string $nickname = '';
    public string $ownerName = '';
   

    // 'Murzik','black',2, 'male'
    // public function __construct(
    //     string $nickname, 
    //     string $color, 
    //     int $age, 
    //     string $sex) {
    // $this->nickname = $nickname;
    // $this->color = $color;
    // $this->age = $age;
    // $this->sex = $sex;        
    //}
    public function __construct(array $data)
    {
        if ($data) {
            foreach ($data as $attr => $val) {
                if (isset($this->$attr)) {
                    $this->$attr = $val;
                }
            }
        }
    }

    public function say(string $word): string
    {
        return $this->nickname . $this->helperString("say: $word!");
    }

    public function run(): string
    {
        $result = $this->nickname
            .  $this->compare($this->isHungry, "Никуда не бежит :(", "побежал!");
        $this->isHungry = true;

        return $result;
    }

    


    public function getStatusHungry(): string
    {
        return $this->nickname
            . $this->compare($this->isHungry, 'is hungry', "no hungry!");
    }


    
}
