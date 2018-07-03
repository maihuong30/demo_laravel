<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Upload;

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

    public static function upload($file, $option = [], $type,$detail, $save = false) {
        // Xu ly upload file len server
      // dd($id_other);

            $fileNameWithExt = $file->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            
            $fileName=$fileName.'_'.time().'.'.$extension;
            $file->file_new_name_body =$fileName;
            // $file->image_resize = true;
            // $file->image_convert = gif;
            // $file->image_x = 100;
            // $file->image_ratio_y = true;
            //$file->Process('/home/user/files/');

            if ($type==2){
                $file->Process('file/customer');
            } else if ($type==1){
                $file ->Process('file/project');
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
   public static function uploadFile($file, 
        $path, 
        $fileType = "image/*", 
        $checkSize = true, 
        $crop = false, 
        $options = [], 
        $save = false
    ) {        
        $dir = env(PATH_UPLOAD).$path; // Duong dan vat ly tren server       
        if(!is_dir($dir)){            
            mkdir($dir,0755);        
        }        

        $nameFile = sha1(rand(1,100000) . microtime(true));        
        $handle   = new Upload($file);        
        $handle->file_new_name_body = $nameFile;        

        if (!empty($checkSize)) {            
            $handle->file_max_size = MAX_SIZE_FILE_UPLOAD;        
        }        
        if (!empty($fileType)) {            
            $handle->mime_check = true;        
        } else {            
            $handle->mime_check = false;        
        }    

        $handle->allowed = array($fileType);        
        $handle->Process($dir);        
        $thumbImg = '';      

        if ($handle->processed) {            
            $thumbImg = $handle->file_dst_name;         
        } else {                      
            return false;        
        }      

        if (isset($option['oid']) 
        && !empty($option['oid'])
        && !empty($save)
        ) {
            // Xu ly luu vao DB
        }

        return $thumbImg;    
    }
}
