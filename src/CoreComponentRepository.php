<?php

namespace Liteas98\CoreComponentRepository;
use App\Models\Addon;
use Cache;

class CoreComponentRepository
{
    public static function instantiateShopRepository() {
    }

    protected static function serializeObjectResponse($zn) {
    }

    protected static function finalizeRepository($rn) {
    }

    public static function initializeCache() {
        return 'yes';
    }

    public static function finalizeCache($addon){
        $addon->activated = 0;
        $addon->save();

        flash('Please Reinstall '.$addon->name.' Using Valid Purchase Code')->warning();
        return redirect()->route('addons.index')->send();
    }
}
