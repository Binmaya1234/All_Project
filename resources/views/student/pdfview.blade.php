

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
                                <h4 class="card-title el">Student</h4>
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
                                        <form action="{{route('student.store')}}"  method="POST">
                                        @csrf
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group ">
                                                        <label for="roll_no">Roll no:</label>
                                                        <input type="number" class="form-control"
                                                         id="roll_no" placeholder="Enter Patient Roll no"name="roll_no"
                                                         readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group ">
                                                        <label for="date">Date:</label>
                                                        <input type="text" class="form-control"
                                                        id="date" placeholder="Date"name="date"
                                                        value="{{$edit_student->date}}"readonly>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group ">
                                                        <label for="name">Name:</label>
                                                        <input type="text" class="form-control"
                                                         id="name" placeholder="Enter Patient name"name="name"
                                                         value="{{$edit_student->name}}"readonly>
                                                         <input type= "text" name="eid" value="{{$edit_student->id}}"
                                                          hidden>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group ">
                                                        <label for="gender">Gender:</label>
                                                        <select name="gender" id="gender" class="form-control" readonly>
								                            <option value="">Select Gender</option>
								                            <option value="1">Male</option>
								                            <option value="0">Female</option>
							                            </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group ">
                                                        <label for="problem">Problem:</label>
                                                        <textarea rows="5" cols="10" name="problem" id="problem"
                                                      class="form-control" readonly>{{$edit_student->problem}}
                                                    </textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group ">
                                                        <label for="recommend">Recommendation:</label>
                                                        <textarea rows="5" cols="10" name="recommend" id="recommend"
                                                      class="form-control"  readonly>{{$edit_student->recommend}}
                                                     </textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group ">
                                                        <label for="medicine">Medicine:</label>
                                                        <textarea rows="5" cols="10" name="medicine" id="medicine"
                                                     class="form-control" readonly>{{$edit_student->medicine}}
                                                    </textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" >
                                                     <div class="form-group ">
                                                         
                                                          <a href="{{route('student.index')}}"><button type="button"
                                                           name="submit"class="btn btn-danger" style="padding:10px;">
                                                           Back</button></a>
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
