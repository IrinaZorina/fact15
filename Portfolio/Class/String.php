<?php

class StringClass
{
    public function search_str(string $str, string $under_str): string
    {
        if (strstr($str, $under_str)) {
            return "Подстрока $under_str найдена";
        } else {
            return "Подстока $under_str не найдена";
        }
    }

    public function copy_str(string $str, int $IndexBeg, int $IndexEnd): string
    {
        $result = '';

        for ($i = $IndexBeg; $i <= $IndexEnd; $i++) {
            $result .= $str[$i];
        }

        return $result;
    }

    public function change_str(string $str): string
    {
        return str_replace('b', 'a', $str);
    }

    public function delete_str(string $str, string $under_str): string
    {
        return str_replace($under_str, '', $str);
    }

    public function lenght_str(string $str): int
    {
        $lenghtStr = 0;

        for ($i = 0; $i < strlen($str); $i++) {
            if ($str[$i] != ' ') {
                $lenghtStr += 1;
            }
        }

        return $lenghtStr;
    }
}
