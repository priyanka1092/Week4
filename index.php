<?php
$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

//$replacedate = str_replace("-", "/", $date);
//echo "The value of \$date:" .$replacedate. "<br>";

echo '<hr>';

if($date == $tar)
{
echo "Oops";
}
  else if($date > $tar)
  {
    echo "Future";
  }  
     else if($date < $tar)
       {
       	echo "Past";
       }

       echo '<hr>';
       echo "The word count is".str_word_count("$date");
          echo '<hr';

          echo srtlen("$date");






       
?>


