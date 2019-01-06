<?php
/**
*
* This file is part of the phpBB Forum Software package.
* @简体中文语言　David Yin <https://www.phpbbchinese.com/>
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> '这里您可以进行论坛的基本操作.',
	'BOARD_INDEX_TEXT'				=> '论坛首页名称',
	'BOARD_INDEX_TEXT_EXPLAIN'		=> '此文本是显示在论坛首页导航。如果不指定，将默认显示“论坛首页”。',
	'BOARD_STYLE'					=> '论坛风格',
	'CUSTOM_DATEFORMAT'				=> '自定义…',
	'DEFAULT_DATE_FORMAT'			=> '日期格式',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> '日期格式和 PHP 定义相同 <code>date</code> 函数。',
	'DEFAULT_LANGUAGE'				=> '默认语言',
	'DEFAULT_STYLE'					=> '默认风格',
	'DEFAULT_STYLE_EXPLAIN'			=> '新注册用户默认风格。',
	'DISABLE_BOARD'					=> '关闭论坛',
	'DISABLE_BOARD_EXPLAIN'			=> '这将让除了管理员和版主以外的用户无法使用论坛。 您可以输入一段简单的文字描述原因(255个字符以内)。',
	'DISPLAY_LAST_SUBJECT'			=> '在版面列表中显示最新发表的帖子标题',
	'DISPLAY_LAST_SUBJECT_EXPLAIN'	=> '最新发帖标题将在版面列表里显示为超链接并指向帖子。来自密码保护和用户没有访问权限的版面的最新帖子标题将不显示。',
	'GUEST_STYLE'					=> '访客风格',
	'GUEST_STYLE_EXPLAIN'			=> '访客专用风格。',
	'OVERRIDE_STYLE'				=> '覆盖用户界面',
	'OVERRIDE_STYLE_EXPLAIN'		=> '使用默认的风格覆盖用户（包括游客）所选风格。',
	'SITE_DESC'						=> '站点描述',
	'SITE_HOME_TEXT'				=> '主站首页名称',
	'SITE_HOME_TEXT_EXPLAIN'		=> '此文本在论坛导航中将显示为一个链接指向您的网站主页。如果不指定，将默认显示为“首页”。',
	'SITE_HOME_URL'					=> '主站 URL',
	'SITE_HOME_URL_EXPLAIN'			=> '如果指定，一个链接到此地址将显示在论坛导航，论坛 logo 将链接到此地址取代论坛首页。一个绝对地址是必要的，例如<samp>http://www.phpbb.com</samp>。',
	'SITE_NAME'						=> '站点名称',
	'SYSTEM_TIMEZONE'            => '访客时区',
	'SYSTEM_TIMEZONE_EXPLAIN'         => '时区用来为未登录的用户（游客，爬虫）显示时区。新用户在注册过程中选择时区并且可以在登录后的用户控制面板中修改。',
	'WARNINGS_EXPIRE'				=> '警告失效时间',
	'WARNINGS_EXPIRE_EXPLAIN'		=> '用户记录警告自动消失的天数。设为 0 使警告永不过期。',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> '这里您可以 启用/禁用 论坛的功能',

	'ALLOW_ATTACHMENTS'			=> '允许附件',
	'ALLOW_BIRTHDAYS'			=> '启用“生日”',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> '允许输入个人生日并在个人信息中显示年龄。请注意论坛首页中显示的生日列表是由另一项负载设置控制的。',
	'ALLOW_BOOKMARKS'			=> '允许主题收藏',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> '用户可以给主题加上书签，放入收藏夹内',
	'ALLOW_BBCODE'				=> '允许 BBCode',
	'ALLOW_FORUM_NOTIFY'		=> '允许订阅版面',
	'ALLOW_NAME_CHANGE'			=> '允许更改用户名',
	'ALLOW_NO_CENSORS'			=> '允许禁用敏感词过滤',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> '用户可以选择是否禁用帖子和短信中的敏感词自动过滤。',
	'ALLOW_PM_ATTACHMENTS'		=> '在短信中允许附件',
	'ALLOW_PM_REPORT'			=> '允许用户举报不良站内短信',
	'ALLOW_PM_REPORT_EXPLAIN'	=> '启用后, 用户会增加举报站内短信的选项，随后被举报的短信会出现在版主控制面板上。',
	'ALLOW_QUICK_REPLY'			=> '允许快速回复',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> '关闭此选项将关闭整个论坛的快速回复，当启用后由各个版面的设定决定其快速回复功能是否打开。',
	'ALLOW_QUICK_REPLY_BUTTON'	=> '提交后将开启所有版面的快速回复功能',
	'ALLOW_SIG'					=> '允许签名档',
	'ALLOW_SIG_BBCODE'			=> '在签名档中允许使用BBCode',
	'ALLOW_SIG_FLASH'			=> '在用户签名档中允许使用<code>[FLASH]</code> 标签',
	'ALLOW_SIG_IMG'				=> '在用户签名档中允许使用<code>[IMG]</code> 标签',
	'ALLOW_SIG_LINKS'			=> '在用户签名档中允许使用链接',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> '如果禁用 <code>[URL]</code> 标签和自动链接解析都会失效.',
	'ALLOW_SIG_SMILIES'			=> '在用户签名档中使用表情图标',
	'ALLOW_SMILIES'				=> '允许表情图标',
	'ALLOW_TOPIC_NOTIFY'		=> '允许订阅主题',
	'BOARD_PM'					=> '站内短信',
	'BOARD_PM_EXPLAIN'			=> '启用所有用户的站内短信.',
	'ALLOW_BOARD_NOTIFICATIONS' => '允许论坛通知',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> '头像是用户用于展示自己的一幅小图片。根据风格有所不同，不过它们通常显示在用户发布的帖子旁边。这里您可以决定用户是否能和如何定义他们的头像。请注意如果允许用户上传头像，您必须建立下面的目录并保证这个目录对于 web 服务器是可写的。同时也要注意这个文件大小只对头像上传有效，对于链接的头像是没有限制的。',

	'ALLOW_AVATARS'					=> '启用头像',
	'ALLOW_AVATARS_EXPLAIN'			=> '允许使用头像；<br>如果您禁用了头像功能，论坛将不再显示用户头像，但是会员在会员控制面板中仍可以查看和下载自己的头像。',
	'ALLOW_GRAVATAR'				=> '启用 gravatar 头像',
	'ALLOW_LOCAL'					=> '运行使用系统头像',
	'ALLOW_REMOTE'					=> '允许使用外部头像',
	'ALLOW_REMOTE_EXPLAIN'			=> '从其他网站链接的头像',
	'ALLOW_REMOTE_UPLOAD'			=> '允许远程上传头像',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> '允许会员上传来自另一个网站的头像。',
	'ALLOW_UPLOAD'					=> '允许头像上传',
	'AVATAR_GALLERY_PATH'			=> '系统头像册路径',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> '在您的 phpBB 论坛根目录下的预先设定的头像画册，例如 <samp>images/avatars/gallery</samp>。<br>双点号，比如<samp>../</samp> 会被自动过滤，以免安全隐患。',
	'AVATAR_STORAGE_PATH'			=> '头像存储路径',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> '在您的 phpBB 论坛根目录下的路径，例如 <samp>images/avatars/upload</samp>。<br>如果路径不可写，则头像上传 <strong>将不可行</strong>。<br>双点号，比如<samp>../</samp> 会被自动过滤，以免安全隐患。',
	'MAX_AVATAR_SIZE'				=> '最大头像尺寸',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> '(用像素表示的宽 x 高)',
	'MAX_FILESIZE'					=> '最大的头像文件大小',
	'MAX_FILESIZE_EXPLAIN'			=> '针对上传的头像文件，如果设为 0 的话上传文件大小只受限于您的 PHP 配置。',
	'MIN_AVATAR_SIZE'				=> '最小的头像文件大小',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> '(用像素表示的宽 x 高)',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> '这里您可以设置站内短信的所有默认设置',

	'ALLOW_BBCODE_PM'			=> '在站内短信中允许 BBCode',
	'ALLOW_FLASH_PM'			=> '允许使用 <code>[FLASH]</code>',
	'ALLOW_FLASH_PM_EXPLAIN'	=> '这个选项设置是否允许在站内短信中使用 flash，在这里启用后用户依然要视论坛的权限而决定是否可用。',
	'ALLOW_FORWARD_PM'			=> '允许转发站内短信',
	'ALLOW_IMG_PM'				=> '允许使用 <code>[IMG]</code>',
	'ALLOW_MASS_PM'				=> '允许对多个用户和用户组发送站内短信',
	'ALLOW_MASS_PM_EXPLAIN'      => '对用户组的发送可以在用户组设置页面对每个用户组进行单独设置.',
	'ALLOW_PRINT_PM'			=> '允许打印格式查看站内短信',
	'ALLOW_QUOTE_PM'			=> '允许在站内短信中引用',
	'ALLOW_SIG_PM'				=> '允许在站内短信中使用签名档',
	'ALLOW_SMILIES_PM'			=> '允许在站内短信中使用表情图标',
	'BOXES_LIMIT'				=> '每个文件夹中的最大信件数量',
	'BOXES_LIMIT_EXPLAIN'		=> '用户每个文件夹中的短信将不能超过这个数量。 设置为 0 将不作限制。',
	'BOXES_MAX'					=> '每个用户的最大文件夹数量',
	'BOXES_MAX_EXPLAIN'			=> '默认情况下用户可以创建文件夹来存储自己的短信。',
	'ENABLE_PM_ICONS'			=> '在站内短信中允许使用主题图标',
	'FULL_FOLDER_ACTION'		=> '文件夹满时的默认动作',
	'FULL_FOLDER_ACTION_EXPLAIN'=> '如果用户的文件夹满了，默认进行的操作。只有“已发送”文件夹的默认操作固定为删除旧短信。',
	'HOLD_NEW_MESSAGES'			=> '挂起新信件',
	'PM_EDIT_TIME'				=> '编辑时限',
	'PM_EDIT_TIME_EXPLAIN'		=> '对于没有发送完成的信件的编辑时限。设置为 0 将不作限制。', 
	'PM_MAX_RECIPIENTS'         => '收信人的数量上限',
	'PM_MAX_RECIPIENTS_EXPLAIN'   => '对单个站内短信的收信人数量进行限制。如果设置为 0 将不作限制。此设置可以在用户组设置页面中对每个用户组单独进行设置。',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> '这里您可以设置发帖的所有默认设置',
	'ALLOW_POST_LINKS'					=> '在帖子/短信中允许链接',
	'ALLOW_POST_LINKS_EXPLAIN'			=> '如果禁用了<code>[URL]</code> 标签将停止链接解析。',
	'ALLOWED_SCHEMES_LINKS'				=> '链接中允许使用的协议列表',
	'ALLOWED_SCHEMES_LINKS_EXPLAIN'		=> '用户只能使用无协议头的网址，或者在逗号分隔的允许协议列表中挑一个。',
	'ALLOW_POST_FLASH'					=> '允许在帖子中使用 <code>[FLASH]</code> BBCode 标签',
	'ALLOW_POST_FLASH_EXPLAIN'			=> '如果禁用 <code>[FLASH]</code> BBCode 标签， 将禁止在帖子中使用flash。 否则由权限系统控制哪些用户可以使用 <code>[FLASH]</code> BBCode 标签。',

	'BUMP_INTERVAL'					=> '顶帖间隔',
	'BUMP_INTERVAL_EXPLAIN'			=> '主题中最后一个帖子发表到关闭回复的分钟数、小时数或者天数， 设定为 0 则关闭顶贴功能。',
	'CHAR_LIMIT'					=> '每个帖子的最大字数',
	'CHAR_LIMIT_EXPLAIN'			=> '设置为 0 则不作限制。',
	'DELETE_TIME'					=> '帖子删除时限',
	'DELETE_TIME_EXPLAIN'			=> '设定新帖子的可删除时间。设置为 0 则不作限制。',
	'DISPLAY_LAST_EDITED'			=> '显示最后编辑信息',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> '选择是否在帖子上显示最后被谁修改的信息。',
	'EDIT_TIME'						=> '编辑时限',
	'EDIT_TIME_EXPLAIN'				=> '新帖子在多长时间内可编辑。设置为 0 则不作限制。',
	'FLOOD_INTERVAL'				=> '灌水间隔',
	'FLOOD_INTERVAL_EXPLAIN'		=> '新帖子发表之间的秒数。要让用户不受此限制，请修改其权限。',
	'HOT_THRESHOLD'					=> '热门帖子的帖数标准',
	'HOT_THRESHOLD_EXPLAIN'			=> '成为热门帖子需要的最小帖子数，设置为 0 则取消热帖功能。',
	'MAX_POLL_OPTIONS'				=> '投票的最大选项数',
	'MAX_POST_FONT_SIZE'			=> '帖子中可以使用的最大字体',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> '设置为 0 则不作限制。',
	'MAX_POST_IMG_HEIGHT'			=> '帖子中允许的最大图片高度',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> '作用于图片和 flash，设置为 0 则不作限制。',
	'MAX_POST_IMG_WIDTH'			=> '帖子中允许的最大图片宽度',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> '作用于图片和 flash，设置为 0 则不作限制。',
	'MAX_POST_URLS'					=> '帖子中允许的最大链接数量',
	'MAX_POST_URLS_EXPLAIN'			=> '设置为 0 则不作限制。',
	'MIN_CHAR_LIMIT'				=> '文章和站内短信的最小字符数限制',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> '用户在发帖或发站内短信时内容的最小字符数。最小值是 1。',
	'POSTING'						=> '发帖',
	'POSTS_PER_PAGE'				=> '每页帖子数',
	'QUOTE_DEPTH_LIMIT'				=> '引用的最大深度',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> '设置为 0 则不作限制。',
	'SMILIES_LIMIT'					=> '每个帖子中的最大表情数量',
	'SMILIES_LIMIT_EXPLAIN'			=> '设置为 0 则不作限制。',
	'SMILIES_PER_PAGE'				=> '每页表情数量',
	'TOPICS_PER_PAGE'				=> '每页主题数',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> '这里您可以设置用户签名档的默认参数',

	'MAX_SIG_FONT_SIZE'				=> '签名档最大可用字体',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> '用户签名档中允许的最大字体，设置为 0 则无限制。',
	'MAX_SIG_IMG_HEIGHT'			=> '签名档最大图片高度',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> '作用于图片和 flash，设置为 0 则无限制。',
	'MAX_SIG_IMG_WIDTH'				=> '签名档最大图片宽度',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> '作用于图片和 flash，设置为 0 则无限制。',
	'MAX_SIG_LENGTH'				=> '最大签名档长度',
	'MAX_SIG_LENGTH_EXPLAIN'		=> '用户签名档的最大字符长度。',
	'MAX_SIG_SMILIES'				=> '签名档中的最大表情图标数量',
	'MAX_SIG_SMILIES_EXPLAIN'		=> '设置为 0 则无限制。',
	'MAX_SIG_URLS'					=> '签名档中的最大链接数量',
	'MAX_SIG_URLS_EXPLAIN'			=> '设置为 0 则无限制。',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> '这里您可以进行用户注册和资料修改相关的设置',

	'ACC_ACTIVATION'			=> '帐号激活',
	'ACC_ACTIVATION_EXPLAIN'	=> '这决定了用户在访问论坛之前是否需要确认。您也可以完全关闭新用户注册。为了使用用户或管理员激活功能，论坛邮件功能必须开启。',
	'ACC_ACTIVATION_WARNING'		=> '注意，目前选择的用户帐号激活方法需要启用“允许论坛发送 Email”，否则注册将被停用。建议您选择其它的帐号激活方法或者重新启用“允许论坛发送 Email”。',
	'NEW_MEMBER_POST_LIMIT'			=> '新用户发帖数目限制',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> '新用户会被归入 <em>新注册用户</em> 组直到其发表足够多的文章。您可以使用此用户组的组权限来限制其使用站内短信以及方便发文审核。<strong>设置为0则不启用此项功能。</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> '设置新注册用户组为默认组',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> '如果设置为是， 并且设定了【新用户发帖数目限制】，新用户不仅会被加入到 <em>新注册用户</em> 组，这个用户组也会成为他的默认组。这将方便管理员为该组指定一个默认等级和组头像。',

	'ACC_ADMIN'					=> '由管理员',
	'ACC_DISABLE'				=> '不能注册',
	'ACC_NONE'					=> '无需激活（立即访问）',
	'ACC_USER'					=> '由用户（邮箱验证）',
//	'ACC_USER_ADMIN'			=> '用户 + 管理员',
	'ALLOW_EMAIL_REUSE'			=> '允许重复使用 email 地址',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> '不同的用户可以使用相同的 email 注册。',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'COPPA 传真号',
	'COPPA_MAIL'				=> 'COPPA 邮件地址',
	'COPPA_MAIL_EXPLAIN'		=> '这是父母用于发送 COPPA 注册表单的邮件地址',
	'ENABLE_COPPA'				=> '启用 COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> '这需要用户说明自己是否大于13周岁以遵守美国 COPPA 法规。如果禁止，COPPA 用户组将不再显示。',
	'MAX_CHARS'					=> '最大',
	'MIN_CHARS'					=> '最小',
	'NO_AUTH_PLUGIN'			=> '没有发现合适的认证插件。',
	'PASSWORD_LENGTH'			=> '密码长度',
	'PASSWORD_LENGTH_EXPLAIN'	=> '密码的最大和最小长度。',
	'REG_LIMIT'					=> '注册尝试次数',
	'REG_LIMIT_EXPLAIN'			=> '用户在锁定注册会话前的最多尝试次数。',
	'USERNAME_ALPHA_ONLY'		=> '只允许英文字母',
	'USERNAME_ALPHA_SPACERS'	=> '英文字母和空格',
	'USERNAME_ASCII'			=> 'ASCII (没有国际化unicode)',
	'USERNAME_LETTER_NUM'		=> '任何字母和数字',
	'USERNAME_LETTER_NUM_SPACERS'	=> '任何字母，数字和空格',
	'USERNAME_CHARS'			=> '限制用户名字符',
	'USERNAME_CHARS_ANY'		=> '任何字符',
	'USERNAME_CHARS_EXPLAIN'	=> '限制用于用户名的字符类型，包括：空格， -， +， _， [ 和 ]',
	'USERNAME_LENGTH'			=> '用户名长度',
	'USERNAME_LENGTH_EXPLAIN'	=> '用户名字符的最大和最小长度。',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'ATOM 管理',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> '此模块提供多种 ATOM 输出， 并转换 BBCode 为可阅读的内容。',

	'ACP_FEED_GENERAL'					=> '综合设定',
	'ACP_FEED_POST_BASED'				=> '基于文章的输出设定',
	'ACP_FEED_TOPIC_BASED'				=> '基于话题的输出设定',
	'ACP_FEED_SETTINGS_OTHER'			=> '其它设定',

	'ACP_FEED_ENABLE'					=> '启用 ATOM',
	'ACP_FEED_ENABLE_EXPLAIN'			=> '对整个论坛启用或停止 ATOM 输出。<br>关闭此选项会关闭论坛的所有 ATOM 输出，以下的选项将不再起作用。',
	'ACP_FEED_LIMIT'					=> '数量',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'ATOM 输出条目的最大数量。',

	'ACP_FEED_OVERALL'					=> '启用整个论坛的 ATOM 输出',
	'ACP_FEED_OVERALL_EXPLAIN'			=> '整个论坛的新帖。',
	'ACP_FEED_FORUM'					=> '启用单个版面 ATOM 输出',
	'ACP_FEED_FORUM_EXPLAIN'			=> '单个版面和子版面的最新文章。',
	'ACP_FEED_TOPIC'					=> '启用单个话题 ATOM 输出',
	'ACP_FEED_TOPIC_EXPLAIN'			=> '单个话题的最新文章.',

	'ACP_FEED_TOPICS_NEW'				=> '启用新话题 ATOM 输出',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> '最新话题 ATOM 输出最近发表的话题及其第一篇文章的内容。',
	'ACP_FEED_TOPICS_ACTIVE'			=> '启用活跃话题 ATOM 输出',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> '活跃话题 ATOM 输出最近发表的活跃话题及其最后一篇回复的内容。',
	'ACP_FEED_NEWS'						=> '各版面最新文章 ATOM 输出',
	'ACP_FEED_NEWS_EXPLAIN'				=> '从以下版面中各摘取最新的一篇文章。如果无指定版面则关闭此项输出。<br>要选定或反选多个版面，请按住<samp>CTRL</samp>键用鼠标左键点选。',

	'ACP_FEED_OVERALL_FORUMS'			=> '启用版面 ATOM 输出',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> '所有版面 ATOM 输出会显示所有版面列表.',

	'ACP_FEED_HTTP_AUTH'				=> '允许 HTTP 验证',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> '启用此验证后，用户可以访问到其他无权限用户所无法访问的内容，需要添加 <samp>auth=http</samp> 参数到 URL。请注意一些 PHP 版本需要在 .htaccess 文件上做额外的设置。更多信息请搜索相关文章。',
	'ACP_FEED_ITEM_STATISTICS'			=> '条目统计',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> '显示独立统计数<br>(作者， 日期和时间， 回复数， 查看数)',
	'ACP_FEED_EXCLUDE_ID'				=> '排除下列版面',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> '来自这些版面的内容将<strong>不会被输出</strong>。无指定版面则输出所有版面内容。<br>要选定或反选多个版面，请按住<samp>CTRL</samp>键用鼠标左键点选。',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'				=> '这里您可以对论坛的验证机制进行设置，有多种方式应对 Spam 机器人的注册尝试。',
	'ACP_VC_EXT_GET_MORE'					=> '对于附加的(可能更好)反垃圾邮件插件，访问 <a href="https://www.phpbb.com/go/anti-spam-ext"><strong>phpBB.com扩展数据库</strong></a>。更多防止论坛垃圾邮件的信息，访问 <a href="https://www.phpbb.com/go/anti-spam"><strong>phpBB.com知识库</strong></a>。',
	'AVAILABLE_CAPTCHAS'					=> '可用插件',
	'CAPTCHA_UNAVAILABLE'					=> '无法使用验证图片因为服务器环境不支持。',
	'CAPTCHA_GD'							=> 'GD 验证图片',
	'CAPTCHA_GD_3D'							=> 'GD 3D 验证图片',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'GD 验证图片背景噪点',
	'CAPTCHA_GD_EXPLAIN'					=> '使用 GD 生成更高级的验证图片。',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> '使用基于 GD 的前景噪点。',
	'CAPTCHA_GD_X_GRID'						=> 'GD 验证图片 X 轴背景噪点',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> '设置越小，越难辨别。 0 将禁用 X 轴的背景噪点。',
	'CAPTCHA_GD_Y_GRID'						=> 'GD 验证图片 Y 轴背景噪点',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> '设置越小，越难辨别。 0 将禁用 Y 轴的背景噪点。',
	'CAPTCHA_GD_WAVE'                  => 'GD 验证图片畸变波',
	'CAPTCHA_GD_WAVE_EXPLAIN'            => '在验证图片上使用畸变波。',
	'CAPTCHA_GD_3D_NOISE'               => '增加 3D 噪点',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'         => '这会在验证图片的字母上增加额外的噪点。',
	'CAPTCHA_GD_FONTS'                  => '使用不同字体',
	'CAPTCHA_GD_FONTS_EXPLAIN'            => '这个设置控制字体使用的数量。您可以使用默认的字体或导入其他的字体。也可以添加小写字符。',
	'CAPTCHA_FONT_DEFAULT'               => '默认',
	'CAPTCHA_FONT_NEW'                  => '新字体',
	'CAPTCHA_FONT_LOWER'               => '同时使用小写',
	'CAPTCHA_NO_GD'							=> '验证图片(无GD)',
	'CAPTCHA_PREVIEW_MSG'					=> '您的可视化验证设定尚未保存，这只是预览。',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> '当前设定下的验证图片预览。',

	'CAPTCHA_SELECT'						=> '选择验证图片插件',
	'CAPTCHA_SELECT_EXPLAIN'				=> '下拉框显示被识别的可用验证图片插件。灰色项为需要预先设定方可使用的插件。',
	'CAPTCHA_CONFIGURE'						=> '验证图片设定',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> '设定选中的验证图片。',
	'CONFIGURE'								=> '设定',
	'CAPTCHA_NO_OPTIONS'					=> '此验证图片没有可设置的选项。',

	'VISUAL_CONFIRM_POST'					=> '启用游客发文可视化验证',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> '当匿名用户发表文章时会被要求输入一组随机字符以防止机器人发布垃圾信息。',
	'VISUAL_CONFIRM_REG'					=> '在会员注册时启用可视化验证',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> '在新会员注册时会被要求输入一组随机字符以防止机器人注册。',
	'VISUAL_CONFIRM_REFRESH'				=> '允许用户刷新验证图片',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> '当用户无法辨认当前验证图片时允许其刷新。一些插件可能不支持这个选项。',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> '以下设定了送往用户浏览器的数据。在大多数情况下使用默认设置就已足够。如果您自行调整，不正确的设置将会使用户无法登录论坛。如果你的用户无法保持登入状态，可以访问 <strong><a href="https://www.phpbb.com/support/go/cookie-settings">phpBB.com Knowledge Base - Fixing incorrect cookie settings</a></strong> 。',
	'COOKIE_DOMAIN'				=> 'Cookie 作用域',
	'COOKIE_DOMAIN_EXPLAIN'		=> '大多数时候，Cookie 作用域是可选项。如果你不确定，可留空。<br><br> 比如你的论坛同其它软件组合在一起，或者有多个域名，就需要决定 cookie 域。 如果你的域名是  <i>example.com</i> 和 <i>forums.example.com</i> ，或者是  <i>forums.example.com</i> 和 <i>blog.example.com</i>。 去掉子域名，直到你找到共同域， <i>example.com</i> 。 在共同域名前加上一个英文句点  .example.com （注意看开头的句点）。',
	'COOKIE_NAME'				=> 'Cookie 名称',
	'COOKIE_NAME_EXPLAIN'		=> '这可以是任何你希望的，确保原创。当你修改 cookie 设置时，此名称也应当被修改。',
	'COOKIE_NOTICE'				=> 'Cookie 提示',
	'COOKIE_NOTICE_EXPLAIN'		=> '启用 Cookie 提示后，用户会在访问论坛时得到提示。法律规定某些论坛内容必须提示用户。',	
	'COOKIE_PATH'				=> 'Cookie 路径',
	'COOKIE_PATH_EXPLAIN'		=> '这通常是同你的脚本文件路径相同，比如用一个斜杠，表示 Cookie 在整个网站域名内都可用。',
	'COOKIE_SECURE'				=> 'Cookie 安全',
	'COOKIE_SECURE_EXPLAIN'		=> '如果您的服务器使用 SSL 协议，则启用这个选项，否则请禁用。 如果没有使用 SSL 而启用这个选项，将会使论坛转向错误。',
	'ONLINE_LENGTH'				=> '查看在线时间跨度',
	'ONLINE_LENGTH_EXPLAIN'		=> '非活动的用户在多少分钟后不再显示于在线用户列表。值越高将需要越多的资源生成列表。',
	'SESSION_LENGTH'			=> '会话长度',
	'SESSION_LENGTH_EXPLAIN'	=> '会话多少秒后超时。',
));

// Contact Settings
$lang = array_merge($lang, array(
	'ACP_CONTACT_SETTINGS_EXPLAIN'		=> '这里您可以启用或禁用联系页，也可以添加文本显示在联系页面。',

	'CONTACT_US_ENABLE'				=> '启用联系页',
	'CONTACT_US_ENABLE_EXPLAIN'		=> '此页允许用户发送邮件给论坛管理员。请注意论坛全局的 Email 功能选项必须同时启用才生效，你可以在 综合 》 客户端通信 》 Email 设定 设置该选项。 ',

	'CONTACT_US_INFO'				=> '联系信息',
	'CONTACT_US_INFO_EXPLAIN'		=> '显示在联系页面的提示信息',
	'CONTACT_US_INFO_PREVIEW'		=> '联系页信息 - 预览',
	'CONTACT_US_INFO_UPDATED'		=> '联系页信息已更新。',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> '这里您可以启用或禁用部分论坛功能以降低服务器负载。 对于大多数服务器并不需要禁用任何功能。不过在某些系统和合租环境下禁用一些不必要的功能可以提高性能。您也可以指定系统的负载限制，超出限制的浏览将被拒绝。',

	'ALLOW_CDN'						=> '允许使用第三方内容分发网络',
	'ALLOW_CDN_EXPLAIN'				=> '如果此设置启用，一些文件将被第三方服务器提供，而不是您的服务器。这降低了网络带宽需求，但可能对于一些论坛管理员出现隐私问题。默认 phpBB 安装时这个包括从 Google的 CDN 加载 “jQuery” 库 和 “Open Sans” 字体。',
	'ALLOW_LIVE_SEARCHES'			=> '允许实时搜索',
	'ALLOW_LIVE_SEARCHES_EXPLAIN'	=> '如果此设置启用，用户输入时可看到关键词提示。',
	'CUSTOM_PROFILE_FIELDS'			=> '自定义用户资料',
	'LIMIT_LOAD'					=> '系统负载限制',
	'LIMIT_LOAD_EXPLAIN'			=> '如果系统一分钟内的平均负载超过这个值论坛将自动关闭。值 1.0 等于单颗处理器的100%使用率，这只工作于基于 UNIX 的系统，并且可以访问得到使用率信息。当论坛程序无法获得负载率的值的时候，会被重置为 0',
	'LIMIT_SESSIONS'				=> '会话数限制',
	'LIMIT_SESSIONS_EXPLAIN'		=> '如果一分钟内的会话数超过这个值论坛将自动关闭。设置为 0 将不作限制。',
	'LOAD_CPF_MEMBERLIST'			=> '允许风格在会员列表中显示自定义资料',
	'LOAD_CPF_PM'					=> '在站内短信里显示自定义资料',
	'LOAD_CPF_VIEWPROFILE'			=> '在用户资料中显示自定义资料',
	'LOAD_CPF_VIEWTOPIC'			=> '在帖子查看中显示自定义资料',
	'LOAD_USER_ACTIVITY'			=> '显示用户活跃统计',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> '在用户资料和用户控制面板中显示活跃版面和主题。在帖子数超过百万的论坛上建议关闭此功能。',
	'LOAD_USER_ACTIVITY_LIMIT'		=> '用户活动帖子的限制',
	'LOAD_USER_ACTIVITY_LIMIT_EXPLAIN'	=> '拥有超过此数目的用户将不会显示其活跃主题或版面。 设置为 0 来取消限制。',
	'READ_NOTIFICATION_EXPIRE_DAYS'	=> '已读通知到期',
	'READ_NOTIFICATION_EXPIRE_DAYS_EXPLAIN' => '已读通知自动删除的天数，设置为 0 通知将永久保存。',
	'RECOMPILE_STYLES'				=> '重新编译旧的风格组件',
	'RECOMPILE_STYLES_EXPLAIN'		=> '检查文件系统中更新风格组件并重新编译。',
	'YES_ACCURATE_PM_BUTTON'			=> '在主题页启用精准站内短信指示标签',
	'YES_ACCURATE_PM_BUTTON_EXPLAIN'	=> '如果启用这个设置，只有拥有阅读短信权限的用户，才会显示站内短信按钮。',	
	'YES_ANON_READ_MARKING'			=> '允许游客标记主题',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> '为游客存储已读/未读状态。如果禁用，对于游客所有帖子将显示为已读。',
	'YES_BIRTHDAYS'					=> '启用生日列表',
	'YES_BIRTHDAYS_EXPLAIN'			=> '如果禁用，论坛将不会显示生日列表。要使这个选项生效，“生日”功能也必须被启用。',
	'YES_JUMPBOX'					=> '显示跳转列表',
	'YES_MODERATORS'				=> '显示论坛版主',
	'YES_ONLINE'					=> '显示在线用户',
	'YES_ONLINE_EXPLAIN'			=> '在首页，版面和帖子中显示在线用户信息。',
	'YES_ONLINE_GUESTS'				=> '查看在线用户时显示游客在线信息',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> '在查看在线用户时，显示游客在线信息。',
	'YES_ONLINE_TRACK'				=> '显示用户在线/离线信息',
	'YES_ONLINE_TRACK_EXPLAIN'		=> '在用户资料和查看帖子页面中显示用户在线信息。',
	'YES_POST_MARKING'				=> '显示带点主题',
	'YES_POST_MARKING_EXPLAIN'		=> '带点的主题表示用户参与过这个主题。',
	'YES_READ_MARKING'				=> '允许服务器端标记',
	'YES_READ_MARKING_EXPLAIN'		=> '在数据库中保存已读/未读信息而不是存在 cookie 上。',
	'YES_UNREAD_SEARCH'            	=> '允许搜索未读文章',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB 支持认证插件和模块。这允许您决定如何验证用户是否登录。默认的四个插件是 DB，LDAP， Apache 和 OAuth。并不是所有方式都需要额外信息，所以您只需要填写所选用的方式需要的信息即可。',

	'AUTH_METHOD'				=> '选择认证方式',

	'AUTH_PROVIDER_OAUTH_ERROR_ELEMENT_MISSING'	=> '每个启用的 OAuth 服务的密钥和密码都要提供。每个 OAuth 服务商 只需要一个个。',
	'AUTH_PROVIDER_OAUTH_EXPLAIN'				=> '每个 OAuth 提供商需要唯一的密码和密钥，为了验证外部服务器。这些应该由 OAuth 服务提供，当您注册您的网站时应该输入准确。<br>任何没有密钥和密码的服务在这儿将不可用，也要注意用户仍可以注册和登录使用 DB 验证插件。',
	'AUTH_PROVIDER_OAUTH_KEY'					=> '密钥 （Key）',
	'AUTH_PROVIDER_OAUTH_TITLE'					=> 'OAuth',
	'AUTH_PROVIDER_OAUTH_SECRET'				=> '密码 （Secret）',

	'APACHE_SETUP_BEFORE_USE'	=> '您必须在转换到这种认证模式前建立 apache 认证功能。记住您用于 apache 认证的用户名必须和 phpBB 的用户名相同。',

	'LDAP'							=> 'LDAP',
	'LDAP_DN'						=> 'LDAP 基础<var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> '这是唯一的名字，用于定位用户信息，例如 <samp>o=My Company,c=US</samp>',
	'LDAP_EMAIL'					=> 'LDAP email 属性',
	'LDAP_EMAIL_EXPLAIN'			=> '将这个设置为用户的 email 属性名称(如果存在的话)，以便于为新用户自动设置 email 地址，留空的话将使第一次登录的用户 email 地址为空。',
	'LDAP_INCORRECT_USER_PASSWORD'	=> '使用指定的用户名密码绑定 LDAP 服务器失败。',
	'LDAP_NO_EMAIL'					=> '指定的 email 属性不存在。',
	'LDAP_NO_IDENTITY'				=> '无法为 %s 找到登录身份',
	'LDAP_PASSWORD'					=> 'LDAP 密码',
	'LDAP_PASSWORD_EXPLAIN'			=> '匿名绑定此处请留空，否则请填入上面用户的密码。这对于动态目录服务器是必需的。<br><strong>警告:</strong>此密码会被明文存储在数据库中，对于任何可以访问数据库或者可以查看此配置页面的人都是可见的。',
	'LDAP_PORT'						=> 'LDAP 服务器端口',
	'LDAP_PORT_EXPLAIN'				=> '选填。您可以指定用于连接 LDAP 服务器的端口，默认端口为 389。',
	'LDAP_SERVER'					=> 'LDAP 服务器名称',
	'LDAP_SERVER_EXPLAIN'			=> '如果使用 LDAP，这是 LDAP 服务器的域名或 IP 地址。并且您也可以指定一个 URL 例如 ldap://hostname:port/',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> '这是用于查找给定登录身份的关键字，例如 <var>uid</var>, <var>sn</var>。',
	'LDAP_USER'						=> 'LDAP 用户 <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> '如果绑定为匿名，此处请留空。如果填入，phpBB 会使用指定的唯一用户名在登录中寻找正确的用户，例如： <samp>uid=Username,ou=MyUnit,o=MyCompany,c=US</samp>。这对于Active Directory Server是必需的。',
	'LDAP_USER_FILTER'				=> 'LDAP 用户过滤',
	'LDAP_USER_FILTER_EXPLAIN'		=> '选填，您可以使用附加条件过滤搜索的对象。例如<samp>objectClass=posixGroup</samp> 将变成 <samp>(&(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> '这里配置服务器和域名相关的设定。请确保输入的数据是正确可靠的，错误将导致 email 包含错误信息，当输入域名时记住不包含 http:// 和其他协议头。只有当您的服务器使用一个特别的端口时才需要更改端口号，一般使用的都是 80 端口。',

	'ENABLE_GZIP'				=> '启用 GZip 压缩', 
	'ENABLE_GZIP_EXPLAIN'		=> '生成的页面将在发送到浏览器前被压缩。这将减少网络流量但是会增加服务器和客户端的 CPU 负载。需要 zlib 支持。',
	'FORCE_SERVER_VARS'			=> '强制设定服务器 URL',
	'FORCE_SERVER_VARS_EXPLAIN'	=> '如果设置为是，以下的设定将启用，来代替系统自己侦测到的值。',
	'ICONS_PATH'				=> '主题图标存储路径',
	'ICONS_PATH_EXPLAIN'		=> '相对于 phpBB 根目录的路径，例如 <samp>images/icons</samp>。',
	'MOD_REWRITE_ENABLE'		=> '启用路径重写',
	'MOD_REWRITE_ENABLE_EXPLAIN' => '启用后包含 ’app.php’ 的路径将重写 (例如app.php/foo 变成 /foo)。<strong>必须有 Apache服务器的 mod_rewrite 组件才能正常工作；如果此选项启用但没有 mod_rewrite，路径将损坏。</strong>。',
	'MOD_REWRITE_DISABLED'		=> '<strong>mod_rewrite</strong> 组件在您的 Apache 服务器上禁用，启用该组件或联系主机提供商如果您想启用此功能。',
	'MOD_REWRITE_INFORMATION_UNAVAILABLE' => '我们不能确定是否此服务器支持路径重写，此设置可能启用但如果地址重写不可用，生成的路径(如链接)可能损坏。如果您不确定是否您可以安全启用此功能，请联系您的主机提供商。',
	'PATH_SETTINGS'				=> '路径设定',
	'RANKS_PATH'				=> '等级图标存储路径',
	'RANKS_PATH_EXPLAIN'		=> '相对于 phpBB 根目录的路径，例如 <samp>images/ranks</samp>。',
	'SCRIPT_PATH'				=> '脚本路径',
	'SCRIPT_PATH_EXPLAIN'		=> 'phpBB 相对于域名的路径，例如 <samp>/phpBB3</samp>。',
	'SERVER_NAME'				=> '域名',
	'SERVER_NAME_EXPLAIN'		=> '论坛所在域名 (例如： <samp>www.foo.bar</samp>)。',
	'SERVER_PORT'				=> '服务器端口',
	'SERVER_PORT_EXPLAIN'		=> '服务器运行的端口，通常是 80。如果不清楚请不要更改。',
	'SERVER_PROTOCOL'			=> '服务协议',
	'SERVER_PROTOCOL_EXPLAIN'	=> '如果强制设定，这将用于服务器协议。如果留空或未强制设定，协议由 cookie 安全设定决定 (<samp>http://</samp> or <samp>https://</samp>)。',
	'SERVER_URL_SETTINGS'		=> '服务器 URL 设定',
	'SMILIES_PATH'				=> '表情图标存储路径',
	'SMILIES_PATH_EXPLAIN'		=> '相对于 phpBB 根目录的路径，例如 <samp>images/smilies</samp>。',
	'UPLOAD_ICONS_PATH'			=> '扩展名组图标存储路径',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> '相对于 phpBB 根目录的路径，例如 <samp>images/upload_icons</samp>。',
	'USE_SYSTEM_CRON'		=> '从系统计划任务 cron 运行定期任务',
	'USE_SYSTEM_CRON_EXPLAIN'		=> '关闭后 phpBB 将安排定期任务自动运行。启用后 phpBB 将不安排任何定期任务，而必须由服务器系统管理员来安排 <code>bin/phpbbcli.php cron:run</code> 运行间隔（例如每隔5分钟）。',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> '这里您可以进行会话和登录相关的设定。',

	'ALL'							=> '所有',
	'ALLOW_AUTOLOGIN'				=> '允许自动登录', 
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> '决定用户是否可以在浏览论坛时自动登录。', 
	'ALLOW_PASSWORD_RESET'			=> '允许密码重置("忘记密码")',
	'ALLOW_PASSWORD_RESET_EXPLAIN'	=> '确定是否能使用在登录页的"我忘记了自己的密码"链接来找回密码。如果使用外部验证机制您需要禁用此功能。',
	'AUTOLOGIN_LENGTH'				=> '自动登录失效时间 (天数)', 
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> '设置为 0 将取消限制。', 
	'BROWSER_VALID'					=> '浏览器验证',
	'BROWSER_VALID_EXPLAIN'			=> '每次网站会话时，启用浏览器验证以增加安全性。',
	'CHECK_DNSBL'					=> '根据 DNS 黑洞列表来检查 IP ',
	'CHECK_DNSBL_EXPLAIN'			=> '如果启用，用户在注册和发帖时，其 IP 地址将被提交，检索 DNSBL 服务: <a href="http://spamcop.net">spamcop.net</a> 和 <a href="http://www.spamhaus.org">www.spamhaus.org</a>。这个检查将耗费一些时间，取决于服务器的设置。如果让论坛变得很慢或产生很多错误报告，请禁用这个功能。',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> '检查 email 域名以得到有效 MX 记录',
	'EMAIL_CHECK_MX_EXPLAIN'		=> '如果启用，在注册时，或者修改用户资料时所提供的 email 的域名将被检查是否存在有效的 MX 记录。',
	'FORCE_PASS_CHANGE'				=> '强制密码变更',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> '强制用户在一段时间(天数)后更改密码。设置为 0 则取消限制。',
	'FORM_TIME_MAX'					=> '提交表单的最长时间',
	'FORM_TIME_MAX_EXPLAIN'			=> '在这个时间前用户必须提交。使用 -1 取消这项功能。注意如果设置的时间过长，当对话失效时表单也会自动失效，这种情况下这里的设置是无效的。',
	'FORM_SID_GUESTS'				=> '游客表单提交限制',
	'FORM_SID_GUESTS_EXPLAIN'		=> '启用后， 游客所有的表单令牌将会是对话唯一的，这个功能在某些 ISP 可能出现问题。',
	'FORWARDED_FOR_VALID'			=> '验证 <var>X_FORWARDED_FOR</var> 消息头',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> '只有在发送的 <var>X_FORWARDED_FOR</var> 消息头等于前一次请求中的消息头才继续会话。封禁也将检查 <var>X_FORWARDED_FOR</var> 中的 IP。',
	'IP_VALID'						=> '会话 IP 验证',
	'IP_VALID_EXPLAIN'				=> '决定用户的 IP 如何用于会话验证； <samp>所有</samp> 表示完整地址。<samp>A.B.C</samp> 表示开头的 x.x.x， <samp>A.B</samp> 表示开头的 x.x， <samp>None</samp> 取消验证。 在 IPv6 地址系统里，<samp>A.B.C</samp> 比较了开头的 4 个地址块，<samp>A.B</samp> 表示开头的三个块。',
	'IP_LOGIN_LIMIT_MAX'			=> '每个 IP 的最大登陆尝试次数',
	'IP_LOGIN_LIMIT_MAX_EXPLAIN'	=> '单个 IP 登陆尝试时触发验证码机制的阈值次数。输入 0 防止验证码机制被 IP 触发。',
	'IP_LOGIN_LIMIT_TIME'			=> 'IP 登录尝试过期时间',
	'IP_LOGIN_LIMIT_TIME_EXPLAIN'	=> '登录尝试在这个周期后过期。',
	'IP_LOGIN_LIMIT_USE_FORWARDED'	=> '通过 <var>X_FORWARDED_FOR</var> 消息头限制登陆尝试次数',
	'IP_LOGIN_LIMIT_USE_FORWARDED_EXPLAIN'	=> '用 <var>X_FORWARDED_FOR</var> 值代替限制 IP 登陆尝试次数。<br><em><strong>警告：</strong>只有开启这个选项，您才能在代理服务器上设置 <var>X_FORWARDED_FOR</var> 成可信值。</em>',
	'MAX_LOGIN_ATTEMPTS'			=> '每个用户的最大登陆尝试次数',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> '单独账号在触发验证码机制之前允许登陆尝试的次数。输入 0 后验证码机制不会被触发。',
	'NO_IP_VALIDATION'				=> '无',
	'NO_REF_VALIDATION'				=> '无',
	'PASSWORD_TYPE'					=> '密码复杂度',
	'PASSWORD_TYPE_EXPLAIN'			=> '决定设定或更改时密码的复杂度，多个选项则往前叠加。',
	'PASS_TYPE_ALPHA'				=> '必须包含数字字母',
	'PASS_TYPE_ANY'					=> '没有要求',
	'PASS_TYPE_CASE'				=> '必须混用大写字符',
	'PASS_TYPE_SYMBOL'				=> '必须包含符号',
	'REF_HOST'						=> '只验证主机名',
	'REF_PATH'						=> '同时验证路径',
	'REFERRER_VALID'				=> '验证转向来源',
	'REFERRER_VALID_EXPLAIN'		=> '启用此功能后，POST 请求将根据主机名/脚本路径等设置进行验证。此功能会对使用多域名和外部登录的论坛造成影响。',
	'TPL_ALLOW_PHP'					=> '在模板中允许 PHP 代码',
	'TPL_ALLOW_PHP_EXPLAIN'			=> '如果启用这个选项， <code>PHP</code> 和 <code>INCLUDEPHP</code> 声明将在模板中被解析。',
	'UPLOAD_CERT_VALID'				=> '验证上传证书',
	'UPLOAD_CERT_VALID_EXPLAIN'		=> '若启用， 远程上传所需的证书会得到验证。这需要在您的 php.ini 文件中有关  <samp>openssl.cafile</samp> 或者 <samp>curl.cainfo</samp> 有定义相关的 CA bundle 。',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> '在论坛向用户发送 e-mail 时将使用这个信息。请确保 e-mail 地址有效，任何被退回和无法投递的消息将很可能被发回至这个地址。 如果您的主机不提供本地（基于PHP的） email 服务， 您可以使用 SMTP 发送消息。 这需要服务器的地址 （必要的话询问提供者）。 如果服务器需要验证 (并且只有在需要时) 输入必要的用户名和密码。',
	'ADMIN_EMAIL'					=> 'Email 发信地址',
	'ADMIN_EMAIL_EXPLAIN'			=> '这将是所有 email 的发信地址，技术联络 email 地址。在电邮中显示于<samp>Sender</samp> 地址项。',
	'BOARD_EMAIL_FORM'				=> '用户通过论坛发送 email',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> '可以使用论坛发送 email 而不显示用户的 email 地址.',
	'BOARD_HIDE_EMAILS'				=> '隐藏 email 地址',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> '这个功能使 email 地址完全隐蔽。',
	'CONTACT_EMAIL'					=> 'Email 联络地址',
	'CONTACT_EMAIL_EXPLAIN'			=> '这将使用在任何需要指定联络方式的场合，例如 垃圾信息，错误输出，等等。这将总是显示在 <samp>From</samp> 和 <samp>Reply-To</samp>。',
	'CONTACT_EMAIL_NAME'			=> '联系名字',
	'CONTACT_EMAIL_NAME_EXPLAIN'	=> '这是邮件收件人将看到的联系名字，如果您不想要联系名字就留空。',
	'EMAIL_FORCE_SENDER'			=> '强制使用发信地址',
	'EMAIL_FORCE_SENDER_EXPLAIN'	=> '这将会设置 <samp>Return-Path</samp> 为 email 发信地址， 而不是使用服务器的主机名和本地用户。 这个设置在使用 SMTP 的时候不会生效。 <br><em><strong>警告：</strong> 要求 运行 web 服务器的用户在 sendmail 配置中是可信用户。</em>',
	'EMAIL_PACKAGE_SIZE'			=> 'Email 包大小',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> '这是在一个包中包含的最大 email 数量。这项设置被用于内部信件队列；如果您遇到无法投递信件的错误，请将它设置为 0。',
	'EMAIL_SIG'						=> 'Email 签名',
	'EMAIL_SIG_EXPLAIN'				=> '将在论坛发送的 email 后附加这段文字。',
	'ENABLE_EMAIL'					=> '允许论坛发送 email',
	'ENABLE_EMAIL_EXPLAIN'			=> '如果禁用，论坛将不会发送任何 email。<em>注意如果当前帐号激活设定为用户自行激活或者管理员激活，则停用此项功能将使用户无法激活。</em>',
	'SEND_TEST_EMAIL'				=> '发送测试 email',
	'SEND_TEST_EMAIL_EXPLAIN'		=> '发送测试 email 到您帐号对应的邮箱。',
	'SMTP_ALLOW_SELF_SIGNED'		=> '允许自签名的 SSL 证书',
	'SMTP_ALLOW_SELF_SIGNED_EXPLAIN'=> '允许连接到使用自签名 SSL 证书的 SMTP 服务器。 <br><em><strong>警告：</strong> 允许使用自签名的 SSL 证书可能带来安全隐患。</em>',
	'SMTP_AUTH_METHOD'				=> 'SMTP 验证方式',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> '只有在设置过用户名/密码的场合，询问邮件服务商，如果您不能确定使用何种方式。',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'SMTP 密码',
	'SMTP_PASSWORD_EXPLAIN'			=> '只有当您的 SMTP 服务器需要时才要输入。<br><em><strong>警告：</strong> 此密码在数据库中以明文形式储存。 任何可以访问数据库的都可以看到，包括可以访问本页面的用户也可以看到。</em>',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'SMTP 服务器端口',
	'SMTP_PORT_EXPLAIN'				=> '只有当您清楚您的 SMTP 服务器运行在一个不同的端口上时才需要设置。',
	'SMTP_SERVER'					=> 'SMTP 服务器地址和协议',
	'SMTP_SERVER_EXPLAIN'			=> '注意：必须提供服务器所使用的协议，如果有使用 SSL， 就填写 "ssl://your.mailserver.com"',
	'SMTP_SETTINGS'					=> 'SMTP 设定',
	'SMTP_USERNAME'					=> 'SMTP 用户名',
	'SMTP_USERNAME_EXPLAIN'			=> '只有当您的 SMTP 服务器需要时才要输入。',
	'SMTP_VERIFY_PEER'				=> '验证 SSL 证书',
	'SMTP_VERIFY_PEER_EXPLAIN'		=> '要求验证 SMTP 服务器所使用之 SSL 证书。 <br><em><strong>警告：</strong> 使用未验证之 SSL 证书的连接端会带来安全隐患。	</em>',
	'SMTP_VERIFY_PEER_NAME'			=> '验证 SMTP 端名字',
	'SMTP_VERIFY_PEER_NAME_EXPLAIN'	=> '要求验证 SMTP 服务器的节点名字，并使用 SSL/TLS 连接。 <br><em><strong>警告：</strong> 连接到未验证的节点名字可能会导致安全隐患。</em>',
 	'TEST_EMAIL_SENT'				=> '测试邮件已发送。<br>如果您没有收到，请检查 Email 设置。<br><br>访问 <a href="https://www.phpbb.com/community/">phpBB support forums</a> 可获取帮助。',

	'USE_SMTP'						=> '使用 SMTP 服务器发送 email',
	'USE_SMTP_EXPLAIN'				=> '选择“是”。如果您要通过其它服务器而不是本地 mail 函数发送 email。',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> '这里您可以启用并控制用户使用 Jabber 发送及时消息和论坛通知。Jabber 是任何人都可以使用的开放协议。一些 Jabber 服务器提供允许您联系其他网络用户的通道或网关。并非所有的服务器都提供这样的通道，协议上的变化将使得操作失败。请确认输入的是已经注册的帐号信息，phpBB 将会使用您这里输入的数据。',

	'JAB_ALLOW_SELF_SIGNED'			=> '允许自签名之 SSL 证书',
	'JAB_ALLOW_SELF_SIGNED_EXPLAIN'	=> '允许连接到使用自签名 SSL 证书的 Jabber 服务器。<br><em><strong>警告：</strong>允许自签名证书可能会带来安全隐患。 </em>',
	'JAB_ENABLE'				=> '启用 Jabber',
	'JAB_ENABLE_EXPLAIN'		=> '允许使用 Jabber 消息和通知',
	'JAB_GTALK_NOTE'			=> '请注意 GTalk 无法工作因为无法找到 <samp>dns_get_record</samp> 函数。这个函数在PHP4中是无效的， 并且在windows平台上没有此模块。当前此功能还无法工作在 BSD 系统和 Mac 操作系统上。',
	'JAB_PACKAGE_SIZE'			=> 'Jabber 数据包大小',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> '这是单个数据包中发送的消息数量。设置为 0 将不作延迟而直接发送。',
	'JAB_PASSWORD'				=> 'Jabber 密码',
	'JAB_PASSWORD_EXPLAIN'		=> '<em><strong>注意：</strong> 此密码将以明文保存在数据库中，任何拥有数据库访问权限或可以访问此页的用户都可以看到此密码。</em>',
	'JAB_PORT'					=> 'Jabber 端口',
	'JAB_PORT_EXPLAIN'			=> '留空， 除非您清楚这个端口不是 5222',
	'JAB_SERVER'				=> 'Jabber 服务器',
	'JAB_SERVER_EXPLAIN'		=> '查看 %sjabber.org%s 上的服务器列表',
	'JAB_SETTINGS_CHANGED'		=> 'Jabber 设定修改完成.',
	'JAB_USE_SSL'				=> '使用 SSL 连接',
	'JAB_USE_SSL_EXPLAIN'		=> '如果启用安全连接，Jabber 端口将更改为 5223，如果 5222 没有被指定。',
	'JAB_USERNAME'				=> 'Jabber 用户名或 JID',
	'JAB_USERNAME_EXPLAIN'		=> '请指定一个已经注册的用户，它将不会被检测是否存在。 如果您仅仅指定一个用户名，那么您的 JID 将是您指定的用户名和服务器名称，否则您需要指定一个有效的 JID，例如 user@jabber.org。',
	'JAB_VERIFY_PEER'				=> '验证 SSL 证书',
	'JAB_VERIFY_PEER_EXPLAIN'		=> '要求验证 Jabber 服务器的 SSL 证书。<br><em><strong>警告：</strong> 使用未验证的 SSL 证书来连接可能会带来安全隐患。 </em>',
	'JAB_VERIFY_PEER_NAME'			=> '验证 Jabber 节点名字',
	'JAB_VERIFY_PEER_NAME_EXPLAIN'	=> '要求验证使用 SSL/TLS 连接方式所连接的 Jabber 服务器的节点名字。<br><em><strong>警告：</strong> 连接到未验证的节点可能会带来安全隐患。</em>',

));
