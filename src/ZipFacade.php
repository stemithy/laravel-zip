<?php

namespace Stemithy\Zip;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Stemithy\Zip\Zip open($zip_file)
 * @method static \Stemithy\Zip\Zip create($zip_file, $overwrite = false)
 * @method static \Stemithy\Zip\Zip check($zip_file)
 */
class ZipFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'stemithy.zip';
    }
}
