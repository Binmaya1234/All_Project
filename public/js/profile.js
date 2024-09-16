$(document).ready(function() { $('.js-example-basic-multiple').select2();});

	$("#state").change(function()
	{  
		$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')} });
		$.ajax( {
			url:'district',
			type:'post',
			data: {'state_id': $('#state').val()},
			success:function(data) {  
				if(data[0].length>0){ 
				response = data[0]; 
				$.each(response,function(i,item)
				{ $("#district").append("<option value='"+response[i].districtid+"'>"+response[i].district_title+"</option>"); });
				}else{alert("District List Not Found!!");}

			},error:function () { console.log('error'); }
		});
	})

	$("#district").change(function()
	{  
		$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')} });
		$.ajax( {
			url:'city',
			type:'post',
			data: {'district_id': $('#district').val()},
			success:function(data) {  
				if(data[0].length>0){ 
				response = data[0]; 
				$.each(response,function(i,item)
				{ $("#city").append("<option value='"+response[i].id+"'>"+response[i].name+"</option>"); });
				}else{alert("City List Not Found!!");}

			},error:function () { console.log('error'); }
		});
	})

	$("#aadhar_number").blur(function()
	{  
		$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')} });
		$.ajax( {
			url:'aadharCheck',
			type:'post',
			data: {'aadhar_number': $('#aadhar_number').val()},
			success:function(data) {  
				if(data != 0){
				 $("#aadhar_validation").show();
				 $("#aadhar_validation").html("**Aaadhar Number already exist..");
				 $("#submitButton").prop('disabled', true);
				}else{
				 $("#aadhar_validation").hide();
				 $("#submitButton").prop('disabled', false);
				}
			},error:function () { console.log('error'); }
		});
	})
	$("#email").blur(function()
	{  
		$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')} });
		$.ajax( {
			url:'emailvalidate',
			type:'get',
			data: {'email': $('#email').val()},
			success:function(data) {   
				if(data != 0){
				 $("#email_validation").show();
				 $("#email_validation").html("*Email already exist");
				 $("#data_status").prop('disabled', true);
				}else{
				 $("#email_validation").hide();
				 $("#data_status").prop('disabled', false);
				}
			},error:function () { console.log('error'); }
		});
	})

    $("#document_check").click(function(){ 
		var checkBox = document.getElementById("document_check");
		if (checkBox.checked == true){   
			$('#document_check_next').prop('checked', true);
			$("#qualification_div").hide();
			$("#interested_courses_div").hide();
			$("#document_select").prop("required", false);
			$("#interested_courses").prop("required", false);
		} else { 
			$('#document_check_next').prop('checked', false);
			$("#qualification_div").show();
			$("#interested_courses_div").show();
			$("#document_select").prop("required", true);
			$("#interested_courses").prop("required", true);
		}
   }); 
//   $(document).ready(function(){
//       alert('hyy');
//     $(".twelth_percentage_div").hide();
//     $(".twelve_abc").hide();
// 	$(".diploma_abc").hide();
// 	$(".degree_abc").hide();
//     $("#twelth_percentage").hide();
// 	$(".twelth_compl_year_div").hide();
// 	$("#twelth_compl_year").hide();
// 	$(".twelth_college_name_div").hide();
// 	$("#twelth_college_name").hide();
//     $(".diploma_percentage_div").hide();
//     $("#diploma_percentage").hide();
// 	$(".diploma_compl_year_div").hide();
// 	$("#diploma_compl_year").hide();
// 	$(".diploma_college_name_div").hide();
// 	$("#diploma_college_name").hide();
//     $(".degree_percentage_div").hide();
//     $("#degree_percentage").hide();
// 	$(".degree_compl_year_div").hide();
// 	$("#degree_compl_year").hide();
// 	$(".university_div").hide();
// 	$("#university").hide();
// });

//   $("#document_select").change(function()
   
// 	{  
		
// 		var document_type = $("#document_select").val();
// 		if(document_type=="Degree"){
// 			$("#degree_div").show();
// 			$("#twelveth_div").show();
// 			$("#tenth_div").show();
// 			$("#diploma_div").show();
// 			$(".twelve_abc").show();
// 			$(".diploma_abc").show();
// 			$(".degree_abc").show();
// 			$(".twelth_percentage_div").show();
// 			$("#twelth_percentage").show();
// 			$(".twelth_compl_year_div").show();
// 			$("#twelth_compl_year").show();
// 			$(".twelth_college_name_div").show();
// 			$("#twelth_college_name").show();
// 			$(".diploma_percentage_div").show();
// 			$("#diploma_percentage").show();
// 			$(".diploma_compl_year_div").show();
// 			$("#diploma_compl_year").show();
// 			$(".diploma_college_name_div").show();
// 			$("#diploma_college_name").show();
// 			$(".degree_percentage_div").show();
// 			$("#degree_percentage").show();
// 			$(".degree_compl_year_div").show();
// 			$("#degree_compl_year").show();
// 			$(".university_div").show();
// 			$("#university").show();
// 			$("#degree_document").prop("required", true);
// 			$("#twelve_document").prop("required", true);
// 			$("#ten_document").prop("required", true);
// 		}else if(document_type=="12th"){
// 			$(".diploma_abc").hide();
// 			$(".degree_abc").hide();
// 			$("#degree_div").hide();
// 			$("#twelveth_div").show();
// 			$("#tenth_div").show();
// 			$(".twelve_abc").show();
// 			$(".twelth_percentage_div").show();
// 			$("#twelth_percentage").show();
// 			$(".twelth_compl_year_div").show();
// 			$("#twelth_compl_year").show();
// 			$(".twelth_college_name_div").show();
// 			$("#twelth_college_name").show();
// 			$(".diploma_percentage_div").hide();
// 			$("#diploma_percentage").hide();
// 			$(".diploma_compl_year_div").hide();
// 			$("#diploma_compl_year").hide();
// 			$(".diploma_college_name_div").hide();
// 			$("#diploma_college_name").hide();
// 			$(".degree_percentage_div").hide();
// 			$("#degree_percentage").hide();
// 			$(".degree_compl_year_div").hide();
// 			$("#degree_compl_year").hide();
// 			$(".university_div").hide();
// 			$("#university").hide();
// 			$("#diploma_div").hide();
// 			$("#degree_document").prop("required", false);
// 			$("#twelve_document").prop("required", true);
// 			$("#ten_document").prop("required", true);
// 		}else if(document_type=="Diploma"){
// 			$("#degree_div").hide();
// 			$("#twelveth_div").show();
// 			$("#diploma_div").show();
// 			$("#tenth_div").show();
// 			$(".twelve_abc").hide();
// 			$("#twelveth_div").hide();
// 			$(".diploma_abc").show();
// 			$(".twelth_percentage_div").hide();
			
// 			$("#twelth_percentage").hide();
// 			$(".twelth_compl_year_div").hide();
// 			$("#twelth_compl_year").hide();
// 			$(".twelth_college_name_div").hide();
// 			$("#twelth_college_name").hide();
// 			$(".diploma_percentage_div").show();
// 			$("#diploma_percentage").show();
// 			$(".diploma_compl_year_div").show();
// 			$("#diploma_compl_year").show();
// 			$(".diploma_college_name_div").show();
// 			$("#diploma_college_name").show();
// 			$(".degree_percentage_div").hide();
// 			$("#degree_percentage").hide();
// 			$(".degree_compl_year_div").hide();
// 			$("#degree_compl_year").hide();
// 			$(".university_div").hide();
// 			$("#university").hide();
// 			$(".degree_abc").hide();
// 			$("#degree_document").prop("required", false);
// 			$("#twelve_document").prop("required", false);
// 			$("#diploma_document").prop("required", true);
// 			$("#ten_document").prop("required", true);
// 		}else if(document_type=="10th"){
// 			$("#degree_div").hide();
// 			$("#twelveth_div").hide();
// 			$("#tenth_div").show();
// 			$("#diploma_div").hide();
// 			$(".twelth_percentage_div").hide();
// 			$("#twelth_percentage").hide();
// 			$(".twelth_compl_year_div").hide();
// 			$("#twelth_compl_year").hide();
// 			$(".twelth_college_name_div").hide();
// 			$("#twelth_college_name").hide();
// 			$(".diploma_percentage_div").hide();
// 			$("#diploma_percentage").hide();
// 			$(".diploma_compl_year_div").hide();
// 			$("#diploma_compl_year").hide();
// 			$(".diploma_college_name_div").hide();
// 			$("#diploma_college_name").hide();
// 			$(".degree_percentage_div").hide();
// 			$("#degree_percentage").hide();
// 			$(".degree_compl_year_div").hide();
// 			$("#degree_compl_year").hide();
// 			$(".university_div").hide();
// 			$("#university").hide();
// 			$(".twelve_abc").hide();
// 			$(".diploma_abc").hide();
// 			$(".degree_abc").hide();
// 			$("#degree_document").prop("required", false);
// 			$("#twelve_document").prop("required", false);
// 			$("#ten_document").prop("required", true);
// 		}

// 	})


$(document).ready(function() {
        $("#fileUpload").on('change', function() {
          //Get count of selected files
          var countFiles = $(this)[0].files.length;
          var imgPath = $(this)[0].value;
          var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
          var image_holder = $("#image-holder");
          image_holder.empty();
          if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
              //loop for each file selected for uploaded.
              for (var i = 0; i < countFiles; i++) 
              {
                var reader = new FileReader();
                reader.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image"
                  }).appendTo(image_holder);
                }
                image_holder.show();
                reader.readAsDataURL($(this)[0].files[i]);
              }
            } else {
              alert("This browser does not support FileReader.");
            }
          } else {
            alert("Pls select only images");
          }
        });
      });










	
