<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Route;
/**
* Auth: quyet@webviet.vn
* Date: 26/05/2018
* Des : Common Helper
**/
class CommonHelper
{
    public static $workerLogger = null;

    public static function getFilterParams($request)
    {
        $input = $request->all();
        return InputHelper::trimInput($input);
    }

    public static function saveSessionSearch($request, $filters, $sessionName = "", $forceWrite = 0)
    {
        //dd($filters);
        if ($sessionName != "") {
            $currentRoute = $sessionName;
        } else {
            $currentRoute = str_replace('.', '_', Route::getCurrentRoute()->getName());
        }

        if ($request->isMethod('post') || $forceWrite == 1) {
            session(['search.' . $currentRoute => $filters]);
        } else {
            $filters = session('search.' . $currentRoute, $filters);
        }

        return $filters;
    }

    public static function upload($files, $oid, $path, $type, $save = false) {
        // Xu ly upload file len server
        

        // Xu ly luu vao DB
        if (!empty($save)) {
            // Luu vao DB
        }
    }
}
