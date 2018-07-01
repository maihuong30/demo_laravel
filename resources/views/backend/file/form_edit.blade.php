<?php $file = $file[0] ?>
<form class="needs-validation" novalidate="" action="{{route('file/update',['id'=>$file->id,'id_other'=>$file->id_other])}}" method="POST">


     <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                               
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Path :</label>
                                        <?php

                                                 $fileName=$file->path;
                                                 $extension=pathinfo($fileName, PATHINFO_EXTENSION);
                                                 $extension=strtolower($extension);
                                                 $extension_image=array("png", "jpg","jpeg");
                                                 if(in_array($extension,$extension_image)) {  ?> 
                                                 <a href="{{$url=route('file/show',['path'=>$file ->path])}}" target="_blank"><img src="{{$url=route('file/show',$file ->path)}}"  width="100" ></a>  <?php } 
                                                 else  { ?>
                                                 <a href="{{$url=route('file/show',['path'=>$file ->path])}}" target="_blank">{{$file ->path}}</a>
                                                 <?php } ?>
                                       <!--  <input type="text" class="form-control" id="validationCustom01"  required="" value="{{$file ->path}}" name='Name'>  -->
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>


                                
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom02">Detail</label>
                                        <input type="email" class="form-control" id="validationCustom02" required="" value="{{ $file -> detail }}" name="detail">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    
                                
                              
                                  
                                
                                <button class="btn btn-primary" type="submit">Xác Nhận</button>
                            </form>