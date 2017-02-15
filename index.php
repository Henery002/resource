<?php
    // 设置头信息
    header('Content-Type:text/html; charset=UTF-8');
    
    // 判断是否查看PHP版本信息
    $isPHP = isset($_GET['php']) && $_GET['php'] == 'info' ? true : false;

    // 目录操作
    $dir      = dirname(__FILE__);  // 获取当前文件路径
    $resource = opendir($dir);      // 打开当前目录
    $strDir   = $strFile = '';      // 需要显示信息

    // 定义需要隐藏的文件
    $hidefile = [
        '.' => 1, '..' => 1, 'index.php' => 1, 
        'phpmyadmin' => 1, 'xiangye' => 1, '.idea' => 1, 
        'yueyangwx' => 1, 'mygo' => 1, 'sina' => 1, 
        'project' => 1, 'xhprof' => 1,
    ];

    // 循环处理
    while (!! $filename = readdir($resource))
    {
        // 去掉隐藏文件
        if (isset($hidefile[$filename])) continue;

        // 文件和目录区分
        $html = '<div class="col-md-3"><p class="text-primary"><a href="'.$filename.'">'.$filename.'</a></p></div>';
        strpos($filename, '.') ? $strFile .= $html :  $strDir .= $html;
    }

    // 定义站点信息 域名 => 说明
    $arrSite = [
        'web.com'      => '死神WEB', 
        'sina.com'     => '新浪项目ThinkPHP', 
        'admin.com'    => '新浪项目Yii2',
        'm.me.com'     => '疾创手游平台',
        'ls.me.com'    => '兰斯洛特官网',
        'bbs.me.com'   => '疾创手游论坛',
        'api.com'      => '疾创手游API',
        'apiadmin.com' => '疾创手游后台管理',
    ];

    // 服务器切换
    if (strchr($_SERVER['SERVER_SOFTWARE'], 'Apache') !== false) 
        $arrSite['my.com:8080'] = 'Nginx 服务器';
    else
        $arrSite['my.com']      = 'Apache 服务器';
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
    <link href="/resource/ace/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->

    <script src="/resource/ace/assets/js/jquery.min.js"></script>
    <script src="/resource/ace/assets/js/bootstrap.min.js"></script>

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
                            <li><a href="/resource/ace">ACE</a></li>
                            <li><a href="/resource/Simpli">Simpli</a></li>
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
        <div id="me"></div>
    </div> <!-- /container -->
    <script type="text/javascript">
        $(function(){ 
            $('table').css('width', '100%').find('td, th').css('padding', '5px');
        })
    </script>
</body>
</html>