<?php

namespace examples;

use SQLAdmin\SQLAdmin;
use ErrorHandler\ErrorHandler;

require_once __DIR__ . "/../vendor/autoload.php";

if (!ErrorHandler::isCreated()) {
    $options = [
        "logDir" => __DIR__ . "/log",
    ];
    ErrorHandler::init($options);
}

try {
    $admin = new SQLAdmin(null);
} catch (\Exception $ex) {
    ErrorHandler::log("sql-admin", $ex);
}

