<?php

function wellcomeAdmin()
{
    if(isset($_SESSION['admin_logged'])){

        return '<a href="/adminPanel/destroy">Logout</a>' ;

    }

    return 'Bem vindo';

} 