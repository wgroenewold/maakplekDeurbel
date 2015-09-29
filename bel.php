<?php

/*
 * Doorbell 0.1
 *
 * @todo: Twitter connection
 * @todo: Storage with timestamp to generate heatmaps
 * @todo: Spaceapi.net eraan knopen.
 */

echo '<style>
        .deurbel{
            width:150px;
            height:50px;
            background-image:url(img/sprite.png);
        }

';


function maakplekDeurbel($devid){
    $ch = curl_init('http://api.pushingbox.com/pushingbox?devid=' . $devid);
    curl_exec ($ch);
    curl_close ($ch);

    $state = $_GET["state"];

    return $state;
}

if(maakplekDeurbel('v57AB7532E296BEC') == 'open'){
    //open
    echo '<style>
        .deurbel{background-position:0 0;}
    </style>';
}elseif(maakplekDeurbel('v57AB7532E296BEC') == 'gesloten'){
    //gesloten
    echo '<style>
        .deurbel{background-position:0 50px;}
    </style>';
}

echo '<div class="deurbel"></div>';