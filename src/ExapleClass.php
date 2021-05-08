<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 08.05.2021
 * Time: 9:03
 */

namespace Pay;


class ExapleClass
{
    private string $say;

    public function __construct(string $say)
    {
        $this->say = $say;
    }

    public function say(): void
    {
        $border = '||=';

        for($i = 0; $i < strlen($this->say); $i++){
            $border.= '=';
        }

        $border.= '=||';

        echo $border;
        echo "<br/>||={$this->say}=||<br/>";
        echo $border;
    }
}