<?php 
defined('VERSION')       || define('VERSION', '1.0.5');
//定义路径常量
defined('WEB_ROOT'    )  || define('WEB_ROOT',     __DIR__."/../../"        );
defined('CORE_PATH'   )  || define('CORE_PATH',    WEB_ROOT."core/"    );
defined('CONTROL_PATH')  || define('CONTROL_PATH', CORE_PATH.'control/');
defined('DB_PATH'     )  || define('DB_PATH',      CORE_PATH.'db/'     );
defined('VIEW_PATH'   )  || define('VIEW_PATH',    CORE_PATH.'view/'   );
defined('PUBLIC_PATH' )  || define('PUBLIC_PATH',  CORE_PATH."public/" );
defined('AJAX_PATH'   )  || define('AJAX_PATH',    CORE_PATH.'ajax/'   );
defined('UTIL_PATH'   )  || define('UTIL_PATH',    CORE_PATH.'utils/'  );

//初始化配置
require_once CORE_PATH.'config.php';
require_once CORE_PATH.'Factory.class.php';
//注册函数
Factory::register();