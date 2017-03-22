<?php
  class Palindromes {

    function check ($user_input) {
      $input = strtolower($user_input);
      $input_array = str_split($input);
      $new_array = array ();

      for($i=sizeof($input_array);$i>0;$i--){
        array_push($new_array, $input_array[$i-1]);
      }

      if($new_array === $input_array){
        return "It is a palindrome!";
      } else {
        return "It is not a palindrome!";
      }
    }

  }
?>
