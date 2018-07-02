 
@extends('backend.layouts.defaults')
@section('content')
@include("backend.message.message")
  
    <div class="card card-shadow mb-4">
        <div class="card-header border-0">
            <div class="custom-title-wrap bar-primary">
                <div class="custom-title"></div>
            </div>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs mb-4" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tab_1">Thông tin customer </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab_3">Files</a>
                </li>

            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="tab_1" role="tabpanel">
                    <style type="text/css">
                        .pagination li{
                            margin-left: 10px;
                        }
                    </style>
                    <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email </th>
                            <th>Phone</th>
                            <th>Address</th>
                          
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customer as $customer)
                            <tr>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->email}}</td>
                                <td>{{$customer->phone}}</td>
                                <td>{{$customer->address}}</td>
                               
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="tab_3" role="tabpanel">
                    <div class="row">
                        <div class="form_file">


                            <table id='table' class="table table-bordered table-striped" cellspacing="0">
                                <thead>
                                    <tr>
                                        
                                        <th>Path</th>
                                        <th>Detail</th>
                                     {{--    <th>Status</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($files as $file)
                                            <?php

                                                 $fileName=$file->path;
                                                 $extension=pathinfo($fileName, PATHINFO_EXTENSION);
                                                 $extension=strtolower($extension);
                                                 $extension_image=array("png", "jpg","jpeg");
                                                 if(in_array($extension,$extension_image)) {  ?> 
                                                 <td><a href="{{$url=route('file/show',['path'=>$file ->path])}}" target="_blank"><img src="{{$url=route('file/show',$file ->path)}}"  width="100" ></a></td>  <?php } 
                                                 else  { ?>
                                                 <td ><a href="{{$url=route('file/show',['path'=>$file ->path])}}" target="_blank">{{$file ->path}}</a></td>
                                                 <?php }?>

                                            <td >{{$file ->detail}}</td>
                                            {{-- <td>{{$file ->path}}</td> --}}
                                            <td>
                                               <a href="{{$url=route('file/edit',['id'=>$file ->id])}}" title="Edit"><i class="fa fa-edit"></i></a>
                                                <a href="{{$url=route('file/delete',['id'=>$file ->id,'id_other'=>$file->id_other])}}" title="Delete" onClick='return confirmAction()'><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>

                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div class="col-md-4">
                           
                                <div class="card-header border-0">
                                    <div class="custom-title-wrap bar-danger">
                                       
                                        <div class="custom-title">Thêm file</div>
                                    </div>
                                    {{--@include('backend.includes.error')--}}
                                </div>
                                <div class="card-body">
                                   <form action="{{ $url=route('file/upload',['id_other'=> $id,'type'=>FILE_TYPE_CUSTOMER]) }}" enctype="multipart/form-data" method="POST" >
                                     {{ csrf_field() }}
                                     Mô tả : <input type="text" name="note" > <br/><br/>
                                     <input type="file" name="files[]" required="true" multiple="multiple"> <br/><br/>

                                     
                                     <input type="submit" value="Xác Nhận">
                                   </form>
                           
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
<style type="text/css" media="screen">
    .form_file { 
        width: 50%;
        overflow: auto;
 
    }
    tr{
         height: 70px;
         overflow: auto;
    }

   

</style>
<script language="JavaScript">
    function confirmAction() {
        return confirm('Do you want to delete?')
    }
   
</script>
 
@endsection