<?php
/**
 * Created by PhpStorm.
 * User: nair
 * Date: 21/8/17
 * Time: 5:11 PM
 */

namespace App\Models;

use DB;
use Illuminate\Support\Facades\Mail;
use Redirect;
use View;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Route;


class Home extends Model
{



    public static function index()
    {

        $query="SELECT * FROM users u JOIN user_groups ug ON u.ug_group_id = ug.group_id";
        $response=DB::select($query);

        return View::make('welcome')->with('data',$response);
    }


    public static function DeleteUser()
    {
        $id=$_GET['id'];

        $query="Update users set user_status = 'INACTIVE' where user_id = $id";
        $response=DB::update($query);

        if($response)
        {
            return 1;
        }
        return 0;
    }


}


