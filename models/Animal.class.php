<?php

class Animal
{
    public string $color = '';
    public int $age = 0;
    public string $sex = '';
    public bool $isHungry = true;
    public array $likeFoods = [];


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

    public function helperString(string $str, bool $firstSpace = true): string
    {
        return ($firstSpace ? " " : "") . "$str<br>";
    }

    public function compare(mixed $val, string $text1, string $text2): string
    {
        return $this->helperString($val ? $text1 : $text2);
    }


    

    public function getInfo()
    {
        $result = "";
        foreach (get_object_vars($this) as $attr => $val) {
            if (!is_array($val)) {
                $result .= $this->helperString("$attr => $val", false);
            } else {
                $result .= $this->helperString("$attr: <br>" .
                    implode("<br>",
                        array_map(fn($val) => " -> $val",
                            array_values($val)
                        )
                    ), 
                    false
                );
            }
        }
        return "info:<br>" . $result;
    }
}
