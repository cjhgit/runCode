<?php
/**
 * Created by PhpStorm.
 * User: cjh1
 * Date: 2016/7/7
 * Time: 20:03
 */
namespace Admin\Controller;

use Home\Controller\Common\BaseController;

class InfoController extends BaseController {

    public function index(){
        $this->initMenu();

        // 服务器信息

        // PHP 版本
        $phpversion = "PHP/" . phpversion();
        $this->assign('phpVersion', $phpversion);

        // 数据库类型
        $db_name = C('DB_TYPE');
        $this->assign('dbType', $db_name);

        // IP
        $ip = GetHostByName($_SERVER['SERVER_NAME']);
        $this->assign('ip', $ip);

        // 服务器信息
        $server = $_SERVER['SERVER_SOFTWARE'];
        $this->assign('server', $server);

        // 系统
        $system = php_uname();
        $this->assign('system', $system);

        // 内存信息
        /*
        $os = php_uname('s');
        if ($os == "Windows NT") {
            //$memory = getMemeory(1);
        } else {
            //$memory = getMemeory(2);
        }
        //var_dump($memory);die;
        $this->assign('memory', $memory);
        */

        $this->display();
    }
}

/**
 * 获得系统内存的使用情况
 * @param int $os_type <系统类型，如果是1表示window，如果是2表示linux>
 * @return array 一个保存系统总的内存和可用内存的数组
 */
function getMemeory($os_type = 1) {
    $mem = array();
    if ($os_type == 1) {
        if (PHP_VERSION >= 5) {
            $objLocator = new COM("WbemScripting.SWbemLocator");
            $wmi = $objLocator->ConnectServer();
            $prop = $wmi->get("Win32_PnPEntity");
            $sysinfo = GetWMI($wmi, "Win32_OperatingSystem", array('LastBootUpTime', 'TotalVisibleMemorySize', 'FreePhysicalMemory', 'Caption', 'CSDVersion', 'SerialNumber', 'InstallDate'));
            $mem['Total'] = size_format($sysinfo[0]['TotalVisibleMemorySize'] * 1024);
            $mem['Free'] = size_format($sysinfo[0]['FreePhysicalMemory'] * 1024);
            $usage = (1 - $sysinfo[0]['FreePhysicalMemory'] / $sysinfo[0]['TotalVisibleMemorySize']) * 100;
            //var_dump($usage);
            $mem['usage'] = $usage;
            //var_dump($mem);
            return $mem;
        }
        return false;
    } else if ($os_type == 2) {
        if (false === ($str = @file("/proc/meminfo"))) {
            return false;
        }
        $str = implode("", $str);
        preg_match_all("/MemTotal\s{0,}\:+\s{0,}([\d\.]+).+?MemFree\s{0,}\:+\s{0,}([\d\.]+).+?Cached\s{0,}\:+\s{0,}([\d\.]+).+?SwapTotal\s{0,}\:+\s{0,}([\d\.]+).+?SwapFree\s{0,}\:+\s{0,}([\d\.]+)/s", $str, $matches);
        $mem['Total'] = size_format($matches[1][0] * 1024);
        $mem['Free'] = size_format($matches[2][0] * 1024);
        $usage = (1 - $matches[2][0] / $matches[1][0]) * 100;
        $mem['usage'] = $usage;
        return $mem;
    }
}
/**
 * 用于对内存大小格式匹配
 * @param  int  $bytes    内存的大小，单位为字节
 * @param  integer $decimals [description]
 * @return [type]            [description]
 */
function size_format($bytes, $decimals = 2) {
    $quant = array(
        'TB' => 1099511627776, // pow( 1024, 4)
        'GB' => 1073741824, // pow( 1024, 3)
        'MB' => 1048576, // pow( 1024, 2)
        'KB' => 1024, // pow( 1024, 1)
        'B ' => 1, // pow( 1024, 0)
    );
    foreach ($quant as $unit => $mag) {
        if (doubleval($bytes) >= $mag) {
            return number_format($bytes / $mag, $decimals) . ' ' . $unit;
        }
    }

    return false;
}