<?php
namespace App\Log\Facade;

use App\Log\CustomLog;
use Illuminate\Support\Facades\Facade;

class CustomLogFacade extends Facade
{
    /**
     * @method static CustomLog logInfo($message)
     * @method static CustomLog logError($message)
     * @method static CustomLog logWarning($message)
     * @method static CustomLog logApi($message)
     * @method static CustomLog logBatch($message)
     *
     * @see App\Log\CustomLog
     */
    protected static function getFacadeAccessor()
    {
        return 'custom_log';
    }
}
