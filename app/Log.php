<?php

require('vendor/autoload.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

/**
 * Class Log
 */
class Log
{
    /**
     * ログを残すテスト。
     * @return void
     */
    public static function test(): void
    {
        $logger = new Logger('app_logger');

        // INFO以上のレベルのログをファイルに出力する設定
        $logger->pushHandler(new StreamHandler('logs/app.log', Logger::INFO));

        // 試しにログを残してみる
        $logger->info('Hello Monolog!!');
    }
}
