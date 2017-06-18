<?php
// 设置头信息
header('Content-Type:text/html; charset=UTF-8');

// 资源目录
define('RESOURCE_DIR', '/resource/');

// 请求方式
$arrMethod = [
    'GET 请求' => 'GET',
    'POST 请求' => 'POST',
    'PUT 请求' => 'PUT',
    'DELETE 请求' => 'DELETE',
    'HEADER 请求' => 'HEADER',
    'OPTIONS 请求' => 'OPTIONS',
];

// 参数类型
$arrType = [
    'int 类型' => 'int',
    'string 类型' => 'string',
    'float 类型' => 'float',
    'double 类型' => 'double',
    'mixed 类型' => 'mixed',
];

// 判断请求数据
if (isset($_GET) && !empty($_GET['type']) && isset($_POST) && !empty($_POST['api'])) {
    $arrApi = $_POST['api'];
    $strHtml = <<<html
    # {title}

### 请求地址

```
{url}
```

### 请求方式

```
{method}
```

### 请求参数

| 参数名                | 参数类型  | 是否必填  | 说明                      |
| -------------         |:--------:| -------: | -----------------------   |
{params}


### 返回实列

```
{
    "code": 0,
    "msg": "success",
    "sign": "20aa0dd141fad87ea7ced2c2df873043",
    "data": null
}
```

### 返回参数

| 参数名        | 参数类型  | 说明                        |
| --------------|:---------:| ---------------:           |
| code          | int       |  错误码(0 表示没有错误)     |
| msg           | string    | 错误提示(success 成功)      |
| sign          | string    | 签名                        |
| data          | mixed     | 返回其他数据                |

### 其他说明

```php

// 数据加密方式
所以请求参数组成(key => value)数组 然后按照key 排序这个数组， 连接数组的值 + 秘钥 进行md5加密
// php 示例代码
\$request = [
    'member_id' => 1,
    'customer_phone' => '13020137932',
    'customer_name' => '车城',
    'che_order_id' => 'CHE20140612111256',
    'intention_id' => 1,
    'intention_des' => '奥迪'
];

// 按照键排序
ksort(\$request);
// 连接生成秘钥
\$request['sign'] = md5(implode(',', \$request) . '你的秘钥');

```

html;
    $arrReturn = [
        'errorCode' => 1,
        'errorMessage' => '请求参数存在问题',
        'data' => [],
    ];

    // 处理请求参数信息
    if (!empty($arrApi['url'])) {
        if (!empty($arrApi['params'])) {
            $strParams = '';
            foreach ($arrApi['params'] as $value) {
                $strParams .= '| '. implode(' | ', $value) .' | ' ."\n";
            }

            $arrApi['params'] = $strParams;
        }

        $arrReturn = [
            'errorCode' => 0,
            'errorMessage' => '生成文档成功',
            'data' => str_replace([
                '{title}', '{url}', '{method}', '{params}'
            ], [
                $arrApi['title'], $arrApi['url'], $arrApi['method'], $arrApi['params']
            ], $strHtml),
        ];
    }

    header('Content-Type: application/json; charset=utf-8');
    exit(json_encode($arrReturn, 320));
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
    <title> API 文档自动生成 </title>
    <!-- Bootstrap core CSS -->
    <link href="<?=RESOURCE_DIR?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <style>
        div.params-div {margin: 10px;}
        .error {color:red}
    </style>
</head>
<body role="document">
    <div class="container theme-showcase main" role="main">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1> API文档生成 <small> 请认真填写表单数据信息 </small></h1>
                </div>
                <div class="page-content">
                    <form action="?type=create" method="POST" name="api-form" id="api-form">
                        <div class="form-group">
                            <label for="title"> 接口名称 </label>
                            <input type="text" class="form-control" id="title" name="api[title]" required="required" rangelength="2, 200" placeholder="请输入接口名称">
                        </div>
                        <div class="form-group">
                            <label for="address"> 接口地址 </label>
                            <input type="text" class="form-control" id="address" name="api[url]" required="required" rangelength="2, 200" placeholder="请输入接口地址">
                        </div>
                        <div class="form-group">
                            <label for="method"> 接口请求方式 </label>
                            <select name="api[method]" id="method" required="required" class="form-control">
                            <?php foreach ($arrMethod as $key => $value) : ?>
                                <option value="<?=$value?>"><?=$key?></option>
                            <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="params" class="col-sm-2 control-label"> 接口请求参数 </label>
                                <div class="col-sm-10">
                                    <div class="form-inline params-div">
                                        <div class="form-group">
                                            <label>参数</label>
                                            <input type="text" class="form-control" name="api[params][0][name]" required="required" rangelength="1, 100" placeholder="参数名称" />
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only">参数类型</label>
                                            <select name="api[params][0][type]" class="form-control">
                                                <?php foreach ($arrType as $key => $value) : ?>
                                                    <option value="<?=$value?>"><?=$key?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only">是否必填</label>
                                            <select name="api[params][0][required]" class="form-control">
                                                <option value="必填">必填</option>
                                                <option value="非必填">非必填</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only">参数说明</label>
                                            <input type="text" class="form-control" name="api[params][0][desc]" placeholder="参数说明" />
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-danger delete">删除</button>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-info" id="insert-div"> 添 加 </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-success">保存</button>
                        <button type="reset" class="btn btn-warning">重置</button>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- /container -->

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">API Markdown 文档</h4>
                </div>
                <div class="modal-body">
                    <pre id="code"></pre>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="button" class="btn btn-primary" id="btn-copy"> 复制信息 </button>
                </div>
            </div>
        </div>
    </div>
    <textarea id="code-html" style="display: none" cols="50" rows="1000"></textarea>
<script src="<?=RESOURCE_DIR?>js/jquery.min.js"></script>
<script src="<?=RESOURCE_DIR?>/js/bootstrap.min.js"></script>
<script src="<?=RESOURCE_DIR?>/js/jquery.validate.min.js"></script>
<script type="text/javascript">
    /*复制代码到剪切板*/
    function copyToClipboard(elem) {
        // create hidden text element, if it doesn't already exist
        var targetId = "_hiddenCopyText_";
        var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
        var origSelectionStart, origSelectionEnd;
        if (isInput) {
            // can just use the original source element for the selection and copy
            target = elem;
            origSelectionStart = elem.selectionStart;
            origSelectionEnd = elem.selectionEnd;
        } else {
            // must use a temporary form element for the selection and copy
            target = document.getElementById(targetId);
            if (!target) {
                var target = document.createElement("textarea");
                target.style.position = "absolute";
                target.style.left = "-9999px";
                target.style.top = "0";
                target.id = targetId;
                document.body.appendChild(target);
            }
            target.textContent = elem.textContent;
        }
        // select the content
        var currentFocus = document.activeElement;
        target.focus();
        target.setSelectionRange(0, target.value.length);
        // copy the selection
        var succeed;
        try {
            succeed = document.execCommand("copy");
        } catch(e) {
            succeed = false;
        }
        // restore original focus
        if (currentFocus && typeof currentFocus.focus === "function") {
            currentFocus.focus();
        }
        if (isInput) {
            // restore prior selection
            elem.setSelectionRange(origSelectionStart, origSelectionEnd);
        } else {
            // clear temporary content
            target.textContent = "";
        }
        return succeed;
    }

    $(function() {
        var intNumber = 0, strHtml = $(".params-div").html();

        // 添加参数
        $("#insert-div").click(function () {
            intNumber++;
            $(".params-div:last").after('<div class="form-inline params-div">' + strHtml.replace(/0/g, intNumber) + '</div>');
        });

        // 删除
        $(document).on("click", ".delete", function () {
            if ($(".params-div").length >= 2) {
                $(this).parent().parent().remove();
            }
        });

        // 使用ajax 提交
        $("#api-form").submit(function (evt) {
            evt.preventDefault();
            var $fm = $(this);
            if ($fm.validate().form()) {
                $.ajax({
                    url: "?type=create",
                    type: "POST",
                    data: $fm.serialize(),
                    dataType: "json"
                }).done(function (json) {
                    if (json.errorCode === 0) {
                        $("#code").html(json.data);
                        $("#myModal").modal({backdrop: "static"});
                    } else {
                        alert(json.errorMessage);
                    }
                }).fail(function () {
                    alert("服务器繁忙,请稍候再试...");
                });
            }
        });

        // 复制
        $("#btn-copy").click(function () {
            copyToClipboard($("#code").get(0));
            $("#myModal").modal("hide");
        });
    });
</script>