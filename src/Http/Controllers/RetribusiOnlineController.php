<?php namespace Bantenprov\RetribusiOnline\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\RetribusiOnline\Facades\RetribusiOnline;
use Bantenprov\RetribusiOnline\Models\RetribusiOnlineModel;

/**
 * The RetribusiOnlineController class.
 *
 * @package Bantenprov\RetribusiOnline
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RetribusiOnlineController extends Controller
{
    public function demo()
    {
        return RetribusiOnline::welcome();
    }
}
