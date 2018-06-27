<?php $customer = $customer[0] ?>
<form class="needs-validation" novalidate="" action="{{route('post',['id' => $customer ->id])}}" method="POST">
     <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                               
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Name</label>
                                        <input type="text" class="form-control" id="validationCustom01"  required="" value="{{$customer ->name}}" name='Name'> 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>


                                
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom02">Email</label>
                                        <input type="email" class="form-control" id="validationCustom02" required="" value="{{ $customer -> email }}" name="Email">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="validationCustom02">Phone</label>
                                        <input type="text" class="form-control" id="validationCustom02"  required="" value="{{ $customer-> phone }}" name="Phone">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                   
                                
                              
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom03">Address</label>
                                        <input type="text" class="form-control" id="validationCustom03" required="" value="{{ $customer -> address }}" name="Address">
                                        <div class="invalid-feedback">
                                            Please provide a valid city.
                                        </div>
                                    </div>
                                
                                <button class="btn btn-primary" type="submit">Xác Nhận</button>
                            </form>