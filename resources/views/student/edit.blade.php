@include('admin.dashboard')

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section id="dashboard-ecommerce" class="latest3">
                <div class="row match-height">
                    <div class="col-xl-12 col-md-12 col-12">
                        <div class="card card-statistics">
                            <div class="card-header">
                                <h4 class="card-title el">Reports</h4>
                                <div class="d-flex align-items-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row match-height">
                    <div class="col-lg-12 col-12">
                        <div class="card card-company-table">
                            <div class="card-body p-0">
                                <div class="container-fluid">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                    <div class="row">
	                                <div class="card-body"style="margin-top:-45px;">
                                        <div class="card mt-4">
			                                <div class="card-header text-center">
				                            </div>
                                        </div>
                                        <form action="{{route('student.update')}}"  method="POST">
                                        @csrf
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group ">
                                                        <label for="roll_no"><b>Roll no:</b></label>
                                                        <input type="number" class="form-control"
                                                         id="roll_no" placeholder="Enter Patient Roll no"name="roll_no"
                                                         value="{{$edit_student[0]->roll_No}}"required>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group ">
                                                        <label for="date"><b>Date:</b></label>
                                                        <input type="date" class="form-control"
                                                        name="date" value="<?php echo date('Y-m-d')?>">
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group ">
                                                        <label for="name"><b>Name:</b></label>
                                                        <input type="text" class="form-control"
                                                         id="name" placeholder="Enter Patient Name"name="name"
                                                         value="{{$edit_student[0]->name}}"required>
                                                         <input type= "text" name="eid" value="{{$edit_student[0]->id}}"hidden>

                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group ">
                                                        <label for="type"><b>Gender:</b></label>
                                                        <input type="text" name="type" id="type" class="form-control"
                                                    placeholder="Enter Patient Gender"
                                                    value=<?php if($edit_student[0]->gender==0){echo "Female";}else{echo "Male";}?>
                                                        required>
								                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group ">
                                                        <label for="problem"><b>Problem:</b></label>
                                                        <textarea rows="5" cols="10" name="problem" id="problem"
                                                      class="form-control" required>{{$edit_student[0]->problem}}
                                                    </textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group ">
                                                        <label for="recommend"><b>Recommendation:</b></label>
                                                        <textarea rows="5" cols="10" name="recommend" id="recommend"
                                                      class="form-control"  required>{{$edit_student[0]->recommend}}
                                                     </textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group ">
                                                        <label for="medicine"><b>Medicine:</b></label>
                                                        <textarea rows="5" cols="10" name="medicine" id="medicine"
                                                     class="form-control" required>{{$edit_student[0]->medicine}}
                                                    </textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" >
                                                     <div class="form-group ">
                                                         <button type="submit" name="submit" id="btn_submit"
                                                         class="btn btn-success"style="padding:10px;">update</button>

                                                          <a href="{{route('student.index')}}"><button type="button"
                                                           name="submit"class="btn btn-danger" style="padding:10px;">
                                                           Close</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'problem' );
 </script>
 <script>
CKEDITOR.replace( 'recommend' );
 </script>
 <script>
CKEDITOR.replace( 'medicine' );
 </script>
