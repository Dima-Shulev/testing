<?php

if(!function_exists('sessions_enter')){
    function sessions_enter($status){
        $sessions = session();
        $sessions->put('session_status',$status);
    }
}
