<?php 

namespace Merfiduke\Leanblog;

class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return Post::class;
    }
}