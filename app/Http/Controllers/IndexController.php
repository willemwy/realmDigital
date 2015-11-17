<?php
/**
 * Created by PhpStorm.
 * User: Willem Van Wyk
 * Date: 2015-11-14
 * Time: 05:40 PM
 */

namespace App\Http\Controllers;


use Exception;

class IndexController extends Controller
{
    public function index()
    {
        echo "Question 1";
        echo "Replace '1234' in 'abc123def' with 'test': " . print_r($this->string_replace("abc123def", "123", "test") ?: 'false', true);
        echo "<br>";
        echo "Replace '1234' in 'abc123def' with 'test': " . print_r($this->string_replace("abc123def", "1234", "test") ?: 'false', true);
        echo "<br>";

        echo "Question 2";
        $palindromes = ["abccba", "a man, a plan, a canal, panama", "aabbcc", "a quick brown fox"];
        echo "<br>";
        echo "Palindromes: " . implode(", ", $palindromes);
        echo "<br>";
        foreach($palindromes as $pal)
        {
            //Trimming white spaces
            $str = preg_replace("/[\s\W]+/", '', $pal);
            echo "'$pal' is a palindrome: " . print_r($this->palindrome($str) ? "true" : "false", true );
            echo "<br>";
        }

        echo "Question 3";
        echo "<br>";
        $arrDuplicates1 = ['1', '2', '3', '4', '5', '6'];
        $arrDuplicates2 = ['4', '5', '6', '7', '8', '9'];
        echo "Duplicate values between [" . implode(", ",$arrDuplicates1) . "] and [" .
                implode(", ", $arrDuplicates2) . "] are: [" .
                implode(", ", $this->duplicates($arrDuplicates1, $arrDuplicates2)) . "]";
        echo "<br>";

        echo "Question 4";
        echo "<br>";
        $arrNonDuplicates = [1, 2, 3, 3, 5, 1,7, 2];
        echo "In [" . implode(", ", $arrNonDuplicates) . "] these are the non-duplicates: [" . implode(", ", $this->nonDuplicates($arrNonDuplicates)) . "]";
        echo "<br>";

        echo "Question 5";
        echo "<br>";
        $sort = [4, 6, 1, 3, 2, 5];
        echo "Sort [" . implode(", ", $sort) . "] ascending: [" . implode(", ", $this->bubbleSort($sort)) . "]";

    }

    private function string_replace($stringToReplaceIn, $stringToSearchFor, $stringToReplaceWith)
    {
        $start = strpos($stringToReplaceIn, $stringToSearchFor);
        if($start === false)
        {
            return false;
        }

        $returnStr = str_split($stringToReplaceIn);
        for($i = 0; $i < strlen($stringToSearchFor); $i++)
        {
            unset($returnStr[$start+$i]);
        }
        $returnStr = implode("", $returnStr);
        return substr($returnStr, 0, $start) . $stringToReplaceWith . substr($returnStr, $start);
    }

    private function palindrome ($str)
    {
        $arrStr = str_split($str);
        for($i = 0; $i < count($arrStr) / 2; $i++)
        {
            if($arrStr[$i] != $arrStr[(count($arrStr) - 1) - $i])
            {
                return false;
            }
        }
        return true;
    }

    private function duplicates($arr1, $arr2)
    {
        $duplicates = [];

        foreach($arr1 as $item)
        {
            if(in_array($item, $arr2))
            {
                $duplicates[] = $item;
            }
        }
        return $duplicates;
    }

    private function nonDuplicates($arr)
    {
        $vals = array_count_values($arr);
        $nonDuplicates = [];
        foreach($vals as $key => $val)
        {
            if($val == 1)
            {
                $nonDuplicates[] = $key;
            }
        }
        return $nonDuplicates;
    }

    private function bubbleSort($arr) {
        $sorted = false;
        while (false === $sorted) {
            $sorted = true;
            for ($i = 0; $i < count($arr)-1; ++$i) {
                $current = $arr[$i];
                $next = $arr[$i+1];
                if ($next < $current) {
                    $arr[$i] = $next;
                    $arr[$i+1] = $current;
                    $sorted = false;
                }
            }
        }
        return $arr;
    }
}
