<?php

$web_development = array ('frontend' => array(),
                          'backend' => array()
);


    array_push($web_development['frontend'],"xhtml");
    array_push($web_development['backend'],"Ruby on Rails");
    array_push($web_development['frontend'],"CSS");
    array_push($web_development['backend'],"Flash");
    array_push($web_development['frontend'],"javascript");
    $web_development['frontend'][0] = 'html' ; 
    unset($web_development['backend'][1]);

    echo '<pre>';
print_r($web_development);

echo '</pre>';
    


                          
?>