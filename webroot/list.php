<?php
    $r = array( "errno" => 0, "msg" => "成功" );

    if( isset( $_GET['arg'] ) ){
        $r[ 'arg' ] =  $_GET[ 'arg' ];
    }

    echo json_encode( $r );
?>
