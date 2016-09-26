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
function strLength( $str , $charset = 'utf-8' ) {
	// 字符编码的转换 iconv() 将utf-8的字符编码转换为gb2312的编码
	if ( $charset=='utf-8' ) $str = iconv('utf-8','gb2312',$str) ;
	$num = strlen($str) ;
	$cnNum = 0 ;
	for( $i = 0 ; $i < $num ; $i ++ ){
	  if( ord( substr( $str , $i + 1 , 1 ) ) > 127 ){
	    $cnNum ++ ;
	    $i ++ ;
	  }
	}
	$enNum = $num-( $cnNum * 2 ) ;
	$number = ( $enNum / 2 ) + $cnNum ;
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
	for( $i = 0 ; $i < $length ; $i ++ ) {
		$probab = mt_rand( 1 , 10 ) ; 
		if ( $probab <= 3 )		// A-Z 概率为 30 %
			$pass .= chr(mt_rand( 65 , 90 )) ; 
		else if( $probab <= 7 ) // a-z 概率为 40%
           	$pass .= chr(mt_rand( 97 , 122 )) ;
       	else            		// 0-9 概率为 30%
           	$pass .= chr(mt_rand( 48 , 57 )) ;
	}
	return $pass ; 
}

/**
 * fileUpload() PHP上传文件 
 * @param 	string  $file 		上传文件表单名
 * @param 	string  $dirname 	上传文件保存地址 
 *( 默认为当前目录下单uploads , 这个为主目录 , 函数会自动以时间添加子目录 )
 * @param 	array 	$allowType  允许上传文件类型 ( 文件小写后缀名 , 默认为 jpg , jpeg , gif , png ) 
 * @param 	int  	$uploadSize 允许上传文件大小 ( 单位为字节 , 默认1MB )
 * @param 	string 	$prename 	设置上传文件前缀名 ( 默认为空 )
 * @return  array 	返回一个保存上传信息数组 
 *  		mold => error OR success 上传失败还是成功
 *			info => 错误信息 OR 成功提示信息
 *			filename => 上传文件名(上传成功)  
 *			fileurl => 上传文件保存地址(上传成功)      
 */
function fileUpload($file, $dirname = 'uploads', array $allowType = array('jpg', 'jpeg', 'gif', 'png'), $uploadSize = 10000000, $prename = '') 
{

	// 1、判断是否已经上传
	if ( !isset($_FILES[$file]) || empty( $_FILES[$file]['name'] ) ) {
		return array( 'mold' => 'error' , 'info' => '对不起！没有文件上传...' ) ; 
	}

	// 2、接收上传文件信息
	$tmpname 	= $_FILES[$file]['name'] ; 	// 文件名
	$tmpsize 	= $_FILES[$file]['size'] ;		// 文件大小 	
	$tmperror 	= $_FILES[$file]['error'] ;	// 上传错误代码 
	$tmpurl 	= $_FILES[$file]['tmp_name'] ; 	// 上传文件临时地址
	$tmptype 	= $_FILES[$file]['type'] ; 	// 上传文件MIMI类型

	// 3、判读上传错误信息
	if ( $tmperror > 0 ) {
		switch( $tmperror ) {
			case 1 : $info 	= '上传的文件超过了允许上传文件的最大设置值' ; 		break ;
			case 2 : $info 	= '上传文件超过了 HTML 表单中 允许上传的最大值' ; 	break ;
			case 3 : $info 	= '文件只有部分被上传' ;							break ; 
			case 4 : $info 	= '没有文件被上传' ;								break ; 
			case 6 : $info 	= '找不到上传文件临时存放的文件夹' ;				break ; 
			case 7 : $info 	= '文件写入失败' ;									break ; 
			default : $info = '上传失败 , 出现未知错误' ;
		}
		return array( 'mold' => 'error' , 'info' => '对不起！'.$info.'...' ) ; 
	} 

	// 4、判断上传文件大小
	if ( $tmpsize > $uploadSize ) {
		return array( 'mold' => 'error' , 'info' => '对不起！上传文件超过了设定值...' ) ; 
	}

	// 5、判断上传文件类型
	$extension = pathinfo( $tmpname , PATHINFO_EXTENSION )  ; // 获取文件后缀名
	$extension = strtolower( $extension ) ;					  // 后缀名转小写
	if ( !in_array( $extension , $allowType ) ) {
		return array( 'mold' => 'error' , 'info' => '对不起！上传文件类型错误...' ) ;
	}

	// 6、判断文件是否通过HTTP POST 上传的
	if ( !is_uploaded_file( $tmpurl ) ) {
		return array( 'mold' => 'error' , 'info' => '对不起！文件不是通过HTTP POST 上传的...' ) ; 
	}

	// 7、创建上传文件目录
	$dir = trim( $dirname , '/') . '/' .date( 'Ymd' ).'/' ;
	try {
		if ( !file_exists( $dir ) ) {
			@mkdir( $dir , 0777 , true  ) ;						// 创建目录 
		}
		@chmod( $dir , 0755 ) ;									// 创建目录
		if ( !file_exists( $dir ) ) {
			return array( 'mold' => 'error' , 'info' => '对不起！创建上传文件保存目录失败...' ) ; 
		}	
	} catch ( Exception $e ) {
		return array( 'mold' => 'error' , 'info' => '对不起！创建上传文件保存目录失败...' ) ;
	}

	// 8、设置和创建随较文件名
	$filename = pathinfo( $tmpname , PATHINFO_FILENAME ) ;		// 文件名( 不包括后缀 )
	$randName = empty( $prename ) ? 'tmp_' . time() . mt_rand( 1000 , 9999 ) :  $prename . '_' . $filename  ;
	$myfilename = $dir . $randName . '.' . $extension ; 		// 上传文件移动后的完整文件路径

	// 9、移动上传文件到指定上传文件目录
	if ( move_uploaded_file( $tmpurl , $myfilename ) ) {
		return array( 
			'mold' 		=> 'success' , 
			'info' 		=> '文件上传成功！' , 
			'filename' 	=> $filename . '.' . $extension ,	
			'fileurl' 	=> $myfilename , 
		) ;
	}
	return array('mold' => 'error' , 'info' => '对不起！上传文件移动到指定目录出现错误...' ) ;
}

