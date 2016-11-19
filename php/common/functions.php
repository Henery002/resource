<?php 
/**
 * 这是一个我的 php 基本函数库文件
 *
 * 该文件保存了基本的常用包装函数 , 一般用来引用
 * @author		刘金星
 * @version		v1.0
 * @since			
 */

/**
 * strLength() PHP获取字符串中英文混合长度 
 * @param   string 	$str      字符串
 * @param   string 	$charset  编码( 默认为UTF-8 )
 * @return  int 返回长度，1中文=1位，2英文=1位
 */
function strLength($str, $charset = 'utf-8')
{
    // 字符编码的转换 iconv() 将utf-8的字符编码转换为gb2312的编码
    if ($charset=='utf-8') $str = iconv('utf-8', 'gb2312', $str);
    $num = strlen($str) ;
    $cnNum = 0 ;

    for ( $i = 0 ; $i < $num ; $i ++ ) {
        if (ord(substr($str, $i + 1, 1)) > 127) {
            $cnNum ++;
            $i ++;
        }
    }

    $enNum = $num - $cnNum * 2;
    $number = $enNum / 2 + $cnNum;
    return ceil($number);
}

/**
 * getCode() PHP获取随机字符串验证码 
 * @param   int 	$length   验证码长度( 默认为四位 )
 * @return  string 	返回一个包含 A-Z a-z 0-9 的随机字符串
 */
function getCode( $length = 4 ) {
	$pass = '' ;
	// 获取需要长度的字符串
	for ( $i = 0; $i < $length; $i ++) {
		$intRand = mt_rand(1 , 10);
		if ($intRand <= 3)		// A-Z 概率为 30 %
			$pass .= chr(mt_rand(65, 90));
		else if ($intRand <= 7) // a-z 概率为 40%
           	$pass .= chr(mt_rand(97, 122));
       	else            		// 0-9 概率为 30%
           	$pass .= chr(mt_rand(48, 57));
	}

	return $pass;
}

/**
 * @param $file
 * @param string $dirName
 * @param array  $allowType
 * @param int    $uploadSize
 * @param string $prefixName
 * @return array
 */
function fileUpload($file, $dirName = 'uploads', array $allowType = array('jpg', 'jpeg', 'gif', 'png'), $uploadSize = 10000000, $prefixName = '')
{
    $arrReturn = array(
        'status' => false,
        'errCode' => 1,
    );


    // 1、判断是否已经上传
    if (isset($_FILES[$file]) && !empty($_FILES[$file]['name'])) {

        // 2、接收上传文件信息
        $arrReturn['errCode'] = $_FILES[$file]['error'];	// 上传错误代码

        // 3、判断上传错误信息
        if (empty($arrReturn['errCode'])) {

            // 4、判断上传文件大小
            if ($_FILES[$file]['size'] <= $uploadSize ) {

                // 5、判断上传文件类型
                $extension = pathinfo($_FILES[$file]['name'], PATHINFO_EXTENSION); // 获取文件后缀名
                $extension = strtolower($extension) ;					           // 后缀名转小写
                if (in_array($extension, $allowType)) {

                    // 6、判断文件是否通过HTTP POST 上传的
                    if (is_uploaded_file($_FILES[$file]['tmp_name'])) {

                        // 7、创建上传文件目录
                        $dir = trim($dirName, '/') . '/' .date('Ymd').'/' ;
                        try {

                            if (!file_exists($dir)) @mkdir($dir, 0777, true);// 创建目录
                            @chmod($dir, 0755);									// 修改目录权限
                            if (file_exists($dir)) {

                                // 文件名称
                                $randName = empty($prefixName) ? 'tmp_' . uniqid() :  $prefixName. '_' . pathinfo($_FILES[$file]['name'], PATHINFO_FILENAME);
                                $filePath = $dir . $randName . '.' . $extension ; 		// 上传文件移动后的完整文件路径

                                // 8、移动上传文件到指定上传文件目录
                                if (move_uploaded_file($_FILES[$file]['tmp_name'], $filePath)) {
                                    $arrReturn = [
                                        'status' => true,
                                        'errCode' => 0,
                                        'file' => array_merge($_FILES[$file], array(
                                            'file_name' => $randName.'.'.$extension,
                                            'file_path' => $filePath,
                                            'extension' => $extension,
                                        )),
                                    ];
                                } else {
                                    $arrReturn['errCode'] = 12;
                                }
                            } else {
                                $arrReturn['errCode'] = 11;
                            }
                        } catch ( Exception $e ) {
                            $arrReturn['errCode'] = 11;
                        }
                    } else {
                        $arrReturn['errCode'] = 10;
                    }
                } else {
                    $arrReturn['errCode'] = 9;
                }
            } else {
                $arrReturn['errCode'] = 8;
            }
        }
    }

    return $arrReturn;
}

