<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/
	css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="crossorigin="anonymous"></script>
<style>
.AboutParagraph {
    font-size: 16px;
    font-family: Arial;
    text-align: justify;
}
.hrline{
       margin-top: 0px;
    margin-bottom: 23px;
    border: 0;
    border-top: 3px solid #333;
    width: 100%;
}
.Paragraph{
    float:right;
   margin-top:-30px;
}

    </style>
</head>
<body>
    <h1>Sick Bay</h1>
<center>
     
      <img src="https://uatgatepass.testsdib.in/public/images/sdiblogo.png"  alt="logo"  />
       

    
             <hr class="hrline">
                </center>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                         <span class="AboutParagraph "><b>Name:</b> {{$student[0]->name}}   </span>
                    </div>
                    <br>
                   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <span class="Paragraph "><b>Date:</b> {{$student[0]->date}}  </span>
                    </div>
                    <br>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"  style="margin-top:15px;">
                        <span class="AboutParagraph "><b>Roll no:</b> {{$student[0]->roll_No}} </span>
                    </div>
                    <br>
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"  style="margin-top:15px;">
                        <span class="AboutParagraph "><b>Gender:</b>
                        <?php if($student[0]->gender == "0"){echo "Female";}else{echo "Male";}?> </span>
                    </div>
                    <br>


                   
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="margin-top:15px;">
                    <span class="AboutParagraph "><b>Problem:</b></span>
                 
                    <div style="border:1px solid black!important;">
                    <span><?php echo $student[0]->problem;?></span>
                   </div>

                    </div>

                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="margin-top:15px;">
                    <span class="AboutParagraph "><b>Recommendation:</b></span>
                 
                    <div style="border:1px solid black!important;">
                    <span><?php echo $student[0]->recommend;?></span>
                   </div>

                </div>
                 <br>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:15px;">
                    <span class="AboutParagraph "><b>Medicine:</b></span>
                
                            <div style="border:1px solid black!important;">
                                <span> <?php echo $student[0]->medicine ; ?></span>
                            </div>

                </div>


</body>
</html>


<script>
    $( document ).ready(function() {
    window.print();
    // window.location.href ="/public/student";
});
</script>

