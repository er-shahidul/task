<?php
/**
 * Created by PhpStorm.
 * User: shahidul
 * Date: 9/28/20
 * Time: 11:08 AM
 */

function ipLength($ip){
    return strlen(@inet_pton($ip));
}

function ipv6Validity($ip){
    return filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6);
}

function ipv4Validity($ip){
    return filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);
}

function commandLineOperation($command){
    return shell_exec($command);
}

function getValidIPs($arr){
    $ipArray = array() ;
    foreach ($arr as $ip) {
        if(ipLength($ip) == 16 && ipv6Validity($ip)) array_push($ipArray, $ip);
        if(ipLength($ip) == 4 && ipv4Validity($ip)) array_push($ipArray, $ip);
    }
    return $ipArray;
}

$foreignIPs = commandLineOperation("netstat -ntu | awk '{print $5 }' | cut -d : -f1 | sort | sort -n");
$localIPs = commandLineOperation("netstat -ntu | awk '{print $4 }' | cut -d : -f1 | sort | sort -n");
$foreignAndLocalIPs = array_merge(explode(PHP_EOL, $foreignIPs), explode(PHP_EOL, $localIPs));
$uniqueIPs = array_unique($foreignAndLocalIPs);
$validIPs = getValidIPs($uniqueIPs);

foreach ($validIPs as $ip) {
    echo $ip.PHP_EOL;
}