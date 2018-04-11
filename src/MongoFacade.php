<?php

namespace loaikanou\laravel_mongo;

use \Illuminate\Support\Facades\Facade;

class MongoFacade extends Facade {

    protected static function getFacadeAccessor() {
        return 'mongo';
    }
}
