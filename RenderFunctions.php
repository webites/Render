<?php

function template_hook($handle)
{

    if ($_SESSION[$handle]) {
        echo $_SESSION[$handle];
    }
}
