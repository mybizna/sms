<?php

$this->add_module_info("sms", [
    'title' => 'Sms',
    'description' => 'Sms',
    'icon' => 'fas fa-sms',
    'path' => '/sms/admin/contact',
    'class_str' => 'text-secondary border-secondary'
]);

$this->add_menu("sms", "contact", "Contact", "/sms/admin/contact", "fas fa-cogs", 1);
$this->add_menu("sms", "gateway", "Gateway", "/sms/admin/gateway", "fas fa-cogs", 2);
$this->add_menu("sms", "setting", "Setting", "/sms/admin/setting", "fas fa-cogs", 5);

$this->add_submenu("sms", "setting", "Signature", "/sms/admin/signature", 5);
$this->add_submenu("sms", "setting", "Blacklist", "/sms/admin/blacklist", 5);
$this->add_submenu("sms", "setting", "Whitelist", "/sms/admin/whitelist", 5);
