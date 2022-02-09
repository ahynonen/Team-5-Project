<?php

echo "<h3> Question 1 </h3>";


$list = array("PHP","HTML","JavaScript","CMS","Project");
for($i=0; $i<count($list); $i++) { 
    echo "  <li>{$list[$i]}</li>\n";
}

echo "<h3> Question 2 </h3>";

$courses1 = array("PHP","HTML","JavaScript","CMS","Project");

unset($courses1[1]); 
var_dump($courses1);


echo "<h3> Question 3 </h3>";

$courses3=array("PHP" => "60", "HTML" => "50", "JavaScript" => "40", "CMS" => "20", "Project" => "30");
asort($courses3);
print_r($courses3);
echo "<br>";

$courses3=array("PHP" => "60", "HTML" => "50", "JavaScript" => "40", "CMS" => "20", "Project" => "30");
ksort($courses3);
print_r($courses3);
echo "<br>";

$courses3=array("PHP" => "60", "HTML" => "50", "JavaScript" => "40", "CMS" => "20", "Project" => "30");
arsort($courses3);
print_r($courses3);
echo "<br>";

$courses3=array("PHP" => "60", "HTML" => "50", "JavaScript" => "40", "CMS" => "20", "Project" => "30");
krsort($courses3);
print_r($courses3);
echo "<br>";

echo "<h3> Question 4 </h3>";


$courses4 = ['1'=>'php','2'=>'html','3'=>'javascript','4'=>'cms','4'=>'project'];
$result = array_map('strtoupper',$courses4);
print_r($result);


echo "<h3> Question 5 </h3>";


$course=array("red", "yellow", "green");
echo "<font color=red> "; $course[0]
echo $course[1] ."<font color=yellow> ";
echo $course[2] ."<font color=green> ";




?>