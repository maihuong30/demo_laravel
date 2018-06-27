<form class="needs-validation" novalidate="" action="{{route('post.customer')}}" method='POST'>
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                               
    <div class="col-md-6 mb-3">
        <label for="validationCustom01">Name</label>
        <input type="text" name='Name' class="form-control"  required > 
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>



    <div class="col-md-6 mb-3">
        <label for="validationCustom02">Email</label>
        <input type="email" name='Email' class="form-control"  required='' >
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
     <div class="col-md-6 mb-3">
        <label for="validationCustom02">Phone</label>
        <input type="text" name='Phone' class="form-control"   required >
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
   


    <div class="col-md-6 mb-3">
        <label for="validationCustom03">Address</label>
        <input type="text" name='Address' class="form-control"  required='' >
        <div class="invalid-feedback">
            Please provide a valid city.
        </div>
    </div>

<input class="btn btn-primary" type="submit" value='Xác Nhận' >
</form>