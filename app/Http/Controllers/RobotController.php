<?php
/**
 * Created by PhpStorm.
 * User: Willem Van Wyk
 * Date: 2015-11-14
 * Time: 05:40 PM
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class RobotController extends Controller
{
    public function index()
    {
        return View::make("robot", []);
    }
}
