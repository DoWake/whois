# whois

WHOIS 是一个用来查询域名是否已经被注册，以及注册域名的详细信息的数据库（如域名所有人、域名注册商）。

PHP 实现域名 WHOIS 协议，可以通过 fsockopen 函数与域名 whois 服务器 43 端口连接，然后本地发送域名数据，whois 服务器会返回多行数据。

域名 whois 服务器地址可以在[IANA](https://www.iana.org/whois?q=cn)获取。
一般情况下，不同的域名后缀 whois 服务器地址不同；若要实现查询不同后缀的域名，可以编写程序批量获取 whois 服务器地址。
本项目提供的 WHOIS 服务器地址的获取时间是 2023-09-08，在未来可能部分地址会失效。

查询例子

查询的域名：qq.cn

查询的结果：

```php
Array
(
    [0] => Domain Name: qq.cn

    [1] => ROID: 20030321s10001s00193214-cn

    [2] => Domain Status: ok

    [3] => Registrant: 中国联合网络通信有限公司黑龙江省分公司

    [4] => Registrant Contact Email: 151026@qq.com

    [5] => Sponsoring Registrar: 北京新网数码信息技术有限公司

    [6] => Name Server: ns.hlhrptt.net.cn

    [7] => Name Server: ns1.hlhrptt.net.cn

    [8] => Registration Time: 2003-03-21 22:42:05

    [9] => Expiration Time: 2024-03-21 22:42:05

    [10] => DNSSEC: unsigned

)
```
