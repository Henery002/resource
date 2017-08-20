<?php

// window hosts 文件地址
define('WINDOWS_VHOST_PATH', 'C:/Windows/System32/drivers/etc/hosts');
// 资源目录
define('RESOURCE_DIR', '/resource/');
// 处理目录
define('HANDLE_DIR_PATH', './');

// 指定允许其他域名访问
header('Access-Control-Allow-Origin:*');

// 响应类型
header('Access-Control-Allow-Methods:GET,POST,PUT');
header('Access-Control-Allow-Headers:x-requested-with,content-type');

// 引入公共函数
include './php/common/functions.php';

// 判断请求类型
$action = get('action');
$arrJson = [
	'errCode' => 101,
	'errMsg' => '',
	'data' => [],
];

// 定义错误类型
$error = [
	0 => 'success',
	101 => '请求参数存在问题',
	102 => '请求操作类型不存在',
];

if ($action) {
	switch ($action) {
	case 'info':
		phpinfo();
		exit;
	case 'get-php-version':
		$arrJson['data'] = 'PHP ' . PHP_VERSION;
		$arrJson['errCode'] = 0;
		break;
	case 'index':

		// 读取信息
		$hosts = [];
		if (file_exists(WINDOWS_VHOST_PATH)) {
			$hosts = file(WINDOWS_VHOST_PATH);
		}

		// 定义站点信息 域名 => 说明
		$arrWebs = [
			'title' => '本地站点',
			'lists' => [],
		];

		if ($hosts) {
			foreach ($hosts as $value) {
				$tmp = explode(' ', $value);
				if (count($tmp) >= 2) {
					$arrWebs['lists'][] = [
						'href' => 'http://' . trim($tmp[1]),
						'name' => $tmp[1] . ' - ' . $tmp[0],
					];
				}
			}
		}

		// 目录操作
		$resource = opendir(HANDLE_DIR_PATH); // 打开当前目录
		$arrDirs = [
			'title' => '项目目录',
			'lists' => [],
		];

		$arrFiles = [
			'title' => '文件',
			'lists' => [],
		];

		// 定义需要隐藏的文件
		$needHideFiles = [
			'.', '..', 'index.php',
			'index.html', '.git', '.gitignore',
			'ace.zip', 'vue-api.php', 'vhost.php',
            '.idea'
		];

		// 循环处理
		while (!!$filename = readdir($resource)) {
			// 去掉隐藏文件
			if (in_array($filename, $needHideFiles)) {
				continue;
			}

			// 文件和目录区分
			$arrTmp = [
				'href' => $filename,
				'name' => $filename === 'test.php' ? '测试脚本' : $filename,
			];

			if (strpos($filename, '.')) {
				$arrFiles['lists'][] = $arrTmp;
			} else {
				$arrDirs['lists'][] = $arrTmp;
			}
		}

		$arrJson['data'] = [$arrWebs, $arrDirs, $arrFiles];
		$arrJson['errCode'] = 0;
		break;
	default:
		$arrJson['errCode'] = 102;
	}
}

// 处理返回数据
if (empty($arrJson['errMsg']) && isset($error[$arrJson['errCode']])) {
	$arrJson['errMsg'] = $error[$arrJson['errCode']];
}

// 返回数据
exit(json_encode($arrJson, 320));