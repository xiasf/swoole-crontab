<?php

/**
 * Created by PhpStorm.
 * User: ClownFish 187231450@qq.com
 * Date: 14-12-27
 * Time: 下午3:13
 */
class  Cmd implements PluginBase
{

    public function run($task)
    {
        $output_file = (isset($task["output"]) && !empty($task["output"])) ? $task["output"] : '/dev/null';
        $cmd = $task["cmd"] . ' >> ' . $output_file;
        exec($cmd, $output, $status);
        Main::log_write($cmd . ",已执行.status:" . $status);
        exit($status);
    }
}