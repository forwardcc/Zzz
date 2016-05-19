## 技术栈
没啥技术。。。
* sass 写的样式
* seajs 做的 js 模块化（暂时没几个模块）

### 注意
* variable.scss 文件里的 `$picURL` 是图片的路径前缀
* seajs-config.js 里的配置  `base: '/assets'` 也是 js 模块的路径

## 文件夹结构

* assets 静态资源 js css
	* c (common)通用的样式
	* p (page) 所有页面的 js css
	* js 通用的 js 文件
* pic 图片
* node_modules  node的模块，就是 gulp 编译 sass 用的
* gulpfile.js gulp的任务（只有sass） 


## 页面链接
* http://ccforward.sinaapp.com/find.php  发现项目
* http://ccforward.sinaapp.com/login.php  登录
* http://ccforward.sinaapp.com/register.php  注册
* http://ccforward.sinaapp.com/manage.php  项目管理
* http://ccforward.sinaapp.com/player.php  找赛道 运动员
* http://ccforward.sinaapp.com/road.php  找赛道
* http://ccforward.sinaapp.com/detail.php  详情

