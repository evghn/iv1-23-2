<?php

class Animal
{

    public const IS_OWNER = false;

    public string $color = '';
    public int $age = 0;
    public string $sex = '';
    public bool $isHungry = true;
    public array $likeFoods = [];
    public static int $count = 0;

    public function __construct(array $data, bool $child = false)
    {
        Helper::construct($data, $this);
        if (! $child) {
            self::$count++;
        }        
    }


    public function toEat(string|array $foods): bool
    {
        if (is_array($foods)) {
            $result = true;           
            foreach ($foods as $food) {                 
                $result = $result && in_array($food->title, $this->likeFoods);
            }
            $this->isHungry = !$result;
        } else {
            $this->isHungry = !in_array($foods, $this->likeFoods);
        }

        return $this->isHungry;
    }
   
    

    public function getInfo()
    {        
        return Helper::helperString("info:", false)
            . Helper::getInfo($this);
    }


    public function run(): string
    {
        $result = Helper::compare($this->isHungry, "Никуда не бежит :(", "побежал!");
        $this->isHungry = true;

        return $result;
    }

    public function getStatusHungry(): string
    {
        return Helper::compare($this->isHungry, 'is hungry', "no hungry!");
    }

    public function getCount()
    {
        return Helper::helperString(self::$count);
    }
}
