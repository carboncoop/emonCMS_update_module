<?php

$domain = "messages";
bindtextdomain($domain, "Modules/update/locale");
bind_textdomain_codeset($domain, 'UTF-8');


global $session;

if ($session['admin'] === 1) {
    $menu_dropdown_config[] = array('name' => dgettext($domain, "Update"), 'path' => "update/list", 'icon' => 'icon-update', 'session' => "write", 'order' => 1500);
}
