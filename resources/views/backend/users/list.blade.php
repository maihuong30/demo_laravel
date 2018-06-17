@if (!empty($users->toArray()['data']))
    <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
        <thead>
            <tr>
                <th>Account</th>
                <th>Fullname</th>
                <th class="text-center">Trạng thại</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
                <tr id="tr_{{ $user->id}}">
                    <td>
                        <a href="{{URL::route('users.edit', ["id" => $user->id ]) }}">{{ $user->username }}</a>
                    </td>
                    <td>{{ $user->fullname }}</td>
                    <td class="text-center">
                        @if($user->status == USER_INACTIVE)
                            <i class="fa fa-check bg-webviet-uncheck"></i>
                        @else
                            <i class="fa fa-check bg-webviet-check"></i>
                        @endif
                    </td>
                    <td class="text-center">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash"></i>
                    </td>
                </tr>
                @empty
            @endforelse
        </tbody>
    </table>
    <?php echo $users->appends($filters)->render(); ?>
@else
    <div class="col-sm-12 no-record">
        {!! trans('app.no_record') !!}
    </div>
@endif

{!! Form::hidden('delete_id', 0, ['id' => 'delete_id']) !!}
@section('create_js')
    <script type="text/javascript">
        $(document).ready(function (){
            $('#data_table').DataTable();
        });
    </script>
@endsection