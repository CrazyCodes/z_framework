为了不设计的过度复杂。现准备将目录设计为下列架构

- app
    - Controllers
    - Actions
    - Models
    - Services
- config
    - app.php
    - database.php
- public
    - index.php
- routes
    - web.php
- tests

以上只是一个栗子，实际的架构是
...
....
.....
没有架构。通过composer 安装后的Zero是无法直接运行的，需要先编写index.php，目录随意设定。nginx解析随意设定。你开心就好