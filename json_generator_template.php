<?php

$movie["title"]="";
$movie["author"]="";
$movie["description"]="";
$movie["hidden"]=0;
$movie["license"]="";
$movie["website"]="";
$movie["rating"]=0;
$movie["genre"][0]=0;
$movie["genre"][1]=0;
$movie["genre"][2]=0;
$movie["subtitles"]="";
$movie["enchanted"]=0;
$movie["next_episode"]="";
$movie["previous_episode"]="";

echo json_encode($movie);

?>