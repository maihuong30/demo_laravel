<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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

    public static function upload($file, $id_other, $type,$detail, $save = false) {
        // Xu ly upload file len server
      // dd($id_other);
    
            $fileNameWithExt = $file->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            
            $fileName=$fileName.'_'.time().'.'.$extension;
            // $file->image_resize = true;
            // $file->image_convert = gif;
            // $file->image_x = 100;
            // $file->image_ratio_y = true;

                if ($type==2){
                    $file->move('file/customer', $fileName);
                } else if ($type==1){
                    $file ->move('file/project', $fileName);
                }
                    
                // $path=$fileName;
        // Xu ly luu vao DB
        if (!empty($save)) {

            // Luu vao DB
             
             DB::table('file')
                    ->insert([
                        'id_other'=>$id_other,
                        'type'=>$type,
                        'path'=>$fileName,
                        'status'=>FILE_ACTIVE,
                        'detail'=>$detail
                    ]);
        }
    }
   //  public function upload(Request $request, $id, $id_other, $type)
   // {

   //      if( $request->hasFile('files')) { 
   //          foreach($request->file('files') as $file) {
   //              $detail=$request->detail;
   //              $fileName = $file->getClientOriginalName();

   //              if ($type==FILE_TYPE_CUSTOMER){
   //                  $file->move('file/customer', $fileName);
   //              } else if ($type==FILE_TYPE_PROJECT){
   //                  $file ->move('file/project', $fileName);
   //              }
                    
   //              $path=$fileName;
   //              DB::table('file')
   //                  ->insert([
   //                      'id_other'=>$id_other,
   //                      'type'=>$type,
   //                      'path'=>$path,
   //                      'status'=>FILE_ACTIVE,
   //                      'detail'=>$detail
   //                  ]);
   //          }
   //        header('Location: ' . $_SERVER['HTTP_REFERER']);
   //        exit;
          
   //      }
   //      else {
   //      echo "<script language='javascript'>
   //                 alert( 'Khong co file');
   //            </script>";
   //    }
      

   // }
}
