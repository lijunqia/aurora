<?php
/**
 * Author: Abel Halo <zxz054321@163.com>
 */

namespace App\Providers;

use App\Foundation\Response;

/**
 * Runs only in web environment
 * @package App\Providers
 */
class WebServiceProvider extends ServiceProvider
{
    protected function register()
    {
        $this->di->setShared('response', new Response());
    }
}
