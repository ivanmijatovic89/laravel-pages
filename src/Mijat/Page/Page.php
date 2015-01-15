<?php
/**
 * Created by PhpStorm.
 * User: mijat
 * Date: 1/13/15
 * Time: 4:45 PM
 */

namespace Mijat\Page;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Page extends Eloquent  {

    protected $guarded = array();

    public static $rules = array(
        'title' => 'required',
        'body' => 'required'
    );

    public static function hello()
    {
        echo 'Hello this is my new page - method : hello';
    }

}