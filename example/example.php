<?php
//require("./../src/substr_mm/substr_mm.php");
require("./../vendor/autoload.php");
use substr_mm\substr_mm;

$string = 'သီဟိုဠ်မှ ဉာဏ်ကြီးရှင်သည် အာယုဝဍ္ဎနဆေးညွှန်းစာကို ဇလွန်ဈေးဘေး ဗာဒံပင်ထက် အဓိဋ္ဌာန်လျက် ဂဃနဏဖတ်ခဲ့သည်။';
$start = 0;
$length = 20;
$output = substr_mm::substr_mm($string, $start, $length);
echo $output;
?>
