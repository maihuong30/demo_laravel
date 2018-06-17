@extends('backend.pages.home')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-primary">
                    <div class="custom-title">Datatable</div>
                </div>
            </div>
            <div class="card-body pt-3 pb-4">
                <div class="table-responsive">
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    @include("backend.message.message")
                    @include("backend.filter.user")
                    @include('backend.users.list')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection