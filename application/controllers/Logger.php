<?php
/**
 * Logger.php
 * User: wlq314@qq.com
 * Date: 16/6/1 Time: 09:52
 */
class Logger extends CI_Controller{
    
    private $_basepath;
    private $_logger;
    
    public function __construct()
    {
        parent::__construct();
        $this->_basepath = '/data/logs/';
        $this->_logger = 'wechat-ci';
        Seaslog::setbasepath($this->_basepath);
        SeasLog::setLogger($this->_logger);
    }

    public function setbasepath($path){
        return Seaslog::setBasePath($path);
    }

    /**
     * DEBUG方法
     * @param $message
     * @param array $content
     * @param string $module
     */
    public function debug($message){
        SeasLog::debug($message);
    }

    public function log($content){
        Seaslog::info($content);
    }
}
