<?php
$possible_states = array('health hazard', 'filthy', 'dirty' , 'clean', 'immaculate');


$room_filthiness = $possible_states[4]; 

if( $room_filthiness==$possible_states[0] ){
	echo "Yuk, Room is health hazard ! Let's clean it up !";
} else if( $room_filthiness==$possible_states[1] ){
	echo "Yuk, Room is filthy : let's clean it up !";
// ...
} else if ($room_filthiness==$possible_states[2]){
	echo "<br>Yuk , Room is dirty,let's clean it up !";
} else if ($room_filthiness==$possible_states[3]){
    echo "<br> Nice Yuk , its clean!";
}
else {
    echo "<br> Nice Yuk , its immaculate!";
}



?>