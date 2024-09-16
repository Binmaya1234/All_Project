@include('admin.dashboard')

<style>
    .dataTables_filter{
        float: right;
    }
#example_paginate{
        float: right;

    }
    .card-company-table thead th {
        border: 1px solid #ebe9f1;
}
</style>

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce" class="latest3">
                <div class="row match-height">
                    <div class="col-xl-12 col-md-12 col-12">
                        <div class="card card-statistics">
                            <div class="card-header">
                                <h4 class="card-title el">Prescriptions</h4>
                             </div>
                        </div>
                    </div>
                 
                </div>
            </div>
         
                        <div class="card card-statistics">
            <form action="{{route('student.filter_date')}}" method="get">
                <div class="col-sm-12 col-md-12 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label style="font-size:15px; color:black;">From Date:</label>
                                <input type="date" class="form-control" name="start_date"
                                @if(isset($start_date))value="{{date('Y-m-d',strtotime($start_date))}}"
                                @endif></div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label style="font-size:15px; color:black;">To Date: </label>
                                    <input type="date" class="form-control" name="end_date"
                                    @if(isset($end_date))value="{{date('Y-m-d',strtotime($end_date))}}"@endif >
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-top:30px;">
                                <div class="form-group">
                                    <button type="submit" name="submit" style="font-size:15px;" class="btn btn-success">
                                        Filter</button>
                                    <a href="{{route('student.index')}}"><button type="button" style="font-size:15px;"
                                        class="btn btn-info">Reset</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                
                    </div>
                <div class="row match-height">
                    <div class="col-lg-12 col-12">
                        <div class="card card-company-table">
                            <div class="card-body p-0">
                                <div class="container-fluid">
                                </div>
                                <div class="row justify-content-between py-1">
	                                <div class="col">
		                                <h2 class="text-center m-0 text-danger">Prescriptions List</h2>
	                                </div>
	                                <div class="col-3">
                                        <a href="{{route('student.add')}}" class="btn btn-warning font-weight-bold"
                                         style="float:right;background-color:#7963e4!important;padding: 11px;">
                                         Add Prescription</a>
	                                </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-12 app-view-strip">
                                    <div class="card1 card-statistics">
                                        <div class="card-header1">
                                            <div class="row">
	                                            <div class="table-responsive container-fluid" style="background-color:white;">
		                                            <table id = "example" class="table table-bordered ">
			                                             <thead class="std-thead">
                                                            <tr>
                                                            <th>SL.NO</th>
				                                            <th>Name/Roll no</th>
				                                            <th>Date</th>
                                                            
                                                            <th>Problem</th>
				                                            <th>Recommendation</th>
				                                            <th>Medicine</th>
                                                            <th>ACTION</th>
                                                            </tr>
	                                                    </thead>
			                                            <tbody>
                                                            <?php $x=1;?>
                                                                @foreach($student as $data)
                                                                <tr>
                                                            
                                                                 
                                                                    <td>{{$x}}</td>
                                                                    <td>{{$data->name}} /{{$data->roll_No}}</td>
                                                                    <td>{{date('d-m-Y', strtotime($data->created_at))}}</td>
                                                                   
                                                                    <td> <?php echo"$data->problem"; ?> </td>
                                                                    <td> <?php echo"$data->recommend"; ?></td>
                                                                    <td><?php echo"$data->medicine"; ?></td>
                                                                   <td>
                                                                 <a href="{{route('student.print',['id'=>$data->id])}}" style="padding: 2px;">
                                                                <i class="fa fa-download"></i></a>
                                                            <a href="{{route('student.pdfview',['id'=>$data->id])}}"style="padding: 2px;" target="_blank">
                                                                <i class="fa fa-print"></i></a>
                                                            <a href="{{route('student.edit',['id'=>$data->id])}}"style="padding: 2px;">
                                                                <i class="fa fa-pencil-square-o"></i></a>
                                                    
                                                            <a href="{{route('student.delete',['id'=>$data->id])}}"style="padding: 2px;"
                                                           onclick="return confirm('Are you sure you want to delete?')">
                                                                    <i class="fa fa-trash-o"></i></a>
                                                                  </td>
                                                                </tr>
                                                            <?php $x++;?>
                                                            @endforeach
				                                        </tbody>
		                                            </table>
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



    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script>
    $(document).ready(function() {
        // alert('hyee');
    $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        } );
    } );
    </script>
         



         

