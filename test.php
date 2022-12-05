<?php

function letterCounterCheck($string)
{
    return LetterCounter::CountLettersAsString($string);
}

class LetterCounter
{
    static public function CountLettersAsString(string $string): string
    {
        $result = '';
        $stringArray = str_split($string);
        foreach (array_unique($stringArray) as $value) {
            $result .= $value . str_repeat('*', count(array_keys($stringArray, $value)));
        }
        return $result;
    }
}

if(isset($_POST['string'])) {
    echo letterCounterCheck($_POST['string']) . "<br>";
}
?>
<form method="POST" >
    <input name="string" type="text"/>
    <input type="submit"></input>
</form>

