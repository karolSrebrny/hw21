<?php


namespace App\Service\Post;

use Illuminate\Support\Facades\Facade;

class PostFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
     return 'postService';
    }
}
