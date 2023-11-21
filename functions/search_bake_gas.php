<?php

function searchbike($bike_name)
{
    require('config/bikes.php');
    foreach($bikes as $bike) {
        if($bike['name']===$bike_name){
        
        return $bike;
        
}
}
};
