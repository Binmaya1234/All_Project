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
                                <h4 class="card-title el">Draft</h4>
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
                                        <form action=""  method="">
                                        @csrf
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group ">
                                                        <label for="name">Roll no/Name:</label>
                                                        <input type="text" class="form-control"
                                                         id="name" placeholder="Enter your Roll no/name"name="name"
                                                         value=""required>
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group ">
                                                        <label for="date">Date:</label>
                                                        <input type="text" class="form-control"
                                                        id="date" placeholder="Date"name="date"
                                                        value="">
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group ">
                                                        <label for="problem">Problem:</label>
                                                        <textarea rows="5" cols="10" name="problem" id="problem"
                                                      class="form-control" ></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group ">
                                                        <label for="recommend">Recommend:</label>
                                                        <textarea rows="5" cols="10" name="recommend" id="recommend"
                                                      class="form-control"  ></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group ">
                                                        <label for="medicine">Medicine:</label>
                                                        <textarea rows="5" cols="10" name="medicine" id="medicine"
                                                     class="form-control" ></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" >
                                                     <div class="form-group ">
                                                         <button type="submit" name="submit" id="btn_submit"
                                                         class="btn btn-success"style="padding:10px;">Submit</button>
                                                          <a href=""><button type="button"
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