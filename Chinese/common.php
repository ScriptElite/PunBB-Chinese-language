<?php

// 常用高频字符串的语言定义
// 简体中文 作者 reishi https://reishi.cc
$lang_common = array(

// 文字书写方向与编码
'lang_direction'			=>	'ltr',	// ltr (从左到右) 或 rtl (从右到左)
'lang_identifier'			=>	'zh-CN',

// 数字格式化
'lang_decimal_point'		=>	'.',
'lang_thousands_sep'		=>	',',

// 系统通告与异常提示
'Bad request'				=>	'非法的访问请求，您点击的链接可能不正确或已过期',
'No view'					=>	'您当前没有权限浏览这些版块',
'No permission'				=>	'您没有权限访问当前页面',
'CSRF token mismatch'		=>	'无法验证安全令牌。可能的原因是您打开当前页面后放置了较长时间，随后才提交表单或点击链接。如果您确认要继续刚才的操作，请点击“确认”按钮，否则请点击“取消”返回原处',
'No cookie'					=>	'您似乎已成功登录，但系统未能成功写入 Cookie 凭证。请检查您的浏览器设置，并为本站启用 Cookie 接收权限',


// 其他杂项
'Forum index'				=>	'论坛首页',
'Submit'					=>	'提交',	// "name" of submit buttons
'Cancel'					=>	'取消', // "name" of cancel buttons
'Preview'					=>	'预览',	// submit button to preview message
'Delete'					=>	'删除',
'Split'						=>	'拆分',
'Ban message'				=>	'您已被本论坛永久封禁',
'Ban message 2'				=>	'您的封禁状态将于 %s 到期解除',
'Ban message 3'				=>	'执行封禁的管理员或版主给您留下了以下说明信息',
'Ban message 4'				=>	'如有任何异议，请直接联系论坛管理员，邮箱为 %s',
'Never'						=>	'从未',
'Today'						=>	'今天',
'Yesterday'					=>	'昨天',
'Forum message'				=>	'论坛系统提示',
'Maintenance warning'		=>	'<strong>安全警告！当前已开启 %s。</strong> 请千万不要注销退出账号，否则您将无法再次登录进来',
'Maintenance mode'			=>	'闭站维护模式',
'Redirecting'				=>	' 正在为您跳转…', // With space!
'Forwarding info'			=>	'系统将在 %s %s 内自动为您导航至新页面',
'second'					=>	'秒',	// singular
'seconds'					=>	'秒',	// plural
'Click redirect'			=>	'如果您不想继续等待，或者您的浏览器没有自动跳转，请点击此处',
'Invalid e-mail'			=>	'您输入的电子邮箱地址格式不正确',
'New posts'					=>	'查看新帖',	// the link that leads to the first new post
'New posts title'			=>	'查找自您上次访问以来所有有新回复的主题',	// the popup text for new posts links
'Active topics'				=>	'热门讨论',
'Active topics title'		=>	'查找最近活跃的互动主题',
'Unanswered topics'			=>	'零回复主题',
'Unanswered topics title'	=>	'查找当前还没有人回复过的主题',
'Username'					=>	'用户名',
'Registered'				=>	'注册时间',
'Write message'				=>	'撰写内容',
'Forum'						=>	'版块',
'Posts'						=>	'帖子',
'Pages'						=>	'页码',
'Page'						=>	'页',
'BBCode'					=>	'BBCode',	// You probably shouldn't change this
'Smilies'					=>	'表情',
'Images'					=>	'图片',
'You may use'				=>	'您可以使用：%s',
'and'						=>	'以及',
'Image link'				=>	'图片链接',	// This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'						=>	'说道',	// For [quote]'s (e.g., User wrote:)
'Code'						=>	'代码块',		// For [code]'s
'Forum mailer'				=>	'%s 邮件系统',	// As in "MyForums Mailer" in the signature of outgoing e-mails
'Write message legend'		=>	'编辑您的帖子正文',
'Required information'		=>	'必填项说明',
'Reqmark'					=>	'*',
'Required warn'				=>	'在提交表单前，所有加粗显示标签的输入框都必须填写完整',
'Crumb separator'			=>	' &rarr;&#160;', // The character or text that separates links in breadcrumbs
'Title separator'			=>	' — ',
'Page separator'			=>	'&#160;', //The character or text that separates page numbers
'Spacer'					=>	'…', // Ellipsis for paginate
'Paging separator'			=>	' ', //The character or text that separates page numbers for page navigation generally
'Previous'					=>	'上一页',
'Next'						=>	'下一页',
'Cancel redirect'			=>	'操作已取消',
'No confirm redirect'		=>	'未提供二次确认，操作已取消',
'Please confirm'			=>	'请确认您的操作',
'Help page'					=>	'帮助中心：%s',
'Re'						=>	'回复：',
'Page info'					=>	'（第 %1$s 页，共 %2$s 页）',
'Item info single'			=>	'%s：%s',
'Item info plural'			=>	'%s：当前展示第 %s 到 %s 条，总共 %s 条', // e.g. Topics [ 10 to 20 of 30 ]
'Info separator'			=>	' ', // e.g. 1 Page | 10 Topics
'Powered by'				=>	'核心技术支持由 %s 提供，扩展生态由 %s 支撑',
'Maintenance'				=>	'系统维护',
'Installed extension'		=>	'已加载官方官方扩展插件 %s。版权所有 &copy; 2003&ndash;'.date('Y').' <a href="https://punbb.informer.com/">PunBB</a>',
'Installed extensions'		=>	'当前系统共加载了 <span id="extensions-used" title="%s">%s 个官方扩展插件</span>。版权所有 &copy; 2003&ndash;2012 <a href="https://punbb.informer.com/">PunBB</a>',

// CSRF confirmation form
'Confirm'					=>	'确认',	// Button
'Confirm action'			=>	'确认操作',
'Confirm action head'		=>	'请对您刚才发起的操作进行确认或取消',

// 用户组及头衔
'Title'						=>	'头衔',
'Member'					=>	'注册会员',	// Default title
'Moderator'					=>	'版主',
'Administrator'				=>	'超级管理员',
'Banned'					=>	'已封禁',
'Guest'						=>	'游客',

// include/parser.php BBCode 解析器核心提示
'BBCode error 1'			=>	'检测到闭合标签 [/%1$s]，但此前未找到与之匹配的开启标签 [%1$s]',
'BBCode error 2'			=>	'标签 [%s] 的正文内容不能为空',
'BBCode error 3'			=>	'不允许在标签 [%2$s] 的内部嵌套开启 [%1$s] 标签',
'BBCode error 4'			=>	'标签 [%s] 不允许自我嵌套包裹',
'BBCode error 5'			=>	'检测到开启标签 [%1$s]，但未找到与之匹配的闭合标签 [/%1$s]',
'BBCode error 6'			=>	'标签 [%s] 的属性部分没有填写任何有效参数',
'BBCode nested list'		=>	'[list] 列表标签之间不允许进行多层嵌套',
'BBCode code problem'		=>	'您输入的 [code] 代码块标签存在排版闭合错误',

// 导航菜单项（位于每个页面顶部）
'Index'						=>	'首页',
'User list'					=>	'会员列表',
'Rules'						=>	'服务协议',
'Search'					=>	'搜索',
'Register'					=>	'注册账号',
'register'					=>	'注册',
'Login'						=>	'登录控制台',
'login'						=>	'登录',
'Not logged in'				=>	'您当前处于未登录状态',
'Profile'					=>	'个人资料',
'Logout'					=>	'安全退出',
'Logged in as'				=>	'当前登录账号为 %s',
'Admin'						=>	'管理后台',
'Last visit'				=>	'您上次访问是在 %s',
'Mark all as read'			=>	'将所有版块标记为已读',
'Login nag'					=>	'欢迎光临，请先登录系统或注册新账号',
'New reports'				=>	'有新举报',

// 系统警报与更新提示
'New alerts'				=>	'新系统提示',
'Maintenance alert'			=>	'<strong>站点维护模式已激活！</strong> 管理员请<em>千万不要</em>注销退出账号，否则您自己也将无法再次登录回系统',
'Updates'					=>	'PunBB 程序升级提示：',
'Updates failed'			=>	'系统在尝试通过 punbb.informer.com 官方更新接口查询升级时失败。这通常意味着官方发信服务正处于临时高负载或断网维护状态。如果此提示在两三天内仍未消失，建议您关闭后台的自动检测升级功能，以后改为手动检查',
'Updates version n hf'		=>	'官方已有新版本 PunBB（版本号 %s）开放下载，请前往 <a href="https://punbb.informer.com/">punbb.informer.com</a> 获取。此外，系统检测到有可用的安全热补丁，请前往后台的 <a href="%s">管理热补丁</a> 选项卡进行一键安装',
'Updates version'			=>	'官方已有新版本 PunBB（版本号 %s）开放下载，请前往 <a href="https://punbb.informer.com/">punbb.informer.com</a> 官方网站获取',
'Updates hf'				=>	'系统检测到有一项或多项安全热补丁可用，请立刻前往后台的 <a href="%s">管理热补丁</a> 选项卡进行一键安装',
'Database mismatch'			=>	'数据库版本不匹配',
'Database mismatch alert'	=>	'您的 PunBB 数据库版本高于当前的程序源码版本。这种版本脱节可能导致前台或后台功能运行异常。强烈建议您立刻将论坛系统程序升级至最新版本',

// 快速跳转菜单
'Go'						=>	'直达',		// submit button in forum jump
'Jump to'					=>	'版块快速切换：',

// extern.php RSS 订阅输出
'RSS description'			=>	'来自 %s 的最新主题动态',
'RSS description topic'		=>	'来自版块 %s 的最新互动回复',
'RSS reply'					=>	'回复：',	// The topic subject will be appended to this string (to signify a reply)

// 无障碍辅助
'Skip to content'			=>	'跳过导航直接进入论坛正文',

// Debug 调试与性能监控信息
'Querytime'					=>	'当前页面生成耗时 %1$s 秒（其中 PHP 占 %2$s%% - 数据库占 %3$s%%），共执行了 %4$s 次 SQL 查询',
'Debug table'				=>	'系统底层调试跟踪信息',
'Debug summary'				=>	'数据库 SQL 查询效能统计',
'Query times'				=>	'耗时（秒）',
'Query'						=>	'执行语句',
'Total query time'			=>	'SQL 查询总耗时',

// 系统错误页面
'Forum error header'		=> '抱歉，当前页面未能成功加载',
'Forum error description'	=> '这可能只是临时的服务器波动造成的，您可以直接刷新页面重试。如果问题依旧存在，请等待 5 到 10 分钟后再试',
'Forum error location'		=> '错误发生在文件 %2$s 的第 %1$s 行',
'Forum error db reported'	=> '数据库抛出异常：',
'Forum error db query'		=> '执行失败的语句：',

// 侧边栏/导航菜单分类
'Menu admin'		=> '后台管理菜单',
'Menu profile'		=> '个人配置菜单',

);