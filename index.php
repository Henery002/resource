<?php
    // 设置头信息
    header('Content-Type:text/html; charset=UTF-8');

    // window hosts 文件地址
    define('WINDOWS_VHOST_PATH', 'C:/Windows/System32/drivers/etc/hosts');

    // 资源目录
    define('RESOURCE_DIR', '/resource/');

    // 读取信息
    if (file_exists(WINDOWS_VHOST_PATH)) {
        $hosts = file(WINDOWS_VHOST_PATH);
    } else {
        $hosts = [];
    }

    // 定义站点信息 域名 => 说明
    $arrSite = [];
    if ($hosts) {
        foreach ($hosts as $value) {
            $tmp = explode(' ', $value);
            if (count($tmp) >= 2) {
                $arrSite[trim($tmp[1])] = $tmp[1].' - ' . $tmp[0];
            }
        }
    }

    // 判断是否查看PHP版本信息
    $isPHP = isset($_GET['php']) && $_GET['php'] == 'info' ? true : false;

    // 目录操作
    $dir = dirname(__FILE__);  // 获取当前文件路径
    $resource = opendir($dir);      // 打开当前目录
    $strDir = $strFile = '';      // 需要显示信息

    // 定义需要隐藏的文件
    $hidefile = [
        '.' => 1, '..' => 1, 'index.php' => 1
    ];

    // 循环处理
    while (!! $filename = readdir($resource)) {
        // 去掉隐藏文件
        if (isset($hidefile[$filename])) continue;

        // 文件和目录区分
        $html = '<div class="col-md-3"><p class="text-primary"><a href="'.$filename.'">'.$filename.'</a></p></div>';
        strpos($filename, '.') ? $strFile .= $html :  $strDir .= $html;
    }

    // 服务器切换
    if (strchr($_SERVER['SERVER_SOFTWARE'], 'Apache') !== false) {
        $arrSite['192.168.99.100'] = 'Nginx 服务器';
    } else {
        $arrSite['localhost'] = 'Apache 服务器';
    }
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title> MyServer 我的服务器 </title>
    <!-- Bootstrap core CSS -->
    <link href="<?=RESOURCE_DIR?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <style type="text/css">
        div.main {margin-top:70px;}
        p.bg-success {padding:10px;}
        .m-coll {margin-top:3px;}
    </style>
</head>
<body role="document">
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"> MyServer 我的服务器 </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    <li <?php if (!$isPHP) : ?>class="active" <?php endif; ?>><a href="/">首页</a></li>
                    <li <?php if ($isPHP) : ?>class="active" <?php endif; ?>><a href="?php=info"><?='PHP '.PHP_VERSION?></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 资源 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header bg-success"> 后台模板 </li>
                            <li><a href="<?=RESOURCE_DIR?>ace">ACE</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    
    <div class="container theme-showcase main" role="main">
        <div class="row">
            <div class="col-md-12">
                <?php if ($isPHP) : ?>
                <?php phpinfo();?>
                <?php else : ?>
                <div class="page-header">
                    <h1> 我的Web服务器 <small> 选择需要进行的操作 </small></h1>
                </div>
                <ol class="breadcrumb">
                      <li><a href="/">首页</a></li>
                      <li class="active"> 目录 </li>
                      <li class="active"> 文件 </li>
                </ol>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                站点
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <div class="row">
                                    <?php foreach ($arrSite as $key => $value) : ?>
                                        <div class="col-md-3">
                                            <p class="text-primary"><a href="http://<?=$key?>"><?=$value?></a></p>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                目录
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                            <?=$strDir?>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                文件
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                            <?=$strFile?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div> <!-- /container -->
    <script src="<?=RESOURCE_DIR?>js/jquery.min.js"></script>
    <script src="<?=RESOURCE_DIR?>/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(function(){ 
            $('table').css('width', '100%').find('td, th').css('padding', '5px');
        })
    </script>
</body>
</html>