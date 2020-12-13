<?php
namespace substr_mm;
class substr_mm
{
  public static function substr_mm($string, $start, $length)
  {
    $pattern = "/(?:(?<!\x{1039})([\\x{1000}-\\x{102A}\\x{103F}\\x{104A}-\\x{104F}]|[\\x{1040}-\\x{1049}]+|[^\\x{1000}-\\x{104F}]+)(?![\\x{103E}\\x{103B}]?[\\x{1039}\\x{103A}\\x{1037}]))/uim";
    $replacement = '|$1';
    $replace = preg_replace($pattern, $replacement, $string);
    $array = explode("|",$replace);
    $output = "";
    $output_length = 0;
    foreach ($array as $key => $value) {
        $my_var =  $value;
        if($start<=$key){
          $output .= $value;
          $output_length++;
          if($output_length>=$length){
            break;
          }
        }
    }
    return $output;
  }
}

?>
