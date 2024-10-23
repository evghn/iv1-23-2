<?php

class Pet extends Animal
{
    public const IS_OWNER = true;

    public string $nickname = '';
    public string $ownerName = '';
    public static int $count = 0;

    public function __construct($data)
    {
        parent::__construct($data, true);
        self::$count++; 
    }
 

    public function say(string $word): string
    {
        return $this->nickname . Helper::helperString("say: $word!");
    }

    public function run(): string
    {
        return $this->nickname . parent::run();
    }

   
    public function getStatusHungry(): string
    {
        return $this->nickname
            . parent::getStatusHungry();
    }

    // overload method - переопределение родительского метода
    public function getInfo()
    {
      return $this->nickname . " " . parent::getInfo();
    }


    public function getCount()
    {
        return Helper::helperString(self::$count);
    }
}
