<?php

/** @var \Modules\Base\Classes\Fetch\Menus $this */

$this->add_module_info("sms", [
    'title' => 'Sms',
    'description' => 'Sms',
    'icon' => 'fas fa-sms',
    'path' => '/sms/admin/contact',
    'class_str' => 'text-secondary border-secondary'
]);

$this->add_menu("sms", "contact", "Contact", "/sms/admin/contact", "fas fa-cogs", 1);
$this->add_menu("sms", "gateway", "Gateway", "/sms/admin/gateway", "fas fa-cogs", 2);
$this->add_menu("sms", "signature", "Signature", "/sms/admin/signature", "fas fa-cogs", 4);
$this->add_menu("sms", "blacklist", "Blacklist", "/sms/admin/blacklist", "fas fa-cogs", 4);
$this->add_menu("sms", "whitelist", "Whitelist", "/sms/admin/whitelist", "fas fa-cogs", 4);
