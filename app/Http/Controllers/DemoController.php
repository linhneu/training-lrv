<?php

namespace App\Http\Controllers;

use App\Log\Facade\CustomLogFacade;

class DemoController extends Controller
{
    public function index() {
        $a = 1;
        if ( $a = 2 )
        {
//            CustomLog::logInfo($a);
//            CustomLog::logError($a);
//            CustomLog::logWarning($a);
//            CustomLog::logApi($a);
            CustomLogFacade::logBatch($a);
        }
    }

}
