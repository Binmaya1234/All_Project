<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
                                <h4 class="card-title el">Add prescription</h4>
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
                                        
                                        <form action="{{route('student.store')}}"  method="post">
                                        @csrf
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group ">
                                                        <b>Roll No:</b>
                                                    <select id="roll_no" required class="js-example-basic-single"
                                                       name="roll_no">
                                                       <option value="">Pls select Roll no</option>
                                                        @foreach($iteam as $stu)
                                                       
                                                        <option value="{{$stu->roll_No}}">{{$stu->roll_No}}</option>

                                                        @endforeach

                                                        </select>
                                                        <input type="text" id="eid" name="eid" hidden >
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group ">
                                                        <label for="date"><b>Date:</b></label>
                                                        <input type="date"  class="form-control" name="date"
                                                          value="<?php echo date('Y-m-d');?>">
                                                      
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group ">
                                                        <label for="name"><b>Name:</b></label>
                                                        <input type="text" class="form-control"
                                                         id="patient_name" placeholder="Enter Patient Name"name="name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group ">
                                                    <label for="type"><b>Gender:</b></label>
                                                        <input type="text" name="type" id="type_id" class="form-control"
                                                        placeholder="Enter Patient Gender">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group ">
                                                        <label for="problem"><b>Problem:</b></label>
                                                        <textarea rows="5" cols="10" name="problem" id="problem"
                                                         class="form-control"required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group ">
                                                        <label for="recommend"><b>Recommendation:</b></label>
                                                        <textarea rows="5" cols="10" name="recommend" id="recommend"
                                                          class="form-control"required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group ">
                                                        <label for="medicine"><b>Medicine:</b></label>
                                                        <textarea rows="5" cols="10" name="medicine" id="medicine"
                                                          class="form-control"required></textarea >
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" >
                                                     <div class="form-group ">
                                                        <button type="submit" name="submit" id="btn_submit"
                                                        class="btn btn-success"style="padding:10px;"value="0">
                                                        Submit</button>
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

<script>
    $(document).ready( function() {
    var now = new Date();
    var month = (now.getMonth() + 1);
    var day = now.getDate();
    if (month < 10)
        month = "0" + month;
    if (day < 10)
        day = "0" + day;
   // var today = now.getFullYear() + '-' + month + '-' + day;
    var today = day + '-' + month + '-' + now.getFullYear();
    $('#date').val(today);
});



</script>

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

 <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity=
  "sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
$(document).ready(function() {
$('.js-example-basic-single').select2({
placeholder: "Enter Patient Roll no ",
allowClear: true,
tags: true,
tokenSeparators: [',' , ' ']
});


});
</script>


<script>
    $('#roll_no').change(function(){
       var student = $("#roll_no").val();
 $.ajax({
   type:"get",
   url:"{{route('student.get_name')}}",

    daatype:"json",

    data:{"student":student},
    success:function(response) {
        // alert(response.name)
        console.log(response.gender);
        $('#patient_name').val(response.name);
        $('#eid').val(response.id);
        if(response.gender==0){
            var str_f='Female';
            $('#type_id').val(str_f);
            

        }else{
            var str_f='Male';
            $('#type_id').val(str_f);
            
        }
},
        error:function(response) {
        console.log(response);
        }
    });
});
    
    </script>
