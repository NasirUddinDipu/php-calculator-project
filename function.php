<?php 

/** 
 * form_processing expecting some paramiter 
 * $number_one = $_POST["number_one"],
 * $number_two = $_POST["number_two"],
 * $oparetor = $_POST["oparetor"],
 * return $result
 */       

function form_processing($oparetor, $number_one, $number_two){
    if ($oparetor == "+") {
        $result = $number_one + $number_two;
        return $result;
    } elseif ($oparetor == "-") {
        $result = $number_one - $number_two;
        return $result;
    } elseif ($oparetor == "*") {
        $result = $number_one * $number_two;
        return $result;
    } elseif ($oparetor == "/") {
        if ($number_two == 0) {
            return $result = "NULL";
        } else {
            $result = $number_one / $number_two;
            return $result;
        }
    } elseif ($oparetor == "%") {
        if ($number_two == 0) {
            return $result = "NULL";
        } else {
            $result = $number_one % $number_two;
            return $result;
        }
    } else {
        $result = ucwords("give someting to calcilate!");
        return $result;
    }
}










