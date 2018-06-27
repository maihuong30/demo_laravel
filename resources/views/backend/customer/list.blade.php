<table id="data_table" class="table table-bordered table-striped" cellspacing="0">
        <thead>
            <tr>
               {{--  <th>ID</th> --}}
                <th>Fullname</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>               
               {{--  <th>Status</th> --}}
                <th>Action</th> 
               
            </tr>
        </thead>
        <tbody>
            @forelse($customers as $customer)
           

                <tr>

                  {{--   <td> {{ $customer -> id }} </td> --}}
                    <td>{{ $customer-> name }}</td>
                    <td> {{ $customer -> email }} </td>
                    <td>{{ $customer-> phone }}</td>
                    <td> {{ $customer -> address }} </td>
                  {{--   <td class="text-center">
                        @if($customer->status == CUSTOMER_INACTIVE)
                           <i class="fa fa-times bg-webviet-uncheck"></i>
                        @else
                            <i class="fa fa-check bg-webviet-check"></i>
                        @endif
                    </td> --}}
                    <td class="text-center">
                        <a href="{{$url= route('show.customer',['id' =>$customer -> id])}}"><i class="fa fa-info"></i></a>
                        <a  href="{{ $url =route('edit.customer',['id' =>$customer -> id])}}"><i class="fa fa-edit"></i></a>
                        <a href="{{$url=route('customer/delete',['id'=>$customer -> id])}}" onClick='return confirmAction()'><i class="fa fa-trash"></i></a>
                    </td> 
                   {{--  <td class="text-center">
                        @if($user->status == USER_INACTIVE)
                            <i class="fa fa-check bg-webviet-uncheck"></i>
                        @else
                            <i class="fa fa-check bg-webviet-check"></i>
                        @endif
                    </td>
                    <td class="text-center">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash"></i>
                    </td> --}}
                </tr>
          
                @empty
            @endforelse
        </tbody>
    </table>
    <style >
        .pagination li{
            margin-left: 15px;
        }
    </style>
    {!! $customers -> links() !!}
    <script language="JavaScript">
        function confirmAction() {
            return confirm('Bạn thực sự muốn xóa ?')
            // body...
        }
        
    </script>