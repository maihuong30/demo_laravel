<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helpers\CommonHelper;
use Illuminate\Support\Facades\DB;
use App;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  
        $customer=App\Customer::where('status',CUSTOMER_ACTIVE);   
        $customers = $customer->paginate(PAGINATION_LIMIT);// phan trang        
        return view('backend.customer.index',['customers'=>$customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('backend.customer.getForm');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {   
        
        $request->session()->flash('flash_message','Thêm khách hàng thành công.');
        $name= $request ->Name;
        $email=$request ->Email;
        $phone=$request ->Phone;
        $address=$request ->Address;

       App\Customer::insert([
                              'name'=>$name,
                              'email'=>$email,
                              'phone'=>$phone,
                              'address'=>$address,
                              'status'=>CUSTOMER_ACTIVE
                          ]);
        return redirect() -> route('customer.index');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {
       $customer=App\Customer::where('id',$id)->get();
       $files=DB::table('file')->where('id_other',$id)->where('type',2)->where('status',FILE_ACTIVE)->get();
   
       return view('backend.customer.show',['customer'=>$customer,'files'=>$files,'id'=>$id]);
       
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer=App\Customer::where('id',$id)->get() ;  
        // dd($customer); 
        return view('backend.customer.edit',['customer'=>$customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {  
        $request->session()->flash('flash_message','Sửa khách hàng thành công.');
        $name= $request ->Name;
        $email=$request ->Email;
        $phone=$request ->Phone;
        $address=$request ->Address;
        
        App\Customer::where('id',$id)->update(['name'=>$name,'email'=>$email,'phone'=>$phone,'address'=>$address]);
        return redirect() -> route('customer.index');

       // $this ->validate($request,
       //      [
       //          'Name' => 'required'
       //      ],
       //      [  
       //          'Name.required' => 'Ban chua nhap Name'
       //      ]);
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {   
        $request->session()->flash('flash_message','Xóa khách hàng thành công.');
        App\Customer::where('id',$id)->update(['status'=>'0']);
        return redirect() -> route('customer.index');
    }
}