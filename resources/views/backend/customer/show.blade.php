@extends('backend.layouts.defaults')
@section('content')
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
                            <th>Email</th>
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
                     <form action="{{ url('file') }}" enctype="multipart/form-data" method="POST">
                       {{ csrf_field() }}
                     <input type="file" name="filesTest" required="true">
                     <br/>
                       <input type="submit" value="upload">
                      </form>
                    
                </div>

                </div>

            </div>
        </div>
    </div>
@endsection