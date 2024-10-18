<?php

class Pet extends Animal
{
    public string $nickname = '';
    public string $ownerName = '';
 

    public function say(string $word): string
    {
        return $this->nickname . parent::helperString("say: $word!");
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

    // override method - переопределение родительского метода
    public function getInfo()
    {
      return $this->nickname . " " . parent::getInfo();
    }    
}
