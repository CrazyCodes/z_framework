# Demo
```php
$dirPath = dirname(__FILE__);

\Zero\Bootstrap::run(
    $request = new \Zero\Zero(),
    $dirPath);

/**
 * @return \Zero\Http\Response
 */
$response = $request->send();

$response->end()
```
# 说明
这是项目入口文件内的代码，既index.php内的代码,正常情况下通过Nginx解析到此文件即可。
文件主要分为三部分

## 载入
```php
$dirPath = dirname(__FILE__);

\Zero\Bootstrap::run(
    $request = new \Zero\Zero(),
    $dirPath);
```
通过run方法载入核心类Zero，run方法内加载配置文件、路由等信息。

## 处理请求 
```php
$response = $request->send();
```
通过Zero核心类处理请求，例如路由，返回的是Response类，用于封装返回结果

## 返回结果
```php
$response->end()
```
调用end方法封装返回结果并终止程序。