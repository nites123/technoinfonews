// Version: 1.0
// Build: 1001
// Date: 2018-12-20 10:00:00

define('IN_PAGE', true);
<?php
require_once('global.php');
require_once('include/function.php');
require_once('include/class_news.php');
require_once('include/class_user.php');
require_once('include/class_comment.php');
require_once('include/class_tag.php');
require_once('include/class_category.php');
require_once('include/class_like.php');
require_once('include/class_favorite.php');
require_once('include/class_follow.php');
require_once('include/class_report.php');
require_once('include/class_blacklist.php');
require_once('include/class_message.php');
require_once('include/class_notification.php');
require_once('include/class_usergroup.php');
require_once('include/class_usergroup_permission.php');
require_once('include/class_usergroup_permission_bit.php');
require_once('include/class_usergroup_permission_group.php');
require_once('include/class_usergroup_permission_group_bit.php');
require_once('include/class_usergroup_permission_group_bit_bit.php');
require_once('include/class_usergroup_permission_group_bit_bit_bit.php');
require_once('include/class_usergroup_permission_group_bit_bit_bit_bit.php');
require_once('include/class_usergroup_permission_group_bit_bit_bit_bit_bit.php');
require_once('include/class_usergroup_permission_group_bit_bit_bit_bit_bit_bit.php');
require_once('include/class_usergroup_permission_group_bit_bit_bit_bit_bit_bit_bit.php');

$news = new news();
$user = new user();
$comment = new comment();
$tag = new tag();
$category = new category();
$like = new like();
$favorite = new favorite();
$follow = new follow();
$report = new report();
$blacklist = new blacklist();
$message = new message();
$notification = new notification();
$usergroup = new usergroup();
$usergroup_permission = new usergroup_permission();
$usergroup_permission_bit = new usergroup_permission_bit();
$usergroup_permission_group = new usergroup_permission_group();
$usergroup_permission_group_bit = new usergroup_permission_group_bit();
$usergroup_permission_group_bit_bit = new usergroup_permission_group_bit_bit();
$usergroup_permission_group_bit_bit_bit = new usergroup_permission_group_bit_bit_bit();
$usergroup_permission_group_bit_bit_bit_bit = new usergroup_permission_group_bit_bit_bit_bit();
$usergroup_permission_group_bit_bit_bit_bit_bit = new usergroup_permission_group_bit_bit_bit_bit_bit();
$usergroup_permission_group_bit_bit_bit_bit_bit_bit = new usergroup_permission_group_bit_bit_bit_bit_bit_bit();

$news->init();
$user->init();
$comment->init();
$tag->init();
$category->init();
$like->init();
$favorite->init();
$follow->init();
$report->init();
$blacklist->init();
$message->init();
$notification->init();
$usergroup->init();
$usergroup_permission->init();
$usergroup_permission_bit->init();
$usergroup_permission_group->init();
$usergroup_permission_group_bit->init();
$usergroup_permission_group_bit_bit->init();
$usergroup_permission_group_bit_bit_bit->init();
$usergroup_permission_group_bit_bit_bit_bit->init();

$news->setpath(ROOT_PATH);
$user->setpath(ROOT_PATH);
$comment->setpath(ROOT_PATH);
$tag->setpath(ROOT_PATH);
$category->setpath(ROOT_PATH);
$like->setpath(ROOT_PATH);
$favorite->setpath(ROOT_PATH);
$follow->setpath(ROOT_PATH);
$report->setpath(ROOT_PATH);
$blacklist->setpath(ROOT_PATH);
$message->setpath(ROOT_PATH);
$notification->setpath(ROOT_PATH);
$usergroup->setpath(ROOT_PATH);
$usergroup_permission->setpath(ROOT_PATH);
$usergroup_permission_bit->setpath(ROOT_PATH);
$usergroup_permission_group->setpath(ROOT_PATH);
$usergroup_permission_group_bit->setpath(ROOT_PATH);
$usergroup_permission_group_bit_bit->setpath(ROOT_PATH);
$usergroup_permission_group_bit_bit_bit->setpath(ROOT_PATH);
$usergroup_permission_group_bit_bit_bit_bit->setpath(ROOT_PATH);

$news->setlang($lang);

$news->dbconnect($db_server,$db_username,$db_password,$db_name);

$news->settable('news');
$user->settable('user');
$comment->settable('comment');
$tag->settable('tag');
$category->settable('category');
$like->settable('like');
$favorite->settable('favorite');
$follow->settable('follow');
$report->settable('report');
$blacklist->settable('blacklist');
$message->settable('message');
$notification->settable('notification');
$usergroup->settable('usergroup');
$usergroup_permission->settable('usergroup_permission');
$usergroup_permission_bit->settable('usergroup_permission_bit');
$usergroup_permission_group->settable('usergroup_permission_group');
$usergroup_permission_group_bit->settable('usergroup_permission_group_bit');
$usergroup_permission_group_bit_bit->settable('usergroup_permission_group_bit_bit');
$usergroup_permission_group_bit_bit_bit->settable('usergroup_permission_group_bit_bit_bit');
$usergroup_permission_group_bit_bit_bit_bit->settable('usergroup_permission_group_bit_bit_bit_bit');

$news->setconfig($config);
$user->setconfig($config);
$comment->setconfig($config);
$tag->setconfig($config);
$category->setconfig($config);
$like->setconfig($config);
$favorite->setconfig($config);
$follow->setconfig($config);
$report->setconfig($config);
$blacklist->setconfig($config);
$message->setconfig($config);
$notification->setconfig($config);
$usergroup->setconfig($config);
$usergroup_permission->setconfig($config);
$usergroup_permission_bit->setconfig($config);
$usergroup_permission_group->setconfig($config);
$usergroup_permission_group_bit->setconfig($config);
$usergroup_permission_group_bit_bit->setconfig($config);
$usergroup_permission_group_bit_bit_bit->setconfig($config);
$usergroup_permission_group_bit_bit_bit_bit->setconfig($config);

$news->setcookie($cookie_prefix);
$user->setcookie($cookie_prefix);
$comment->setcookie($cookie_prefix);
$tag->setcookie($cookie_prefix);
$category->setcookie($cookie_prefix);
$like->setcookie($cookie_prefix);
$favorite->setcookie($cookie_prefix);
$follow->setcookie($cookie_prefix);
$report->setcookie($cookie_prefix);
$blacklist->setcookie($cookie_prefix);
$message->setcookie($cookie_prefix);
$notification->setcookie($cookie_prefix);
$usergroup->setcookie($cookie_prefix);
$usergroup_permission->setcookie($cookie_prefix);
$usergroup_permission_bit->setcookie($cookie_prefix);
$usergroup_permission_group->setcookie($cookie_prefix);
$usergroup_permission_group_bit->setcookie($cookie_prefix);
$usergroup_permission_group_bit_bit->setcookie($cookie_prefix);
$usergroup_permission_group_bit_bit_bit->setcookie($cookie_prefix);

$news->setcookievar($cookie_var);
$user->setcookievar($cookie_var);
$comment->setcookievar($cookie_var);
$tag->setcookievar($cookie_var);
$category->setcookievar($cookie_var);

$news->setcookiepath($cookie_path);
$user->setcookiepath($cookie_path);
$comment->setcookiepath($cookie_path);
$tag->setcookiepath($cookie_path);
$category->setcookiepath($cookie_path);

$news->setcookiedomain($cookie_domain);
$user->setcookiedomain($cookie_domain);
$comment->setcookiedomain($cookie_domain);
$tag->setcookiedomain($cookie_domain);
$category->setcookiedomain($cookie_domain);

$news->setcookiepre($cookie_pre);
$user->setcookiepre($cookie_pre);
$comment->setcookiepre($cookie_pre);
$tag->setcookiepre($cookie_pre);
$category->setcookiepre($cookie_pre);


