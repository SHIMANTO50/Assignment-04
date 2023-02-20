<?php
/*1st Problem function*/
function sort_strings_by_length($arr)
{
    usort($arr, function ($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $arr;
}

/*2nd Problem function*/
function concatenate_reverse($str1, $str2)
{
    $str2_reverse = strrev($str2);
    return $str1 . $str2_reverse;
}

/*3rd Problem function*/
function remove_first_and_last($arr)
{
    array_shift($arr);
    array_pop($arr);
    return $arr;
}

/*4th Problem function*/
function contains_only_letters_and_whitespace($str)
{
    return preg_match('/^[a-zA-Z\s]+$/', $str) === 1;
}


/*5th Problem function*/
function find_second_largest($arr)
{
    $max = $arr[0];
    $second_max = $arr[0];
    foreach ($arr as $num) {
        if ($num > $max) {
            $second_max = $max;
            $max = $num;
        } elseif ($num > $second_max && $num < $max) {
            $second_max = $num;
        }
    }
    return $second_max;
}




/*1st problem arguments*/
$arr1 = array("apple", "banana", "pear", "orange");
$arr1 = sort_strings_by_length($arr1);
print_r($arr1);

/*2nd problem arguments*/
$str1 = "Hello";
$str2 = "world!";
$result = concatenate_reverse($str1, $str2);
echo $result . "\n";

/*3rd problem arguments*/
$arr2 = array("apple", "banana", "pear", "orange");
$new_arr = remove_first_and_last($arr2);
print_r($new_arr);

/*4th problem arguments*/
$str1 = "This is a string with only letters and whitespace";
$str2 = "This is a string with a number (123) and a symbol (!)";

if (contains_only_letters_and_whitespace($str1)) {
    echo "The first string contains only letters and whitespace\n";
} else {
    echo "The first string contains other characters besides letters and whitespace\n";
}

if (contains_only_letters_and_whitespace($str2)) {
    echo "The second string contains only letters and whitespace\n";
} else {
    echo "The second string contains other characters besides letters and whitespace\n";
}


/*5th problem arguments*/
$arr3 = array(5, 10, 15, 20, 25);
$second_largest = find_second_largest($arr3);
echo "The second largest number is: " . $second_largest;
