<?php

// http://stackoverflow.com/questions/17224798/how-to-use-php-opcache
// https://github.com/PeeHaa/OpCacheGUI

var_dump(opcache_get_configuration());

//array(3) {
//  ["directives"]=>
//  array(25) {
//    ["opcache.enable"]=>
//    bool(true)
//    ["opcache.enable_cli"]=>
//    bool(false)
//    ["opcache.use_cwd"]=>
//    bool(true)
//    ["opcache.validate_timestamps"]=>
//    bool(true)
//    ["opcache.inherited_hack"]=>
//    bool(true)
//    ["opcache.dups_fix"]=>
//    bool(false)
//    ["opcache.revalidate_path"]=>
//    bool(false)
//    ["opcache.log_verbosity_level"]=>
//    int(1)
//    ["opcache.memory_consumption"]=>
//    int(67108864)
//    ["opcache.interned_strings_buffer"]=>
//    int(4)
//    ["opcache.max_accelerated_files"]=>
//    int(2000)
//    ["opcache.max_wasted_percentage"]=>
//    float(0.05)
//    ["opcache.consistency_checks"]=>
//    int(0)
//    ["opcache.force_restart_timeout"]=>
//    int(180)
//    ["opcache.revalidate_freq"]=>
//    int(2)
//    ["opcache.preferred_memory_model"]=>
//    string(0) ""
//    ["opcache.blacklist_filename"]=>
//    string(0) ""
//    ["opcache.max_file_size"]=>
//    int(0)
//    ["opcache.error_log"]=>
//    string(0) ""
//    ["opcache.protect_memory"]=>
//    bool(false)
//    ["opcache.save_comments"]=>
//    bool(true)
//    ["opcache.load_comments"]=>
//    bool(true)
//    ["opcache.fast_shutdown"]=>
//    bool(false)
//    ["opcache.enable_file_override"]=>
//    bool(false)
//    ["opcache.optimization_level"]=>
//    int(4294967295)
//  }
//  ["version"]=>
//  array(2) {
//    ["version"]=>
//    string(9) "7.0.4-dev"
//    ["opcache_product_name"]=>
//    string(12) "Zend OPcache"
//  }
//  ["blacklist"]=>
//  array(0) {
//  }
//}

echo PHP_EOL . '-----------------------------------' . PHP_EOL;

var_dump(opcache_get_status());