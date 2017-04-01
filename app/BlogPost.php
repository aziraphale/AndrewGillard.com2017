<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class BlogPost extends Model {
	use ObservantTrait;

    protected $table = 'blog_post';

}
