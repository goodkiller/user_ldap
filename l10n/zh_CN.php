<?php $TRANSLATIONS = array(
"<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behaviour. Please ask your system administrator to disable one of them." => "<b>警告：</b>应用 user_ldap 和 user_webdavauth 不兼容。您可能遭遇未预料的行为。请垂询您的系统管理员禁用其中一个。",
"Host" => "主机",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "可以忽略协议，但如要使用SSL，则需以ldaps://开头",
"Base DN" => "Base DN",
"You can specify Base DN for users and groups in the Advanced tab" => "您可以在高级选项卡里为用户和组指定Base DN",
"User DN" => "User DN",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "客户端使用的DN必须与绑定的相同，比如uid=agent,dc=example,dc=com\n如需匿名访问，将DN和密码保留为空",
"Password" => "密码",
"For anonymous access, leave DN and Password empty." => "启用匿名访问，将DN和密码保留为空",
"User Login Filter" => "用户登录过滤",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action." => "定义当尝试登录时的过滤器。 在登录过程中，%%uid将会被用户名替换",
"use %%uid placeholder, e.g. \"uid=%%uid\"" => "使用 %%uid作为占位符，例如“uid=%%uid”",
"User List Filter" => "用户列表过滤",
"Defines the filter to apply, when retrieving users." => "定义拉取用户时的过滤器",
"without any placeholder, e.g. \"objectClass=person\"." => "没有任何占位符,如 \"objectClass=person\".",
"Group Filter" => "组过滤",
"Defines the filter to apply, when retrieving groups." => "定义拉取组信息时的过滤器",
"without any placeholder, e.g. \"objectClass=posixGroup\"." => "无需占位符，例如\"objectClass=posixGroup\"",
"Port" => "端口",
"Base User Tree" => "基础用户树",
"Base Group Tree" => "基础组树",
"Group-Member association" => "组成员关联",
"Use TLS" => "使用TLS",
"Do not use it for SSL connections, it will fail." => "不要在SSL链接中使用此选项，会导致失败。",
"Case insensitve LDAP server (Windows)" => "大小写敏感LDAP服务器(Windows)",
"Turn off SSL certificate validation." => "关闭SSL证书验证",
"If connection only works with this option, import the LDAP server's SSL certificate in your ownCloud server." => "如果链接仅在此选项时可用，在您的ownCloud服务器中导入LDAP服务器的SSL证书。",
"Not recommended, use for testing only." => "暂不推荐，仅供测试",
"User Display Name Field" => "用户显示名称字段",
"The LDAP attribute to use to generate the user`s ownCloud name." => "用来生成用户的ownCloud名称的 LDAP属性",
"Group Display Name Field" => "组显示名称字段",
"The LDAP attribute to use to generate the groups`s ownCloud name." => "用来生成组的ownCloud名称的LDAP属性",
"in bytes" => "字节数",
"in seconds. A change empties the cache." => "以秒计。修改将清空缓存。",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "将用户名称留空(默认)。否则指定一个LDAP/AD属性",
"Help" => "帮助"
);
