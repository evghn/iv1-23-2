<?php

class Helper
{
    public static function helperString(string $str, bool $firstSpace = true): string
    {
        return ($firstSpace ? " " : "") . "$str<br>";
    }

    public static function compare(mixed $val, string $text1, string $text2): string
    {
        return self::helperString($val ? $text1 : $text2);
    }


    public static function getInfo(object $obj)
    {
        $result = "";
        foreach (get_object_vars($obj) as $attr => $val) {
            if (!is_array($val)) {
                $result .= self::helperString("$attr => $val", false);
            } else {
                $result .= self::helperString("$attr: <br>" .
                    implode("<br>",
                        array_map(fn($val) => " -> $val",
                            array_values($val)
                        )
                    ), 
                    false
                );
            }
        }
        return $result;
    }


    public static function construct(array $data, object $obj)
    {
        if ($data) {
            foreach ($data as $attr => $val) {
                if (isset($obj->$attr)) {
                    $obj->$attr = $val;
                }
            }
        }
    }
}

