<?php
class Str 
{
    public function __construct($txt)
    {
        $this->txt = $txt;
    }

    public $txt;
    private function firstCharacter($StrOne,$StrTwo){
        $flag = false;
        if(($this->length($StrOne)>1)&&($this->length($StrTwo)>1)){
            $flag = ($StrOne[0]==$StrTwo[0])?$this->firstCharacter(mb_substr($StrOne,1),mb_substr($StrTwo,1)):false;
        }
        elseif(($this->length($StrOne)==1)&&($this->length($StrTwo)>=1)&&($StrOne[0]==$StrTwo[0])){
            return true;
        }
        else{
            return false;
        }
        if($flag)return true;
    }
    public function FindText($searchString)//*
    {
        // echo "Позицию подстроки в строке : ";
        $pos = 0;
        $flag = false;
        $countStr = $this->length($this->txt);
        while($pos < $countStr){
            // echo $pos ."->".$searchString[$pos++]."<br>";
            ($searchString[0]==$this->txt[$pos])?$flag = $this->firstCharacter(mb_substr($searchString,1),mb_substr($this->txt,++$pos)):$pos++;
            if($flag)break;
        }
        return $pos;

        // return $count;
    }
    public function CopyText($count,$pos)//*
    {
        // echo "CopyText !!!  <br>";
        $arr = array();
        $end = $pos+$count;

        for ($i = $pos-1; $i < $end-1; $i++){
            $arr[] = $this->txt[$i];
            // echo $i."->";
            // // echo $this->txt[$i]."->";
            // print_r($arr);
        }
        return implode("",$arr);
    }
    public function replaceText($substringOld,$substringNew)
    {
        // echo "Замена подстроки на другую : ";
        $this->txt = str_replace($substringOld,$substringNew,$this->txt);
        return $this->txt;
    }
    public function DelText($substringOld)
    {
        // echo "Удаление подстроки : ";
        $this->txt = str_replace($substringOld,"",$this->txt);
        return $this->txt;
    }
    private function length($str){
        $stroka = $str;
        $count = 0;
        while ($stroka <> "") {
            $stroka = mb_substr($stroka,1);
            $count++;
        }    
        return $count;
    }
    public function LenText()//*
    {
        echo "Длина строки '$this->txt': ";
        return $this->length($this->txt)."<br>";
    }


}
