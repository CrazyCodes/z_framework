# 安装
## 服务器要求
你的服务器需要满足以下条件
- PHP >= 7.1.3
- OpenSSL PHP 扩展
- PDO PHP 扩展
- Mbstring PHP 扩展

## 安装Zero
Zero 使用 Composer 来管理项目依赖。因此，在使用 Zero 之前，请确保你的机器已经安装了 Composer。

## 初始化项目
Zero并未提供初始化目录，需自行创建。建立一个空目录
```
mkdir myproject
```
使用composer初始化项目
```
composer init
```
下载Zero核心代码
```
composer require crazycodes/zframework // 还未递交到packagist
```
最后自行建立项目[目录结构](1-2-directory.md),建立[index.php](1-3-entrance.md)，开始使用zero framework
