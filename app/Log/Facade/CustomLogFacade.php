<?php
namespace App\Log\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \App\Log\CustomLog logInfo($message)
 * @method static \App\Log\CustomLog logError($message)
 * @method static \App\Log\CustomLog logWarning($message)
 * @method static \App\Log\CustomLog logApi($message)
 * @method static \App\Log\CustomLog logBatch($message)
 *
 * @see \App\Log\CustomLog
 */

class CustomLogFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'custom_log';
    }
}
