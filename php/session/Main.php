<?php
/**
 * Created by PhpStorm.
 * User: love
 * Date: 2016/11/5
 * Time: 15:16
 */
namespace session;

abstract class Main
{

    protected $resource = null; // 资源

    // 其他配置
    protected $options = [
        'prefix' => 'session',  // session前缀
        'expire' => 1440,       // 保存时间
    ];

    /**
     * run() 执行 session 设置
     */
    public function run()
    {
        //设置 session存储方式 为用户自定义
        session_module_name('user');

        //调用回调函数
        session_set_save_handler(
            array(&$this, 'open'),
            array(&$this, 'close'),
            array(&$this, 'read'),
            array(&$this, 'write'),
            array(&$this, 'destroy'),
            array(&$this, 'gc')
        );

        // 开启session
        session_start();
    }


    /**
     * open() 开启session
     * @param  string $strSessionPath session 保存路径
     * @param  string $strSessionName session 名称
     * @return mixed
     */
    abstract function open($strSessionPath, $strSessionName);

    /**
     * close() 关闭session
     * @return mixed
     */
    abstract function close();

    /**
     * read() 读取session
     * @param  string $strSessionId sessionId
     * @return mixed
     */
    abstract function read($strSessionId);

    /**
     * write() 写入session
     * @param  string $strSessionId session Id
     * @param  mixed  $mixSession   session 数据
     * @return mixed
     */
    abstract function write($strSessionId, $mixSession);

    /**
     * destroy() 删除session
     * @param  string $strSessionId session id
     * @return mixed
     */
    abstract function destroy($strSessionId);

    /**
     * gc() 回收session
     * @param  int $intMaxLifeTime 过期时间
     * @return mixed
     */
    abstract function gc($intMaxLifeTime);
}