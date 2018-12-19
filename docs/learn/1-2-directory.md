# 目录结构
将目录按照项目类型分为一下几种

# 完整业务目录
既所有业务代码全部归为一个目录，类似与Laravel的完整目录结构
- app
    - Controllers
        - ...Controller.php
    - Actions
        - ...Actions.php
    - Models
        - ...Model.php
    - Services
        - ...Service.php
- config
    - app.php
    - database.php
- public
    - index.php
- routes
    - web.php
- tests
    - ...Test.php
    
 # 微服务目录
 微服务内无需过于复杂的目录,可以使用以下目录
 - app
    - ...Controllers.php
    - ...Service.php
 - config
    - app.php
    - databases.php
 - public
    - index.php
    - web.php
    
# 回归原始
当然上述还是比较麻烦，还可以更简单
- ...Controllers.php
- ...Service.php
- app.php
- index.php
- web.php

无论怎样去设计目录，还是需要去编写[index.php](1-3-entrance.md)代码
