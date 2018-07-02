<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Helpers\CommonHelper;

class FileController extends Controller
{

   public function upload(Request $request, $id_other, $type)
   {    $request->session()->flash('flash_message','Thêm file thành công.');
        
        if( $request->hasFile('files')) { 
            foreach($request->file('files') as $file) {                           
                $detail=$request->detail;                
                CommonHelper::upload($file, $id_other, $type, $detail, true);            
            }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;          
        }

        else {
              echo "<script language='javascript'>
                   alert( 'Khong co file');
                   </script>";
        }      
   }

   public function delete(Request $request,$id)
   {    
        $request->session()->flash('flash_message','Xóa file thành công.');
        DB::table('file')->where('id',$id)->update(['status'=>FILE_INACTIVE]);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
   }
   public function edit($id)
    {
        $file=DB::table('file')->where('id',$id)->get() ;  
        // dd($customer); 
        return view('backend.file.edit',['file'=>$file]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id,$id_other)
    {  
        $request->session()->flash('flash_message','Sửa file thành công.');
       
        $detail=$request ->detail;
        
        DB::table('file')->where('id',$id)->update(['detail'=>$detail]);
        return redirect() -> route('show.customer',['id'=>$id_other]);

       // $this ->validate($request,
       //      [
       //          'Name' => 'required'
       //      ],
       //      [  
       //          'Name.required' => 'Ban chua nhap Name'
       //      ]);
      
    }

}