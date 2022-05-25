<?php
namespace App\Log;

use Illuminate\Support\Facades\Log;

class CustomLog
{
    public function helloWorld()
    {
        echo "Hello World";
    }

    public function LogInfo($message)
    {
        return Log::channel('info_log')->info($message);
    }

    public function logError($message)
    {
        return Log::channel('error_log')->error($message);

    }

    public function logWarning($message)
    {
        return Log::channel('warning_log')->warning($message);
    }

    public function logAPi($message)
    {
        return Log::channel('api_log')->info($message);
    }

    public function logBatch($message)
    {
        return Log::channel('batch_log')->info($message);
    }


}
