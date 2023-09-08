<?php

/**
 * PHP实现域名WHOIS协议
 * 
 * Author: DoWake
 * Date: 2023-06-06
 */

/**
 * CN域名WHOIS服务器地址
 */
$server = 'whois.cnnic.cn';

/**
 * 要查询的域名
 */
$domain = 'qq.cn';


$conn = fsockopen($server, 43, $error_code, $error_message, 5);
if ($conn) {
  fputs($conn, "{$domain}\n");
  $result = [];
  while ($data = fgets($conn)) {
    $result[] = $data;
  }
  print_r($result);
} else {
  echo $error_message;
}
