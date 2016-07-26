/**
 * 这是一个我的 javascript 基本函数库文件
 *
 * 该文件保存了基本的常用包装函数 ， 一般用来引用
 * @author		刘金星
 * @version		v1.0
 * @since			
 */

 /**
 * ajax()方法封装了ajax
 * @method ajax()
 * @param object 接收一个对象
 * object 对象必须要有 	url 属性 用来设置ajax 发送到的处理页面
 * 										mothed 属性 用来设置ajax 发送的方式
 * 										data 属性 发送过去的数据
 * 										async 属性 设置ajax(ture) 异步 还是 同步(false)
 * @return mixed 返回服务器响应ajax 的数据,没有数据返回false
 */
function ajax(obj) 
{
	// 创建XHR对象
	var xhr = typeof(window.XMLHttpRequest) != 'undefined' ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');	
	obj.url = obj.url + '?rand=' + Math.random();	// 提交到的页面	
	obj.data = (function(data){						// 处理提交数据(闭包函数自执行)
		var arr = [];
		for (var i in data) arr.push(encodeURIComponent(i) + '=' + encodeURIComponent(data[i]));
		return arr.join('&');		
	})(obj.data);              																			
	if (obj.method == 'get')
	{						// get方式提交
		var an = obj.url.indexOf('?') == -1 ? '?' : '&';
		obj.url = obj.url + an + obj.data;			// 处理提交数据（连接到URL中）
	}	

	// 异步处理
	if (obj.async == true)
	{																			
		xhr.onreadystatechange = function(){ 		// 回掉函数
			if (xhr.readyState == 4) callback();
		} 
	}

	xhr.open(obj.method,obj.url,obj.async);			// 发送准备
	if (obj.method == 'post')
	{					// POST方式发送
		xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
		xhr.send(obj.data);
	} 
	else 
	{
		xhr.send(null);
	}

	// 同步处理
	if (obj.async == false) callback();

	// 回调处理
	function callback(){
		xhr.status == 200 ? obj.success(xhr.responseText) : alert('数据返回失败！状态代码：' + xhr.status + '，状态信息：' + xhr.statusText);
	}
}

/**
 * 判断一个数组中是否存在某个值 , 返回布尔值
 * @method 		in_array() 
 * @for 		所属类名
 * @param		mixed	val		需要查找的值
 * @param		mixed	arr		查找的数组	 	
 * @return		boolean 返回一个布尔值( 存在true )
 */
 function in_array(val, arr) 
 {
 	for (var i in arr){if ( arr[i] === val ) return true;}
 	return false ;
 }

/**
 * 在指定范围内获取随机数
 * @method 		mt_rand() 
 * @for 		所属类名
 * @param		int		min		指定范围最小值
 * @param		int		max		指定范围最大值	 	
 * @return		int  	返回一个随机的整数
 */
function mt_rand(min, max) 
{
	min = parseInt(min);
	max = parseInt(max);
	return  (min < max ? min : max) + Math.floor(Math.random() * Math.abs(max - min)) ;
}

//浏览器检测
(function () {
	window.sys = {};
	var ua = navigator.userAgent.toLowerCase();	
	var s;		
	( s = ua.match(/msie ([\d.]+)/)) ? sys.ie = s[1] :
	( s = ua.match(/firefox\/([\d.]+)/)) ? sys.firefox = s[1] :
	( s = ua.match(/chrome\/([\d.]+)/)) ? sys.chrome = s[1] : 
	( s = ua.match(/opera\/.*version\/([\d.]+)/)) ? sys.opera = s[1] : 
	( s = ua.match(/version\/([\d.]+).*safari/)) ? sys.safari = s[1] : 
	( ua.indexOf('Trident') >= 0 || ua.indexOf('rv:11') >=0) ? sys.ie = '11.0' : 0;

	if (/webkit/.test(ua)) sys.webkit = ua.match(/webkit\/([\d.]+)/)[1];
})();

/** addDomLoad()DOM加载 */
function addDomLoaded(fn) {
	var isReady = false;
	var timer = null;
	function doReady() {
		if (timer) clearInterval(timer);
		if (isReady) return;
		isReady = true;
		fn();
	}
	// 其他低版本浏览器的兼容
	if ((sys.opera && sys.opera < 9) || (sys.firefox && sys.firefox < 3) || (sys.webkit && sys.webkit < 525)) {
		timer = setInterval(function () {
			if (document && document.getElementById && document.getElementsByTagName && document.body) {
				doReady();
			}
		}, 1);
	} else if (document.addEventListener) {																		//W3C
		addEvent(document, 'DOMContentLoaded', function () {
			fn();
			removeEvent(document, 'DOMContentLoaded', arguments.callee);
		});
	} else if (sys.ie && sys.ie < 9){
		var timer = null;
		timer = setInterval(function () {
			try {
				document.documentElement.doScroll('left');
				doReady();
			} catch (e) {};
		}, 1);
	}
}

//跨浏览器添加事件绑定
function addEvent(obj, type, fn) {
	if (typeof obj.addEventListener != 'undefined') {
		obj.addEventListener(type, fn, false);
	} else {
		//创建一个存放事件的哈希表(散列表)
		if (!obj.events) obj.events = {};
		//第一次执行时执行
		if (!obj.events[type]) {	
			//创建一个存放事件处理函数的数组
			obj.events[type] = [];
			//把第一次的事件处理函数先储存到第一个位置上
			if (obj['on' + type]) obj.events[type][0] = fn;
		} else {
			//同一个注册函数进行屏蔽，不添加到计数器中
			if (addEvent.equal(obj.events[type], fn)) return false;
		}
		//从第二次开始我们用事件计数器来存储
		obj.events[type][addEvent.ID++] = fn;
		//执行事件处理函数
		obj['on' + type] = addEvent.exec;
	}
}

//为每个事件分配一个计数器
addEvent.ID = 1;

//执行事件处理函数
addEvent.exec = function (event) {
	var e = event || addEvent.fixEvent(window.event);
	var es = this.events[e.type];
	for (var i in es) {
		es[i].call(this, e);
	}
};

//同一个注册函数进行屏蔽
addEvent.equal = function (es, fn) {
	for (var i in es) {
		if (es[i] == fn) return true;
	}
	return false;
}

//把IE常用的Event对象配对到W3C中去
addEvent.fixEvent = function (event) {
	event.preventDefault = addEvent.fixEvent.preventDefault;
	event.stopPropagation = addEvent.fixEvent.stopPropagation;
	event.target = event.srcElement;
	return event;
};

//IE阻止默认行为
addEvent.fixEvent.preventDefault = function () {
	this.returnValue = false;
};

//IE取消冒泡
addEvent.fixEvent.stopPropagation = function () {
	this.cancelBubble = true;
};


//跨浏览器删除事件
function removeEvent(obj, type, fn) {
	if (typeof obj.removeEventListener != 'undefined') {
		obj.removeEventListener(type, fn, false);
	} else {
		if (obj.events) {
			for (var i in obj.events[type]) {
				if (obj.events[type][i] == fn) { delete obj.events[type][i]; }
			}
		}
	}
}

//跨浏览器获取视口大小
function getInner() {
	return {
		width : window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth,
		height : window.innerHeight ||  document.documentElement.clientHeight || document.body.clientHeight	
	}
}

//跨浏览器获取滚动条位置
function getScroll() {
	return {
		top : document.documentElement.scrollTop || document.body.scrollTop,
		left : document.documentElement.scrollLeft || document.body.scrollLeft
	}
}

//跨浏览器获取Style
function getStyle(element, attr) {
	var value;
	if (typeof window.getComputedStyle != 'undefined') {			//W3C
		value = window.getComputedStyle(element, null)[attr];
	} else if (typeof element.currentStyle != 'undeinfed') {			//IE
		value = element.currentStyle[attr];
	}
	return value;
}

//判断class是否存在
function hasClass(element, className) {
	return element.className.match(new RegExp('(\\s|^)' +className +'(\\s|$)'));
}

//跨浏览器添加link规则
function insertRule(sheet, selectorText, cssText, position) {
	if (typeof sheet.insertRule != 'undefined') {					//W3C
		sheet.insertRule(selectorText + '{' + cssText + '}', position);
	} else if (typeof sheet.addRule != 'undefined') {			//IE
		sheet.addRule(selectorText, cssText, position);
	}
}

//跨浏览器移出link规则
function deleteRule(sheet, index) {
	if (typeof sheet.deleteRule != 'undefined') {				//W3C
		sheet.deleteRule(index);
	} else if (typeof sheet.removeRule != 'undefined') {//IE
		sheet.removeRule(index);
	}
}

//跨浏览器获取innerText
function getInnerText(element) {
	return (typeof element.textContent == 'string') ? element.textContent : element.innerText;
}

//跨浏览器设置innerText
function setInnerText(elememt, text) {
	if (typeof element.textContent == 'string') {
		element.textContent = text;
	} else {
		element.innerText = text;
	}
}

/** offsetTop()获取某一个元素到最外层顶点的位置 */
function offsetTop(element){
	var top = element.offsetTop;
	var parent = element.offsetParent;
	while( parent != null ){
		top += parent.offsetTop;
		parent = parent.offsetParent;
	}
	return top;
}

//删除左后空格
function trim(str) {
	return str.replace(/(^\s*)|(\s*$)/g, '');
}

//某一个值是否存在某一个数组中
function inArray(array, value) {
	for (var i in array) {
		if (array[i] === value) return true;
	}
	return false;
}

//滚动条清零
function scrollTop() {
	document.documentElement.scrollTop = 0;
	document.body.scrollTop = 0;
}

/** predef()阻止默认行为 */
function predef(e){
	e.preventDefault();
}

/** prevIndex()获取某一个节点的上一个节点的索引 */
function prevIndex(current,parent){
	var length = parent.children.length;
	if ( current == 0 ) return length -1;
	return parseInt(current) -1;
}

/** nextIndex()获取某一个节点的下一个节点的索引 */
function nextIndex(current,parent){
	var length = parent.children.length;
	if ( current == length-1 ) return 0;
	return parseInt(current) + 1;
}
/** fixedScroll()滚动条固定 */
function fixedScroll(){
	setTimeout(function(){
			window.scrollTo(fixedScroll.left,fixedScroll.top);
	},100);
}

/**
  * setCookie() 用来设置Cookie
  * @param		string			key 			设置cookie的名字
  * @param		 mixed		value		cookie的值
  * @param 		int				time		cookie的保存时间
  * @param 		string			path		cookie在服务器端的指定路径
  * @param 		string			domain	cookie所属服务器的网址名称
  * @param 		boolean	secure	cookie的安全识别常数ture or false	
  */
 function setCookie(key,value,time,path,domain,secure){
 	var expires = '';
 	if ( time != 'undefined' ){
 		var d = new Date();
 		d.setTime( d.getTime() + time*24*3600*1000 );
 		expires = ';expires=' + d.toUTCString();
 	}
 	var cookieText = encodeURIComponent(key) + '=' + encodeURIComponent(value) + expires;
 	if ( path){
 		cookieText += ';path='+ path;
 	}
 	if ( domain ){
 		cookieText += ';domain=' + domain;
 	}
 	if ( secure ){
 		cookieText += ';secure=' + secure;
 	}
 	document.cookie = cookieText;
 }
 
 /**
  * getCookie() 获取指定名称的cookie
  * @param string	key 需要获取的cookie名称
  * @return string 返回获取到的cookie的值
  */
 function getCookie(key){
 	var cookieName = encodeURIComponent(key) + '=';
 	var Val = document.cookie;
 	var Start = Val.indexOf(cookieName);
 	var cookieValue = '';
 	if ( Start > -1 ){
 		var End = Val.indexOf(';',Start);
 		if ( End == -1 ){
 			End = Val.length;
 		}
 		cookieValue = decodeURIComponent( Val.substring(Start + cookieName.length,End) );
 	}
 	return cookieValue;
 }

/**
 * delCookie() 用来删除指定的Cookie
 * @param string 	需要删除的cookie名称
 */
 function delCookie(key){
 	document.cookie = encodeURIComponent(key)+'=;expires='+new Date(0);
 }