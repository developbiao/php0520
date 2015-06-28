@Describe:项目-《网上购物书店》
@Author:龚彪
@Class:软开1234班
@Date:2014/10/06

Demo:http://bookstores.sinaapp.com
-----------------------------------------------------
		项目部署
-----------------------------------------------------

1、	将工程项目文件夹Copy到一台安装了LAMP环境的Linux（推荐）主机或者Windows机的web目录下面,Apache默认是/var/www目录。
2、	数据库文件在该项目的data目录下面，Copy到Mysql的数据库目录，在Linux中Mysql的数据目录默认路径在/var/lib/mysql下面,文件夹名及数据库名，执行chown mysql.mysql 把数据库文件添加权限或者使用phpmyadmin导入/bookstore/bookstore.sql 文件中的SQL语句。
3、	修改数据库连接配置文件/bookstore/admin/public/common/config.inc.php和/bookstore/home/public/common/ocnfig.inc.php 将数据库连接地址和用户名修改为本地或实际的IP账号。
4、	打开浏览器访问http://127.0.0.1/bookstore 或http://localhost/bookstore 实际配置的网站地址用可打开项目。
