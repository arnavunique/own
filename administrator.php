<?php 
session_start();
include("db_connect.php");

if(isset($_COOKIE['userid'])&&$_COOKIE['useremail']){
	
	$userid=$_COOKIE['userid'];
$useremail=$_COOKIE['useremail'];

$sqluser ="SELECT * FROM tbl_users WHERE Password='$userid' && Email='$useremail'";

$retrieved = mysqli_query($db,$sqluser);
    while($found = mysqli_fetch_array($retrieved))
	     {
              $firstname = $found['Firstname'];
		      $sirname= $found['Sirname'];
			  $userstate = $found['State'];	
			  $emails = $found['Email'];
			  	   $id= $found['id'];
          	   $role= $found['Role'];	
		          $profile='';
		 } 
}else{
	 header('location:index.php');
      exit;
     }
 //$profile='';
?>
<!DOCTYPE HTML>
<html>
<head>
 <link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">

<title>Clinic System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="admin/css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="admin/css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="admin/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='admin/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="admin/js/jquery-1.11.1.min.js"></script>
<script src="admin/js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 


<!-- Metis Menu -->
<script src="admin/js/metisMenu.min.js"></script>
<script src="admin/js/custom.js"></script>
<link href="admin/css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
 <script src="script/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="script/sweetalert.css">



<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>
 
</head>
<script type="text/javascript">
 $(document).on("click", ".open-Privilages", function () {
     var myTitle = $(this).data('ik');
       var myT = $(this).data('id');
       var myp1 = $(this).data('p1');
       var myp2 = $(this).data('p2');
       var myp3 = $(this).data('p3');
       var myp4 = $(this).data('p4');
       var myp5 = $(this).data('p5');
       var myp6 = $(this).data('p6');       
       var myp7 = $(this).data('p7');
       var myp8 = $(this).data('p8');
       var myp9 = $(this).data('p9');
       var myp10 = $(this).data('p10');
       var myp11 = $(this).data('p11');
       var myp12 = $(this).data('p12');
       var myp13 = $(this).data('p13');
       var myp14 = $(this).data('p14');
       var myp15 = $(this).data('p15');
       
     $(".modal-title #oldname").val(myTitle);
     $(".modal-body #userid").val(myT);
     //$(".modal-body #user").val('checked');
  
     if(myp1=="Yes"){ $(".modal-body #adduser").html('<input type="checkbox" class="form-control" name="adduser" value="" checked >'); }else{ $(".modal-body #adduser").html('<input type="checkbox" class="form-control" name="adduser" value="">'); }
     if(myp2=="Yes"){ $(".modal-body #manageusers").html('<input type="checkbox" class="form-control"  name="manageuser" value="" checked >'); }else{$(".modal-body #manageusers").html('<input type="checkbox" class="form-control"  name="manageuser" value="">'); }
     if(myp3=="Yes"){ $(".modal-body #logact").html('<input type="checkbox" class="form-control"  name="logactivities" value="" checked >'); }else{$(".modal-body #logact").html('<input type="checkbox" class="form-control"  name="logactivities" value="">'); }
     if(myp4=="Yes"){ $(".modal-body #addpat").html('<input type="checkbox" class="form-control" name="addpatient" value="" checked>'); }else{ $(".modal-body #addpat").html('<input type="checkbox" class="form-control" name="addpatient" value="">'); }
     if(myp5=="Yes"){ $(".modal-body #editpat").html('<input type="checkbox" class="form-control" name="editpatients" value="" checked>'); }else{$(".modal-body #editpat").html('<input type="checkbox" class="form-control"  name="editpatients" value="">'); }
     if(myp6=="Yes"){ $(".modal-body #managepat").html('<input type="checkbox" class="form-control" name="managep" value="" checked>'); }else{$(".modal-body #managepat").html('<input type="checkbox" class="form-control"  name="managep" value="">'); }
     if(myp7=="Yes"){ $(".modal-body #consult").html('<input type="checkbox" class="form-control" name="consultationacc" value="" checked >'); }else{ $(".modal-body #consult").html('<input type="checkbox" class="form-control" name="consultationacc" value="">'); }
     if(myp8=="Yes"){ $(".modal-body #labs").html(' <input type="checkbox" class="form-control" name="labaccess" value="" checked>'); }else{$(".modal-body #labs").html('<input type="checkbox" class="form-control"  name="labaccess" value="">'); }
     if(myp9=="Yes"){ $(".modal-body #accountss").html('<input type="checkbox" class="form-control" name="accountacc" value="" checked>'); }else{ $(".modal-body #accountss").html('<input type="checkbox" class="form-control" name="accountacc" value="">'); }
     if(myp10=="Yes"){ $(".modal-body #givedrugs").html('<input type="checkbox" class="form-control" name="givedrugs" value="" checked>'); }else{$(".modal-body #givedrugs").html('<input type="checkbox" class="form-control"  name="givedrugs" value="">'); }
     if(myp11=="Yes"){ $(".modal-body #adddrugs").html('<input type="checkbox" class="form-control" name="addrugs" value="" checked >'); }else{ $(".modal-body #adddrugs").html('<input type="checkbox" class="form-control" name="addrugs" value="">'); }
     if(myp12=="Yes"){ $(".modal-body #managedrugs").html('<input type="checkbox" class="form-control" name="managedrugs" value="" checked >'); }else{$(".modal-body #managedrugs").html('<input type="checkbox" class="form-control"  name="managedrugs" value="">'); }
     if(myp13=="Yes"){ $(".modal-body #todaysales").html('<input type="checkbox" class="form-control" name="todaysales" value="" checked >'); }else{$(".modal-body #todaysales").html('<input type="checkbox" class="form-control"  name="todaysales" value="">'); }
     if(myp14=="Yes"){ $(".modal-body #todaytreat").html('<input type="checkbox" class="form-control" name="todayret" value="" checked >'); }else{$(".modal-body #todaytreat").html('<input type="checkbox" class="form-control" name="todayret" value="">'); }
     if(myp15=="Yes"){$(".modal-body #reportmonth").html('<input type="checkbox" class="form-control" name="monthlyreport" value="" checked>'); }else{$(".modal-body #reportmonth").html('<input type="checkbox" class="form-control" name="monthlyreport" value="">'); }

}); 
 </script>
<script type="text/javascript">
 $(document).on("click", ".open-Updatepicture", function () {
     var myTitle = $(this).data('id');
     $(".modal-body #bookId").val(myTitle);
     
}); 
 </script>
 <script type="text/javascript">
 $(document).on("click", ".open-Passwords", function () {
     var myTitle = $(this).data('ik');
       var myT = $(this).data('id');
     $(".modal-title #oldteachername").val(myTitle);
     $(".modal-body #oldpassword").val(myT);
     
}); 

$(document).on("click", ".open-Scheme", function () {
     var myTitle = $(this).data('ik');
       var myT = $(this).data('id');
     $(".modal-title #oldteachername2").html(myTitle);
     $(".modal-body #oldpassword2").val(myT);
     
}); 
 </script>
<script type="text/javascript"> 
 $(document).on("click",".open-Approved",function(){
 	var myApproved=$(this).data('id');
 	  
               $.ajax({
                url: "upload.php", //php file which recive the new value and save it to the database
                data: { "Approvedstudies": myApproved },  //send the new value
               dataType:'json',
                method: "POST",
                success : function(response){
                $("#login_buttonz").html(response.Value);
                 //$("#total").html(response.Value2); 
	                	    }          
                  });  	
 });
</script>

<script type="text/javascript">
var track_page = 1; //track user click as page number, righ now page number 1
load_contents(track_page); //load content

$("#load_more_button").click(function (e) { //user clicks on button
	track_page++; //page number increment everytime user clicks load button
	load_contents(track_page); //load content
});

//Ajax load function
function load_contents(track_page){
	//$('.animation_image').show(); //show loading image
	
	$.post( 'fetch_home.php', {'page': track_page}, function(data){	
		 	
		$("#results").append(data); //append data into #results element		
				//hide loading image
		$('.animation_image').hide(); //hide loading image once data is received
	});  
	
	    
}

</script>
<script type="text/javascript">


 $(document).on("click", ".open-Others", function () { //user clicks on button
               			//$(".results").html("Yes we can");
                          //$("#results").html("Yes we can"); 
                         var  track_page = 2;
                          $.post( 'addsubjects.php', {'page': track_page}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });
          });

$(document).on("click", ".addpatient", function () { //user clicks on button
               			//$(".results").html("Yes we can");
                          //$("#results").html("Yes we can"); 
                         var  track_page = 3;
                          $.post( 'fetch_patient.php', {'page': track_page}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });
          });
          
          $(document).on("click", ".addteachers", function () { //user clicks on button
               			//$(".results").html("Yes we can");
                          //$("#results").html("Yes we can"); 
                         var  track_page = 4;
                          $.post( 'teachersentry.php', {'page': track_page}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });
          });

$(document).on("click", ".open-lessonplan", function () { //user clicks on button
               			//$(".results").html("Yes we can");
                          //$("#results").html("Yes we can"); 
                         var  track_page = 5;
                          $.post( 'lessonplan.php', {'page': track_page}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });
          });

$(document).on("click", ".open-allocation", function () { //user clicks on button
               			var subcode =document.getElementById("standards").value;                          
                        
                          $.post( 'teacherallocation.php', {'standard': subcode}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });
          });
$(document).on("click", ".open-promote", function () { //user clicks on button
               			var subcode =document.getElementById("standardsm").value;                          
                        
                          $.post( 'promote.php', {'standardx': subcode}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });
          });  
          
                  
              $(document).on("click", ".open-sendlab", function () { //user clicks on button
               			var patientid =document.getElementById("mypatientid").value; 
               			var labtests =document.getElementById("labtestss").value; 
                        var tests1 =document.getElementById("test1").value;  
                        var tests2 =document.getElementById("test2").value;  
                        var tests3 =document.getElementById("test3").value;  
                        var tests4 =document.getElementById("test4").value;  
                        var tests5 =document.getElementById("test5").value;  
                        var tests6 =document.getElementById("test6").value;  
                        var tests7 =document.getElementById("test7").value;  
                        var tests8 =document.getElementById("test8").value; 
                         var mydatat ="send";
                        
                          $.post( 'register.php', {'labdata':mydatat,'sendtolab': labtests,'patientids':patientid,'test1':tests1,'test2':tests2,'test3':tests3,'test4':tests4,'test5':tests5,'test6':tests6,'test7':tests7,'test8':tests8}, function(data){			
		                                  	var optionValue = 'group';
			$.ajax({
				type : 'POST',
				url : "consultation.php",
				data : {
					loadgroup : optionValue
				},
				success : function(result) {					
					
		    swal({title: "Successfull!", text: "Patient has been sent to lab.", type: "success"});

                   $("#results").html(result);
				}
			});	
				                 });
          }); 
          
          $(document).on("click", ".open-transpatient", function () { //user clicks on button
               			 
                         
        				$("#loadbutton").html("<img src='ajax-loader.gif' />&nbsp;sending results please wait...");
					//setTimeout(' window.location.href = "empl.php"; ',3000);
		

          }); 
$(document).on("click", ".addstudent", function () { //user clicks on button
               			 var  track_page = 6;                         
                        
                          $.post( 'fetch_student.php', {'standard': track_page}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });
          });
          
          $(document).on("click", ".managestudent", function () { //user clicks on button
               			 var  track_page = 7;                         
                        
                          $.post( 'manage_students.php', {'standard': track_page}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });
	          });
	          
	          $(document).on("click", ".managepatients", function () { //user clicks on button
               			 var  track_page = 70;                         
                       // window.alert(track_page);
                          $.post( 'manage_patients.php', {'standard': track_page}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });
                     });
          
          $(document).on("click", ".open-paidscheme", function () { //user clicks on button
               			  var track_page = 23;                       
                        
                          $.post( 'records.php', {'studentid': track_page}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });
          });
          
          $(document).on("click", ".gradeset", function () { //user clicks on button
               			var subcode =document.getElementById("gradestandards").value;                          
                        
                          $.post( 'gradesetup.php', {'standard': subcode}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });
          });
       $(document).on("click", ".openlabtests", function () { //user clicks on button
               			  var track_page = 8;                       
                        
                          $.post( 'labtests.php', {'studentid': track_page}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });
          });
          $(document).on("click", ".opentreatment", function () { //user clicks on button
               			  var track_page = 81;                       
                        
                          $.post( 'treatments.php', {'studentid': track_page}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });
          });
    $(document).on("click", ".trackpatients", function () { //user clicks on button
               			  var track_page = 81;                       
                        
                          $.post( 'admission.php', {'studentid': track_page}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });
          });
      $(document).on("click", ".manageusers", function () { //user clicks on button
               			var classstandard ="67";                          
                	                             
                       
                          $.post( 'user.php', {'standard': classstandard}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });
				                 
				           });
				           
         $(document).on("click", ".open-bulk", function () { //user clicks on button
               			//$(".results").html("Yes we can");
                          //$("#results").html("Yes we can"); 
                         var  track_page = 4;
                          $.post( 'bulkassessment.php', {'page': track_page}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });
          });
       $(document).on("click", ".openweekly", function () { //user clicks on button
               			  var track_page = 8;                       
                        
                          $.post( 'consultation.php', {'studentid': track_page}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });
          });
            $(document).on("click", ".openaccounts", function () { //user clicks on button
               			  var track_page = 8;                       
                        
                          $.post( 'accounts.php', {'studentid': track_page}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });
          });
          $(document).on("click", ".openaccounts2", function () { //user clicks on button
               			  var track_page = 8;                       
                        
                          $.post( 'accountsadmission.php', {'studentid': track_page}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });
          });
         $(document).on("click", ".givedrugs", function () { //user clicks on button
               			  var track_page = 18;                       
                        
                          $.post( 'drugs.php', {'studentid': track_page}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });
				                 
				                 var optionValue='chart';
 		 $.ajax({
 		 	    type :'POST',
                  url: "register.php",
                 data: {loadid:optionValue},
               success: function(result) {               
                                            $("#errors1").html(result);
                                          }
                });
                
                var optionValue='group';
 		 $.ajax({
 		 	    type :'POST',
                  url: "register.php",
                 data: {loadgroup:optionValue},
               success: function(result) {               
                                            $("#groupshow").html(result);
                                          }
                });    

          });
 			         
 $(document).on("click", ".opentoday", function () { //user clicks on button
               			  var track_page = 8;                       
                        
                          $.post( 'todayreport.php', {'studentid': track_page}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });
          });
          
           $(document).on("click", ".addstudents", function () { //user clicks on button
               			//$(".results").html("Yes we can");
                          //$("#results").html("Yes we can"); 
                         var  track_page = 9;
                          $.post( 'studentscvs.php', {'page': track_page}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });
          });
 $(document).on("click", ".openreports", function () { //user clicks on button
               			  var track_page = 8;                       
                        
                          $.post( 'logsreport.php', {'studentid': track_page}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });
          });
</script>
<script type="text/javascript">
$(function() {



   $(document).on("click", ".open-schemes", function () { 
  	
  	var patientschemeno = document.getElementById("schemeid").value;
    var patientid =document.getElementById("oldpassword2").value;
    var schemename =document.getElementById("medscheme").value;
        $.ajax ({
                 type :'POST',
                  url: "register.php",
                 data: {schemepid:patientid,schemeno:patientschemeno,schmetype:schemename},
               success: function(result) {               
                                            	var optionValue = 'group';
			$.ajax({
				type : 'POST',
				url : "accounts.php",
				data : {
					loadgroup : optionValue
				},
				success : function(result) {					
					
                     swal({title: "Successfull!", text: "Payment completed.", type: "success"});

                   $("#schemeid").val("");
                   $("#results").html(result);
				}
			});

                                          }
               });
     
      
                 });
                 
                 
                 $(document).on("click", ".open-btnGroup", function () {
                                  var userid = $(this).data('id');
                                  var mygroup = $(this).data('gn');
                               //var mygroup = document.getElementById("gname").value;
                                    $.ajax ({
                                              type :'POST',
                                                url: "register.php",
                                               data: {username:userid,gnamed:mygroup},
                           success: function(result) {               
                                                        $("#groupshow").html(result);
                                                       }
                                             });
           
                                       });
                                       
    $(document).on("click", ".open-group", function () {    
    var mygroupname = $(this).data('id');
     var groupcreator = $(this).data('ii');
     		 $.ajax({
 		 	    type :'POST',
                  url: "register.php",
                 data: {groups:mygroupname,groupcre:groupcreator},
               success: function(result) {               
                                            $("#groupshow").html(result);
                                          }
                  });  
                                  }); 
                                  
      $(document).on("click", ".open-btnPost", function () {
                                  var userid = $(this).data('id');
                                   var groupn = $(this).data('ib');
                                   var groupc = $(this).data('gc');
                               var mygroup = document.getElementById("txtpost").value;
                                    $.ajax ({
                                              type :'POST',
                                                url: "register.php",
                                               data: {username:userid,txtpost:mygroup,gname:groupn,groupcre:groupc},
                           success: function(result) {               
                                                        $("#groupshow").html(result);
                                                       }
                                             });
           
                                       });  
      $(document).on("click", ".open-exit", function () {
       var optionValue='group';
 		 $.ajax({
 		 	    type :'POST',
                  url: "register.php",
                 data: {loadgroup:optionValue},
               success: function(result) {               
                                            $("#groupshow").html(result);
                                          }
                });    
});                               
                  
  });
  
        
        
</script>
<script type="text/javascript"> 
            $(document).on("click", ".open-Delete", function () {
                                  var myValue = $(this).data('id');
                                        swal({
                                         title: "Are you sure?",
                                         text: "You want to remove this staff from the system!",
                                         type: "warning",
                                         showCancelButton: true,
                                        cancelButtonColor: "red",
                                        confirmButtonColor: "green",
                                        confirmButtonText: "Yes, remove!",
                                         cancelButtonText: "No, cancel!",
                                        closeOnConfirm: false,
                                        closeOnCancel: false,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                  	var vals=myValue;
                                               $.ajax ({
                                                      type : 'POST',
                                                      url: "register.php",
                                                      data: { Valuedel: vals},
                                                      success: function(result) {
                                                      if(result==098){
                                                      	
                                                      	var optionValue = 'group';
			$.ajax({
				type : 'POST',
				url : "user.php",
				data : {
					loadgroup : optionValue
				},
				success : function(result) {					
					
		    swal({title: "Deleted!", text: "Staff has been deleted from the system.", type: "success"});

                   $("#results").html(result);
				}
			});
                                                      	
                                                                  }

                                                       }
                                                  }); } else {
	                                                           swal("Cancelled", "This Staff is safe :)", "error");
                                                          }
                                         });
                                       
                                       });
$(document).on("click", ".open-Cash", function () {
                                  var myValue = $(this).data('id');
                                        swal({
                                         title: "Are you sure?",
                                         text: "You want to pay by Cash!",
                                         type: "warning",
                                         showCancelButton: true,
                                        cancelButtonColor: "red",
                                        confirmButtonColor: "green",
                                        confirmButtonText: "Yes, Accept!",
                                         cancelButtonText: "No, cancel!",
                                        closeOnConfirm: false,
                                        closeOnCancel: false,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                  	var vals=myValue;
                                               $.ajax ({
                                                      type : 'POST',
                                                      url: "register.php",
                                                      data: {cashpayment:vals},
                                                      success: function(result) {
                                                      if(result==1234){
                                                      	
                                                      	
                        	var optionValue = 'group';
			$.ajax({
				type : 'POST',
				url : "accounts.php",
				data : {
					loadgroup : optionValue
				},
				success : function(result) {					
					
		    swal({title: "Successfull!", text: "Payment Completed.", type: "success"});

                   $("#results").html(result);
				}
			});
               	
                     }

                                                       }
                                                  }); } else {
	                                                           swal("Cancelled", "Payment not complete :)", "error");
                                                          }
                                         });
                                       
                                       });                                       
                                       
                </script>

<script type="text/javascript"> 
            $(document).on("click", ".open-Deleted2", function () {
                                  var myValue = $(this).data('id');
                                  var myid = $(this).data('ix');
                                        swal({
                                         title: "Are you sure?",
                                         text: "You want to delete this staff log record!",
                                         type: "warning",
                                         showCancelButton: true,
                                        cancelButtonColor: "red",
                                        confirmButtonColor: "green",
                                        confirmButtonText: "Yes, remove!",
                                         cancelButtonText: "No, cancel!",
                                        closeOnConfirm: false,
                                        closeOnCancel: false,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                  	var vals=myValue;
                                                  	var vals2=myid;
                                               $.ajax ({
                                                      type : 'POST',
                                                      url: "register.php",
                                                      data: { Valuedel2: vals,valu3:vals2},
                                                      success: function(result) {
                                                                                    	var optionValue = 'group';
			$.ajax({
				type : 'POST',
				url : "logsreport.php",
				data : {
					loadgroup : optionValue
				},
				success : function(result) {					
					
		    swal({title: "Successfull!", text: "Log report deleted.", type: "success"});

                   $("#results").html(result);
				}
			});
                                                                          
                                                                                                     	                        
                                                                 

                                                       }
                                                  }); 
                                                  } else {
	                                                           swal("Cancelled", "This Staff is safe :)", "error");
                                                          }
                                         });
                                       
                                       });
  $(document).on("click", ".open-Admisson", function () {
                                  var myValue = $(this).data('id');
                                        swal({
                                         title: "Are you sure?",
                                         text: "You want to admit the patient!",
                                         type: "warning",
                                         showCancelButton: true,
                                        cancelButtonColor: "red",
                                        confirmButtonColor: "green",
                                        confirmButtonText: "Yes, Admit!",
                                         cancelButtonText: "No, cancel!",
                                        closeOnConfirm: false,
                                        closeOnCancel: false,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                  	var vals=myValue;
                                               $.ajax ({
                                                      type : 'POST',
                                                      url: "register.php",
                                                      data: {admissionp:vals},
                                                      success: function(result) {
                                                      if(result==12345){
                                                      	
                                                      	
                        	var optionValue = 'group';
			$.ajax({
				type : 'POST',
				url : "accounts.php",
				data : {
					loadgroup : optionValue
				},
				success : function(result) {					
					
		    swal({title: "Successfull!", text: "Admission complete.", type: "success"});

                   $("#results").html(result);
				}
			});
                              }

                             }
                       }); } else {
	                                 swal("Cancelled", "Patient not admitted :)", "error");
                                   }
                              });
                                       
                        });                                       
                </script>


<script type="text/javascript">
 $(document).on("click", ".open-Code", function () {
     var myTitle = $(this).data('ik');
       var myT = $(this).data('id');
     $(".modal-title #cname").val(myTitle);
      $(".modal-body #ccode").val(myT);
     $(".modal-body #cname").val(myTitle);
     
}); 
 </script>
 
<?php if(isset($_SESSION['memberadded'])){?>
 <script type="text/javascript"> 
 	        
            $(document).ready(function(){ 
                                    swal({
                                         title: "User added successfully",
                                         text: "Do you want to add another one?",
                                         type: "success",
                                         showCancelButton: true,
                                        confirmButtonColor: "green",
                                        confirmButtonText: "OK!",
                                        closeOnConfirm: true,
                                        closeOnCancel: true,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                           $('#Useradd').modal('show');
                                                     }                                          
                                          });
                                         
                                      });
                </script>       
              

           <?php 
	   session_destroy();		
		    }?>
		    <?php if(isset($_SESSION['memberexist'])){?>
                <script type="text/javascript"> 
            
                               
                                $(document).ready(function(){ 
                                    swal({
                                         title: "Not successful",
                                         text: "User arleady exist.Try again?",
                                         type: "warning",
                                         showCancelButton: true,
                                        confirmButtonColor: "green",
                                        confirmButtonText: "OK!",
                                        closeOnConfirm: true,
                                        closeOnCancel: true,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                           $('#Useradd').modal('show');
                                                     }                                          
                                          });
                                         
                                      });
                </script>
           <?php 
       	   session_destroy();}  
           ?>
            <?php if(isset($_SESSION['emptytextboxes'])){?>
                <script type="text/javascript"> 
        
                               
                               $(document).ready(function(){ 
                                    swal({
                                         title: "Not successful",
                                         text: "You did not fill all the textboxes.Try again?",
                                         type: "warning",
                                         showCancelButton: true,
                                        confirmButtonColor: "green",
                                        confirmButtonText: "OK!",
                                        closeOnConfirm: true,
                                        closeOnCancel: true,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                           $('#Useradd').modal('show');
                                                     }                                          
                                          });
                                         
                                      });
                </script>
           <?php 
       	   session_destroy();}  
           ?>
           <?php if(isset($_SESSION['subject'])){?>
                <script type="text/javascript"> 
            $(document).ready(function(){ 
                                    swal({
                                         title: "User removed successfully",
                                         text: "Do you want to remove another one?",
                                         type: "success",
                                         showCancelButton: true,
                                        confirmButtonColor: "green",
                                        confirmButtonText: "OK!",
                                        closeOnConfirm: true,
                                        closeOnCancel: true,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                         window.location ="administrator.php?id=2";
                                                     } 
                                           else {
                                                        window.location ="administrator.php";
                                                 }
                                         });
                                         
                                                    });
                </script>
           <?php 
       	   session_destroy();}  
           ?>
           <?php if(isset($_SESSION['cat'])){?>
                <script type="text/javascript"> 
            $(document).ready(function(){    	
    				              sweetAlert("Oops...", "This category arleady in the system", "error");     				              
                               });
                </script>
           <?php 
       	   session_destroy();}  
           ?>
           <?php if(isset($_SESSION['addpetient'])){?>
                <script type="text/javascript"> 
                	$(document).ready(function() {
			var optionValue = 'group';
			$.ajax({
				type : 'POST',
				url : "fetch_patient.php",
				data : {
					loadgroup : optionValue
				},
				success : function(result) {
					
                   $("#results").html(result);
                   
                                   swal({
                                         title: "Patient has been registered",
                                         text: "Do you want to view registered patient",
                                         type: "success",
                                         showCancelButton: true,
                                        confirmButtonColor: "green",
                                        confirmButtonText: "OK!",
                                        closeOnConfirm: true,
                                        closeOnCancel: true,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                           var  track_page = 70;                       
                                                           $.post( 'manage_patients.php', {'standard': track_page}, function(data){			
		                                                         $("#results").html(data); //append data into #results element		
				                                                  });
                                                     }                                          
                                          });

	
				}
			});

		});
          

                    </script>
      <?php  session_destroy(); }?>
                    
 <?php if(isset($_GET['pat'])){?>
                <script type="text/javascript"> 
            $(document).ready(function() {
		   var optionValue2 ='ttt';;
			$.ajax({
				type : 'POST',
				url : "admission.php",
				data : {
					term : optionValue2
				},
				success : function(result) {					

                   $("#results").html(result);
				}
			});

		})
                    </script>                               
           <?php 
       	   session_destroy();}  
           ?>   
  <?php if(isset($_SESSION['attenda'])){?>
                <script type="text/javascript"> 
            $(document).ready(function() {
			var optionValue ='<?php echo$_SESSION['attenda'] ?>';
		   
			$.ajax({
				type : 'POST',
				url : "reports.php",
				data : {
					standardz : optionValue
				},
				success : function(result) {					
					
		    swal({title: "Successfull!", text: "Students attendance has been captured.", type: "success"});

                   $("#results").html(result);
				}
			});

		})
                    </script>                               
           <?php 
       	   session_destroy();}  
          
		   if(isset($_SESSION['icdo'])){?>
                <script type="text/javascript"> 
 	        
            $(document).ready(function(){ 
                                    swal({
                                         title: "ICD10 Name added successfully",
                                         text: "Do you want to add another one?",
                                         type: "success",
                                         showCancelButton: true,
                                        confirmButtonColor: "green",
                                        confirmButtonText: "OK!",
                                        closeOnConfirm: true,
                                        closeOnCancel: true,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                           $('#Usericd10').modal('show');
                                                     }                                          
                                          });
                                         
                                      });
                </script>       
                             
           <?php 
       	   session_destroy();}  
           ?>              
           <?php if(isset($_SESSION['studentreg'])){?>
                <script type="text/javascript"> 
            $(document).ready(function() {
			var optionValue = 'group';
			$.ajax({
				type : 'POST',
				url : "fetch_student.php",
				data : {
					loadgroup : optionValue
				},
				success : function(result) {					
					
		    swal({title: "Successfull!", text: "Drug has been registered.", type: "success"});

                   $("#results").html(result);
				}
			});

		})
                    </script>                               
           <?php 
       	   session_destroy();}  
           ?>
                
              
           
                   
            <?php if(isset($_SESSION['Import'])) {?>
   <script type="text/javascript">
		$(document).ready(function() {
			var optionValue = 'group';
			$.ajax({
				type : 'POST',
				url : "teachersentry.php",
				data : {
					loadgroup : optionValue
				},
				success : function(result) {					
					
		    //swal({title: "Successfull!", text: "Teachers has been entered.", type: "success"});
                   $("#results").html(result);
                     swal({
                                         title: "Teachers have been entered",
                                         text: "Do you want to view them",
                                         type: "success",
                                         showCancelButton: true,
                                        confirmButtonColor: "green",
                                        confirmButtonText: "OK!",
                                        closeOnConfirm: true,
                                        closeOnCancel: true,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                           var  track_page = 70;                       
                                                           $.post( 'manage_teachers.php', {'standard': track_page}, function(data){			
		                                                         $("#results").html(data); //append data into #results element		
				                                                  });
                                                     }                                          
                                          });
				}
			});

		});

                    </script>
      <?php  session_destroy(); }?>
      
      <?php if(isset($_SESSION['Importstu'])) {?>
<script type="text/javascript">
		$(document).ready(function() {
			var optionValue = 'group';
			$.ajax({
				type : 'POST',
				url : "studentscvs.php",
				data : {
					loadgroup : optionValue
				},
				success : function(result) {					
					
		              $("#results").html(result);
                     swal({
                                         title: "Drugs have been entered",
                                         text: "Do you want to view them",
                                         type: "success",
                                         showCancelButton: true,
                                        confirmButtonColor: "green",
                                        confirmButtonText: "OK!",
                                        closeOnConfirm: true,
                                        closeOnCancel: true,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                           var  track_page = 70;                       
                                                           $.post( 'manage_students.php', {'standard': track_page}, function(data){			
		                                                         $("#results").html(data); //append data into #results element		
				                                                  });
                                                     }                                          
                                          });
				}
			});

		});

                    </script>
      <?php  session_destroy(); }?>
    
   <?php if(isset($_SESSION['updatestudent'])) {?>
<script type="text/javascript">
		$(document).ready(function() {
			var optionValue = 'group';
			$.ajax({
				type : 'POST',
				url : "manage_students.php",
				data : {
					loadgroup : optionValue
				},
				success : function(result) {					
					
		    swal({title: "Successfull!", text: "Student profile has been updated.", type: "success"});

                   $("#results").html(result);
				}
			});

		});

                    </script>
      <?php  session_destroy(); }?>
  <?php if(isset($_SESSION['priv'])) {?>
<script type="text/javascript">
		$(document).ready(function() {
			var optionValue = 'group';
			$.ajax({
				type : 'POST',
				url : "user.php",
				data : {
					loadgroup : optionValue
				},
				success : function(result) {					
					
		    swal({title: "Successfull!", text: "System user privilages updated.", type: "success"});

                   $("#results").html(result);
				}
			});

		});

                    </script>
      <?php  session_destroy(); }?>

   <?php if(isset($_SESSION['resultssent'])) {?>
<script type="text/javascript">
		$(document).ready(function() {
			var optionValue = 'group';
			$.ajax({
				type : 'POST',
				url : "labtests.php",
				data : {
					loadgroup : optionValue
				},
				success : function(result) {
					//$('#displaypatient').modal('hide');					
					
		    swal({title: "Successfull!", text: "Lab results sent to consultation.", type: "success"});

                   $("#results").html(result);
				}
			});

		});

                    </script>
      <?php  session_destroy(); }?>
   <?php if(isset($_SESSION['resultssent2'])) {?>
<script type="text/javascript">
		$(document).ready(function() {
			var optionValue = 'group';
			$.ajax({
				type : 'POST',
				url : "consultation.php",
				data : {
					loadgroup : optionValue
				},
				success : function(result) {
					//$('#displaypatient').modal('hide');					
					
		    swal({title: "Successfull!", text: "Prescription sent to Accounts.", type: "success"});

                   $("#results").html(result);
				}
			});

		});

                    </script>
      <?php  session_destroy(); }?>
     
     <?php if(isset($_SESSION['resultssent22'])) {?>
<script type="text/javascript">
		$(document).ready(function() {
			var optionValue = 'group';
			$.ajax({
				type : 'POST',
				url : "consultation.php",
				data : {
					loadgroup : optionValue
				},
				success : function(result) {
					//$('#displaypatient').modal('hide');					
					
		    swal({title: "Successfull!", text: "Patient diagnosed.", type: "success"});

                   $("#results").html(result);
				}
			});

		});

                    </script>
      <?php  session_destroy(); }?>
 
      <?php if(isset($_SESSION['resultssent3'])) {?>
<script type="text/javascript">
		$(document).ready(function() {
			var optionValue = 'group';
			$.ajax({
				type : 'POST',
				url : "consultation.php",
				data : {
					loadgroup : optionValue
				},
				success : function(result) {
					//$('#displaypatient').modal('hide');					
					
		    swal({title: "Successfull!", text: "Patient sent to lab.", type: "success"});

                   $("#results").html(result);
				}
			});

		});

                    </script>
      <?php  session_destroy(); }?>

     <?php if(isset($_SESSION['pass'])) {?>
<script type="text/javascript">
		$(document).ready(function() {
			var optionValue = 'group';
			$.ajax({
				type : 'POST',
				url : "user.php",
				data : {
					loadgroup : optionValue
				},
				success : function(result) {					
					
		    swal({title: "Successfull!", text: "Staff password successfully changed.", type: "success"});

                   $("#results").html(result);
				}
			});

		});

                    </script>
      <?php  session_destroy(); }?> 
   
   
      <script type="text/javascript"> 
            $(document).on("click", ".open-Deleted", function () {
                                  var myValue = $(this).data('id');
                                 // var myValue2 = $(this).data('ik');

                                        swal({
                                         title: "Are you sure?",
                                         text: "You will send the petient to consultation room!",
                                         type: "warning",
                                         showCancelButton: true,
                                        cancelButtonColor: "red",
                                        confirmButtonColor: "green",
                                        confirmButtonText: "Yes, send!",
                                         cancelButtonText: "No, cancel!",
                                        closeOnConfirm: false,
                                        closeOnCancel: false,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {
                                      	
                                      	
                                         
                                               $.ajax ({
                                                      type : 'POST',
                                                      url: "register.php",
                                                      data: {pconsultation : myValue },
                                                      success: function(result) {
                                                      	
                                                      	
                                                      if(result==111){
                                                               var optionValue = 'group';
                                                        
			$.ajax({
				type : 'POST',
				url : "manage_patients.php",
				data : {
				 loadgroup : optionValue
			 },
			 success : function(result) {					
				
		     swal({title: "Successfull!", text: "Petient has been sent.", type: "success"});
 
                    $("#results").html(result);
				}
			 });
                              	                        
                                                                 }

                                                       }
                                                  });
                                           } else {
	                                            swal("Cancelled", "Patient not sent :)", "error");
                                             }
                                         });
                                       
                                       });
                </script>
<script type="text/javascript"> 
            $(document).on("click", ".open-Deleteteacher", function () {
                                  var myValue = $(this).data('id');
                                 // var myValue2 = $(this).data('ik');

                                        swal({
                                         title: "Are you sure?",
                                         text: "You will not be able to recover this teacher!",
                                         type: "warning",
                                         showCancelButton: true,
                                        cancelButtonColor: "red",
                                        confirmButtonColor: "green",
                                        confirmButtonText: "Yes, delete it!",
                                         cancelButtonText: "No, cancel!",
                                        closeOnConfirm: false,
                                        closeOnCancel: false,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {
                                      	
                                      	
                                         
                                               $.ajax ({
                                                      type : 'POST',
                                                      url: "register.php",
                                                      data: {Valuedel: myValue },
                                                      success: function(result) {
                                                      	
                                                      	
                                                      if(result==500){
                                                               var optionValue = 'group';
                                                        
			$.ajax({
				type : 'POST',
				url : "manage_teachers.php",
				data : {
				 loadgroup : optionValue
			 },
			 success : function(result) {					
				
		     swal({title: "Successfull!", text: "Teacher has been deleted.", type: "success"});
 
                    $("#results").html(result);
				}
			 });
                              	                        
                                                                 }

                                                       }
                                                  });
                                           } else {
	                                            swal("Cancelled", "Your Teacher is safe :)", "error");
                                             }
                                         });
                                       
                                       });
                </script>

<script type="text/javascript"> 
            $(document).on("click", ".open-stdtransfer", function () {
                                  var myValue = $(this).data('id');
                                 // var myValue2 = $(this).data('ik');

                                        swal({
                                         title: "Accept",
                                         text: "Are you sure you want to accept this student!",
                                         type: "warning",
                                         showCancelButton: true,
                                        cancelButtonColor: "red",
                                        confirmButtonColor: "green",
                                        confirmButtonText: "Yes, Save!",
                                         cancelButtonText: "No, cancel!",
                                        closeOnConfirm: false,
                                        closeOnCancel: false,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {
                                      	
                                      	
                                         
                                               $.ajax ({
                                                      type : 'POST',
                                                      url: "register.php",
                                                      data: {Valuaccept: myValue },
                                                      success: function(result) {
                                                      	
                                                      	
                                                      if(result==522){
                                                               var optionValue = 'group';
                                                        
			$.ajax({
				type : 'POST',
				url : "transfers.php",
				data : {
				 loadgroup : optionValue
			 },
			 success : function(result) {					
				
		     swal({title: "Successfull!", text: "Student has been saved to your school.", type: "success"});
 
                    $("#results").html(result);
				}
			 });
                              	                        
                                                                 }

                                                       }
                                                  });
                                           } else {
	                                            swal("Cancelled", "Student not added :)", "error");
                                             }
                                         });
                                       
                                       });
                </script>

<script type="text/javascript"> 
            $(document).on("click", ".open-Deletex", function () {
                                  var myValue = $(this).data('id');
                                 // var myValue2 = $(this).data('ik');

                                        swal({
                                         title: "Are you sure?",
                                         text: "You will not be able to recover this teacher allocation!",
                                         type: "warning",
                                         showCancelButton: true,
                                        cancelButtonColor: "red",
                                        confirmButtonColor: "green",
                                        confirmButtonText: "Yes, delete it!",
                                         cancelButtonText: "No, cancel!",
                                        closeOnConfirm: false,
                                        closeOnCancel: false,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {
                                      	
                                      	
                                         
                                               $.ajax ({
                                                      type : 'POST',
                                                      url: "register.php",
                                                      data: {tdeleted : myValue },
                                                      success: function( result ) {
                                                      if(result!=""){
                                                                var optionValue = result;
			$.ajax({
				type : 'POST',
				url : "teacherallocation.php",
				data : {
					standard : optionValue
				},
				success : function(result) {					
					
		    swal({title: "Successfull!", text: "Teacher allocation has been deleted.", type: "success"});

                   $("#results").html(result);
				}
			});
                              	                        
                                                                 }

                                                       }
                                                  });
                                           } else {
	                                            swal("Cancelled", "Your subject is safe :)", "error");
                                             }
                                         });
                                       
                                       });
                </script>


<?php if(isset($_SESSION['regX'])) {?>
<script type="text/javascript"> 

$(document).ready(function(){  
 		                           swal({title: "Successful!", text: "School Information Updated!!.", type: "success"});

                               });
       
                    </script>
      <?php  session_destroy(); }?>
      


<script type="text/javascript">
function sum() {
            var txtFirstNumberValue = document.getElementById('txt1').value;
            var txtSecondNumberValue = document.getElementById('txt2').value;
             var txtForthNumberValue = document.getElementById('txt4').value;
            var result = (parseFloat(txtFirstNumberValue) /  parseFloat(txtForthNumberValue) )* parseFloat(txtSecondNumberValue);
            if (!isNaN(result)) {
                //document.getElementById('txt3').value = result;
                 $(".costperelement").html('Cost per Element MK'+result).prop("disabled", true);
            }
        }

          
          $(document).on("click", ".open-yess", function () { //user clicks on button
             			             			
             			 $(".historyinstructions").html("Type below clinical detail").prop("disabled", true);

             			$(".schoolbackgrounds").html("<textarea name='labtestss' style='width:500px; height:150px;' ></textarea>").prop("disabled", true);
                        
          });
          $(document).on("click", ".open-nos", function () { //user clicks on button
             			             			
             			 $(".historyinstructions").html("").prop("disabled", true);

             			$(".schoolbackgrounds").html("").prop("disabled", true);
                        
          });
          
          
          $(document).on("click", ".open-yes", function () { //user clicks on button
             			             			
             			 $(".disabilityinstruction").html("How much?").prop("disabled", true);

             			$(".disabilityexp").html("<textarea name='retailprice' style=' height:60px;width:100%' ></textarea>").prop("disabled", true);
                        
          });
          $(document).on("click", ".open-no", function () { //user clicks on button
             			             			
             			 $(".disabilityinstruction").html("").prop("disabled", true);

             			$(".disabilityexp").html("").prop("disabled", true);
                        
          });
           $(document).on("click", ".open-1", function () { //user clicks on button
             			             			
		    var medsnumber = document.getElementById("medscount").value;
			
                    $(".meds").html("");
                    $.ajax({
				type : 'POST',
				url : "register.php",
				data : {
					medstypes : medsnumber
				},
				success : function(result) {
                   
                   $(".meds").html(result);
				}
			});

    
          });
          
                  $(document).on("click", ".open-11", function () { //user clicks on button
             			             			
		    var medsnumber = document.getElementById("medscount2").value;
			
                    $(".meds").html("");
                    $.ajax({
				type : 'POST',
				url : "register.php",
				data : {
					medstypes2 : medsnumber
				},
				success : function(result) {
                   
                   $(".meds2").html(result);
				}
			});

    
          });
          
           $(document).on("click", ".open-Code1", function () {
         var myTitle = $(this).data('ik'); //payer name
         var myT = $(this).data('id'); //id
         var myTIN = $(this).data('it'); //tin
         var AmountT = $(this).data('im'); //address
        var myPN = $(this).data('pn'); //group 
         var mymails = $(this).data('em'); //email
         var myphone = $(this).data('ep'); //phone
         var mytemporary = $(this).data('et'); //temporarytin
         var mynature = $(this).data('in'); //nature ob
        var myaddress = $(this).data('ad'); //address
       var mycontact = $(this).data('ic'); //conatct person
       var myrdate = $(this).data('ir'); //rdate
       var mycdate = $(this).data('cd'); //cdate
       var mytop = $(this).data('tp'); //top
       var myoffice = $(this).data('ff'); //office
        var mygroup = $(this).data('ig'); //group
        var myTrans = $(this).data('tf'); //group
          var mydp = $(this).data('dp'); //group
           var mybc = $(this).data('bc'); //group
     var myguardianwork = $(this).data('pm'); //group
     var myBankn = $(this).data('bn'); //group
          var myBankbranch = $(this).data('br'); //group
           var myBankColl = $(this).data('bl'); //group
      $(".modal-body #gwork").val(myguardianwork);      
      $(".modal-body #bankcbn").val(myBankn);
     $(".modal-body #bankbranch").val(myBankbranch);
      $(".modal-body #collfee").val(myBankColl);          
     $(".modal-title #bankcbn").html(myBankn);
     $(".modal-title #cnamej").val(myTitle);
      $(".modal-body #sclass").val(myTitle);
      $(".modal-body #ccodes").val(myT);
     $(".modal-body #mytin").val(myTIN);
     $(".modal-body #myaddress").val(AmountT);     
     $(".modal-body #mymails").val(mymails);
     $(".modal-body #myphone").val(myphone);
      $(".modal-body #ttin").val(mytemporary);
     $(".modal-body #mynature").val(mynature);
     $(".modal-body #mycontact").val(mycontact);
      $(".modal-body #myrdate").val(myrdate);
     $(".modal-body #mycdate").val(mycdate);
      $(".modal-body #mytop").val(mytop);
     $(".modal-body #myoffice").val(myoffice);
     $(".modal-body #amntwords").val(mygroup);
    $(".modal-body #address").val(myaddress);
     $(".modal-body #pn").val(myPN);
      $(".modal-body #fee").val(myTrans);
     $(".modal-body #dp").val(mydp);
      $(".modal-body #bc").val(mybc);
}); 


$(document).on("click", ".open-studentinfo", function () {
         var myTitle = $(this).data('ik'); //payer name
         var myT = $(this).data('id'); //id
         var myTIN = $(this).data('it'); //tin
         var AmountT = $(this).data('im'); //address
        var myPN = $(this).data('pn'); //group 
         var mymails = $(this).data('em'); //email
         var myphone = $(this).data('ep'); //phone
         var mytemporary = $(this).data('et'); //temporarytin
         var mynature = $(this).data('in'); //nature ob
        var myaddress = $(this).data('ad'); //address
       var mycontact = $(this).data('ic'); //conatct person
       var myrdate = $(this).data('ir'); //rdate
       var mycdate = $(this).data('cd'); //cdate
       var mytop = $(this).data('tp'); //top
       var myoffice = $(this).data('ff'); //office
        var mygroup = $(this).data('ig'); //group
        var myTrans = $(this).data('tf'); //group
          var mydp = $(this).data('dp'); //group
           var mybc = $(this).data('bc'); //group
     var myparent = $(this).data('pp'); //group
     var myBankn = $(this).data('bn'); //group
          var myBankbranch = $(this).data('br'); //group
           var myBankColl = $(this).data('bl'); //group
              var myguardianwork = $(this).data('pm');
              var stprofile1 = $(this).data('pc');
        var userst ='<?php echo$userstate ?>';

            
               if(stprofile1=='' || stprofile1=='Paid' ){ 
               	
               	$("#paystate").html("<button type='button' class='Sendpharmacy btn btn-success'  data-dismiss='modal'><span class='fa fa-money' style='color: white'></span>&nbsp;<span id='stdalert'></span></button>");

            }else{
            	  $("#paystate").html('Complete Payment');

                 }
            
            if(AmountT=='Admitted'){
            	        $("#stdalert").html('Clear Bill Record');

            }else{
            	  $("#stdalert").html('Send to Pharmacy');

            }
               
             if(userst!='Super'){
                  var mydp ="";
                  var myparent ="";
                  var myPN ="";
            }
               
    // $("#stdprofile").html(stprofile);                                                                 //window.alert(myguardianwork);
     $("#gwork1").html(myguardianwork);        
     $("#relation1").html(myparent);  
      $("#bankcbn1").html(myBankn);
     $("#bankbranch1").html(myBankbranch);
      $("#collfee1").html(myBankColl);          
     $(".modal-title #bankcbn").html(myBankn);
     $(".modal-title #cnamej").html(myTitle);
      $("#sclass1").html(myTitle);
      $("#ccodes1").val(myT);
     $("#mytin1").html(myTIN);
     $("#mymails1").html(mymails);
     $("#myphone1").html(myphone);
      $("#ttin1").html(mytemporary);
     $("#mynature1").html(mynature);
     $("#mycontact1").html(mycontact);
      $("#myrdate1").html(myrdate);
     $("#mycdate1").html(mycdate);
      $("#mytop1").html(mytop);
     $("#myoffice1").html(myoffice);
     $("#amntwords1").html(mygroup);
    $("#address1").html(myaddress);
     $("#pn1").html(myPN);
      $("#fee1").html(myTrans);
     $("#dp1").html(mydp);
      $("#bc1").html(mybc);
}); 

$(document).on("click", ".open-studentinfo2", function () {
         var myTitle = $(this).data('ik'); //payer name
         var myT = $(this).data('id'); //id
         var myTIN = $(this).data('it'); //tin
         var AmountT = $(this).data('im'); //address
        var myPN = $(this).data('pn'); //group 
         var mymails = $(this).data('em'); //email
         var myphone = $(this).data('ep'); //phone
         var mytemporary = $(this).data('et'); //temporarytin
         var mynature = $(this).data('in'); //nature ob
        var myaddress = $(this).data('ad'); //address
       var mycontact = $(this).data('ic'); //conatct person
       var myrdate = $(this).data('ir'); //rdate
       var mycdate = $(this).data('cd'); //cdate
       var mytop = $(this).data('tp'); //top
       var myoffice = $(this).data('ff'); //office
        var mygroup = $(this).data('ig'); //group
        var myTrans = $(this).data('tf'); //group
          var mydp = $(this).data('dp'); //group
           var mybc = $(this).data('bc'); //group
     var myparent = $(this).data('pp'); //group
     var myBankn = $(this).data('bn'); //group
          var myBankbranch = $(this).data('br'); //group
           var myBankColl = $(this).data('bl'); //group
              var myguardianwork = $(this).data('pm');
              var stprofile = $(this).data('pc');
            
  
    // $("#stdprofile").html(stprofile);                                                                 //window.alert(myguardianwork);
     $("#gwork2").html(myguardianwork);        
     $("#relation2").html(myparent);  
      $("#bankcbn2").html(myBankn);
     $("#bankbranch2").html(myBankbranch);
      $("#collfee2").html(myBankColl);          
     $(".modal-title #bankcbn2").html(myBankn);
     $("#cnamej2").val(myTitle);
      $("#sclass2").html(myTitle);
      $("#ccodes2").val(myT);
     $("#mytin2").html(myTIN);
     $("#myaddress2").html(AmountT);     
     $("#mymails2").html(mymails);
     $("#myphone2").html(myphone);
      $("#ttin2").html(mytemporary);
     $("#mynature2").html(mynature);
     $("#mycontact2").html(mycontact);
      $("#myrdate2").html(myrdate);
     $("#mycdate2").html(mycdate);
      $("#mytop2").html(mytop);
     $("#myoffice2").html(myoffice);
     $("#amntwords2").html(mygroup);
    $("#address2").html(myaddress);
     $("#pn2").html(myPN);
      $("#fee2").html(myTrans);
     $("#dp2").html(mydp);
      $("#bc2").html(mybc);
      
      if(myTitle=='Admission'){ $("#givedrugs5").html('THIS IS AN ADMITTED PATIENT, PLEASE GIVE DRUGS');}else{ $("#givedrugs5").html('PATIENT HAS PAID');}
}); 
$(document).on("click", ".open-patientrec", function () {
         var myTitle = $(this).data('ik'); //payer name
         var myT = $(this).data('id'); //id
         var myTIN = $(this).data('it'); //tin
         var AmountT = $(this).data('im'); //address
        var myPN = $(this).data('pn'); //group 
         var mymails = $(this).data('em'); //email
         var myphone = $(this).data('ep'); //phone
         var mytemporary = $(this).data('et'); //temporarytin
         var mynature = $(this).data('in'); //nature ob
        var myaddress = $(this).data('ad'); //address
       var mycontact = $(this).data('ic'); //conatct person
       var myrdate = $(this).data('ir'); //rdate
       var mycdate = $(this).data('cd'); //cdate
       var mytop = $(this).data('tp'); //top
       var myoffice = $(this).data('ff'); //office
        var mygroup = $(this).data('ig'); //group
        var myTrans = $(this).data('tf'); //group
          var mydp = $(this).data('dp'); //group
           var mybc = $(this).data('bc'); //group
     var myparent = $(this).data('pp'); //group
     var myBankn = $(this).data('bn'); //group
          var myBankbranch = $(this).data('br'); //group
           var myBankColl = $(this).data('bl'); //group
              var myguardianwork = $(this).data('pm');
              var stprofile = $(this).data('pc');
            if( stprofile!=1){
            	        $("#stdprofile").html('<img src="multimedia/pictures/'+stprofile+'"/> ');

            }else{
            	  $("#stdprofile").html('<img src="images/profile.jpg"/> ');

            }
               
  
    // $("#stdprofile").html(stprofile);                                                                 //window.alert(myguardianwork);
     $("#gwork3").html(myguardianwork);        
     $("#relation3").html(myparent);  
      $("#bankcbn3").html(myBankn);
     $("#bankbranch3").html(myBankbranch);
      $("#collfee3").html(myBankColl);          
     $(".modal-title #bankcbn").html(myBankn);
     $(".modal-title #cnamej").html(myTitle);
      $("#sclass3").html(myTitle);
      $("#ccodes3").val(myT);
     $("#mytin3").html(myTIN);
     $("#myaddress3").html(AmountT);     
     $("#mymails3").html(mymails);
     $("#myphone3").html(myphone);
      $("#ttin3").html(mytemporary);
     $("#mynature3").html(mynature);
     $("#mycontact3").html(mycontact);
      $("#myrdate3").html(myrdate);
     $("#mycdate3").html(mycdate);
      $("#mytop3").html(mytop);
     $("#myoffice3").html(myoffice);
     $("#amntwords3").html(mygroup);
    $("#address3").html(myaddress);
     $("#pn3").html(myPN);
      $("#fee3").html(myTrans);
     $("#dp3").html(mydp);
      $("#bc3").html(mybc);
}); 

$(document).on("click", ".open-patientadmin", function () {
         var myTitle = $(this).data('ik'); //payer name
         var myT = $(this).data('id'); //id
         var myTIN = $(this).data('it'); //tin
         var AmountT = $(this).data('im'); //address
        var myPN = $(this).data('pn'); //group 
         var mymails = $(this).data('em'); //email
         var myphone = $(this).data('ep'); //phone
         var mytemporary = $(this).data('et'); //temporarytin
         var mynature = $(this).data('in'); //nature ob
        var myaddress = $(this).data('ad'); //address
       var mycontact = $(this).data('ic'); //conatct person
       var myrdate = $(this).data('ir'); //rdate
       var mycdate = $(this).data('cd'); //cdate
       var mytop = $(this).data('tp'); //top
       var myoffice = $(this).data('ff'); //office
        var mygroup = $(this).data('ig'); //group
        var myTrans = $(this).data('pc'); //group
          var mydp = $(this).data('dp'); //group
           var mybc = $(this).data('bc'); //group
     var myparent = $(this).data('pp'); //group
     var myBankn = $(this).data('bn'); //group
          var myBankbranch = $(this).data('br'); //group
           var myBankColl = $(this).data('bl'); //group
              var myguardianwork = $(this).data('pm');
              var stprofile = $(this).data('pc');
            if( stprofile!=1){
            	        $("#stdprofile").html('<img src="multimedia/pictures/'+stprofile+'"/> ');

            }else{
            	  $("#stdprofile").html('<img src="images/profile.jpg"/> ');

            }
               
  
    // $("#stdprofile").html(stprofile);                                                                 //window.alert(myguardianwork);
     $("#gwork4").html(myguardianwork);        
     $("#relation4").html(myparent);  
      $("#bankcbn4").html(myBankn);
     $("#bankbranch4").html(myBankbranch);
      $("#collfee4").html(myBankColl);          
     $(".modal-title #bankcbn").html(myBankn);
     $(".modal-title #cnamej").html(myTitle);
      $("#sclass4").html(myTitle);
      $("#ccodes4").val(myT);
     $("#mytin4").html(myTIN);
     $("#myaddress4").html(AmountT);     
     $("#mymails4").html(mymails);
     $("#myphone4").html(myphone);
      $("#ttin4").html(mytemporary);
     $("#mynature4").html(mynature);
     $("#mycontact4").html(mycontact);
      $("#myrdate4").html(myrdate);
     $("#mycdate4").html(mycdate);
      $("#mytop4").html(mytop);
     $("#myoffice4").html(myoffice);
     $("#amntwords4").html(mygroup);
    $("#address4").html(myaddress);
     $("#pn4").html(myPN);
      $("#fee4").html(myTrans);
     $("#dp4").html(mydp);
      $("#bc4").html(mybc);
}); 
$(document).on("click", ".open-studenthisto", function () {
              var mystudentname = $(this).data('mm');
              var stdprofile = $(this).data('ll');
              var stdactivies = $(this).data('up');
            if( stdprofile!=1){
            	        $("#stdsprofile").html('<img src="multimedia/pictures/'+stdprofile+'"/> ');

            }else{
            	  $("#stdsprofile").html('<img src="images/profile.jpg"/> ');

            }
       $("#studentnames").html(mystudentname);        
       $("#stdactivities").html(stdactivies);    
}); 


</script> 
 <script type="text/javascript">


          
          $(document).on("click", ".open-yes4", function () { //user clicks on button
             			             			
             			 $(".historyinstruction4").html("100 words maxmum").prop("disabled", true);

             			$(".schoolbackground4").html("<textarea name='prescribtioncomment' style='width:100%;'></textarea>").prop("disabled", true);
                        
          });
          $(document).on("click", ".open-no4", function () { //user clicks on button
             			             			
             			 $(".historyinstruction4").html("").prop("disabled", true);

             			$(".schoolbackground4").html("").prop("disabled", true);
                        
          });
           
          $(document).on("click", ".open-yes44", function () { //user clicks on button
             			             			

             			$(".schoolbackground44").html("<textarea name='managementplan' style='width:100%;'></textarea>").prop("disabled", true);
                        
          });
          $(document).on("click", ".open-no4", function () { //user clicks on button
             			             			

             			$(".schoolbackground44").html("").prop("disabled", true);
                        
          });
     
 $(document).on("change", ".schemefilter", function () { //user clicks on button
             			
             			var myschemefilter = document.getElementById("schemefilter").value; 
             			if(myschemefilter=='ALL')
             			{
             			     var track_page = 8;                       
                        
                          $.post( 'todayreport.php', {'studentid': track_page}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });	
             			} 
             			if(myschemefilter=='CASH')
             			{
             			     var track_page = 8;                       
                        
                          $.post( 'cashpayment.php', {'studentid': track_page}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });	
             			} 
             			if(myschemefilter=='SCHEME')
             			{
             			     var track_page = 8;                       
                        
                          $.post( 'schemepayment.php', {'studentid': track_page}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });	
             			}          			
                        
          });
     $(document).on("change", ".schemefilter2", function () { //user clicks on button
             			
             			var myschemefilter = document.getElementById("schemefilter2").value; 
             			if(myschemefilter=='MASM')
             			{
             			     var track_page = 8;                       
                        
                          $.post( 'masm.php', {'studentid': track_page}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });	
             			} 
             			if(myschemefilter=='Liberty Health Care')
             			{
             			     var track_page = 8;                       
                        
                          $.post( 'libertyhealth.php', {'studentid': track_page}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });	
             			} 
             			if(myschemefilter=='Blue Health Care')
             			{
             			     var track_page = 8;                       
                        
                          $.post( 'bluehealth.php', {'studentid': track_page}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });	
             			} 
             			if(myschemefilter=='Medi Health')
             			{
             			     var track_page = 8;                       
                        
                          $.post( 'medihealth.php', {'studentid': track_page}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });	
             			}  
             			if(myschemefilter=='Pacific Prime')
             			{
             			     var track_page = 8;                       
                        
                          $.post( 'pacificprime.php', {'studentid': track_page}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });	
             			} 
             			if(myschemefilter=='ALL')
             			{
             			     var track_page = 8;                       
                        
                          $.post( 'records.php', {'studentid': track_page}, function(data){			
		                                  $("#results").html(data); //append data into #results element		
				                 });	
             			}            			
                        
          });        
          
</script>
<script type="text/javascript">
	
	 
$(document).on("click", ".Sendpharmacy", function () { //user clicks on button
            var mypetient = document.getElementById("ccodes1").value;               			  
                         
                         
                        
                          $.post( 'register.php', {'cashier' : mypetient}, function(data){			
		                                  	var optionValue = 'group';
			$.ajax({
				type : 'POST',
				url : "accounts.php",
				data : {
					loadgroup : optionValue
				},
				success : function(result) {					
					
		    swal({title: "Successfull!", text: "Transaction has been sent to pharmacy.", type: "success"});

                   $("#results").html(result);
				}
			});	
				                 });
          }); 	

$(document).on("click", ".recordpatient", function () { //user clicks on button
            var mypetient = document.getElementById("ccodes2").value;               			  
            var myadmission = document.getElementById("cnamej2").value;               			  
                   
                        
                          $.post( 'register.php', {'recordpatient' : mypetient,'patientype': myadmission}, function(data){			
		                                  	var optionValue = 'group';
			$.ajax({
				type : 'POST',
				url : "drugs.php",
				data : {
					loadgroup : optionValue
				},
				success : function(result) {					
					
		    swal({title: "Successfull!", text: "Patient file closed.", type: "success"});

                   $("#results").html(result);
				}
			});	
				                 });
          }); 	

    
   $(document).on("click", ".addvitalreadings", function () { 
  	
  	var patientid = document.getElementById("mypatientid22").value;
    var bt =document.getElementById("bloodtemp").value;
    var pr =document.getElementById("pulserate").value;
    var rr =document.getElementById("respirationr").value;
    var bp =document.getElementById("bloodp").value;
    var bp2 =document.getElementById("bloodp2").value;
    var oxy =document.getElementById("oxygensatu").value;
    
    var myred ="ghdh";
        $.ajax ({
                 type :'POST',
                  url: "register.php",
                 data: {patientnumber:patientid,bloodtemp:bt,pulserate:pr,respirationr:rr,bloodp:bp,addvital:myred,bloodp2:bp2,oxyg:oxy},
               success: function(result) {               
                                            	var optionValue = 'group';
			$.ajax({
				type : 'POST',
				url : "admission.php",
				data : {
					loadgroup : optionValue
				},
				success : function(result) {					
					
                     swal({title: "Successfull!", text: "Readings recorded.", type: "success"});
                     $("#oxygensatu").val("");
                     $("#mypatientid22").val("");
                     $("#bloodtemp").val("");
                     $("#pulserate").val("");
                     $("#respirationr").val("");
                     $("#bloodp").val("");
                     $("#results").html(result);
                     $("#bloodp2").val("");
				}
			});

                                          }
               });
     
      
                 });       
</script>

<div id="Passwords" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-family: Times New Roman;color:#F0F0F0;"><center>
                    Reset Password of <input style="border: none;background:#222d32" type="text" id="oldteachername" value="" readonly="readonly" />
	    	
        	</center></h4>
      </div>
      <div class="modal-body" >
        <center>
             
        	<form method="post" action="register.php" enctype='multipart/form-data'>        		
            <p style="margin-bottom:10px;">&nbsp;Old Password:<input name='oldpassword' type='text' id='oldpassword' readonly="readonly">
            	</p>
        	<p style="margin-bottom:10px;">New Password:<input name='newpassword' type='text' id='newpass'></p> 
        	                                                        	      		
           
        </center>
        
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Reset" id="amendreceipt" name="resetpass"> &nbsp;
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
      </div>
       </form>
  </div>
  </div>
  
  <div id="Schemepay" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-family: Times New Roman;color:#F0F0F0;"><center>
                    Enter Scheme details of <span id="oldteachername2" ></span>
	    	
        	</center></h4>
      </div>
      <div class="modal-body" >
        <center>
             
            <p style="margin-bottom:10px;">&nbsp;Select Scheme:
            	<select style='width:18%;'  id="medscheme"  >
            		                                   <option>Medi Health</option>
        	     		                               <option>MASM</option>
            				                           <option>Liberty Health Care</option>
            				                           <option>Blue Health Care</option>            				                           
            				                           <option>Pacific Prime</option>        				                                        
            				                                				          				
            				</select>
            	</p>
        	<p style="margin-bottom:10px;">ID NO:&nbsp;<input name='schemeid' type='text' id='schemeid'></p> 
        	<input name='patientid' type='hidden' id='oldpassword2' readonly="readonly">                                                      	      		
           
        </center>
        
      </div>
      <div class="modal-footer">
        <input type="submit" class="open-schemes btn btn-success" value="Verify"  > &nbsp;
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
      </div>
       
  </div>
  </div>
 

<script type="text/javascript">
 $(document).on("click", ".open-Passwordss", function () {
     
       var myT = $(this).data('id');
     var myTitle = $(this).data('ie');
       var myp = $(this).data('if');
       var mym = $(this).data('ig');
       var myn = $(this).data('ih');
       var myk = $(this).data('ij');
       var mykm = $(this).data('ik');
      var myAc = $(this).data('ia'); 
       
       $("#oldname").html(myTitle);
       $("#oldname").html(myTitle);
       $("#oldpass").html(mykm);
       $("#ss").html(myp);     
       $("#bb").html(mym);
       $("#cc").html(myn);
       $("#dd").html(myk);
       $("#staffid").html(myT); 
       $("#act").html(myAc);
}); 
 </script>
 
 <script type="text/javascript">
 $(document).on("click", ".open-schools", function () {
     
       var myid = $(this).data('id');
         
     $(".modal-body #mystudentid").val(myid);
      
}); 
 </script>
 <script type="text/javascript">
 $(document).on("click", ".open-patient", function () {
     
       var myid = $(this).data('id');
       var myname = $(this).data('dp');
       var mytests = $(this).data('pd');
       var myresults = $(this).data('dd');
       var mystory = $(this).data('ss');
       var mycomplaint = $(this).data('cp');
       var mybp = $(this).data('bp');
       var mygl = $(this).data('gl');
       var myml = $(this).data('ml');
       var myhv = $(this).data('hv');
       var myba = $(this).data('ba');
       var mybb = $(this).data('bb');
       var mybc = $(this).data('bc');
       var mybd = $(this).data('bd');
         
         if(mybp=="FBS"){
            	        $("#testbp").html("<div class='input-group' style='margin-bottom:10px;'> <span class='input-group-addon'>Test</span><input type='text' name='bp'  class='form-control' value='Fasting Blood Sugar' disabled=''  ><span class='input-group-addon'>Results image</span><input type='file' name='file1' style='width:200px'  class='form-control'><span class='input-group-addon'>Comment</span><input type='text' placeholder='results comment' value=''  name='commentfbs' class='form-control' /> </div>");

                   }
          if(mygl=="RBS"){
            	        $("#testgl").html("<div class='input-group' style='margin-bottom:10px;'> <span class='input-group-addon'>Test</span><input type='text' name='rbs'  class='form-control' value='Random Blood Sugar' disabled=''  ><span class='input-group-addon'>Results image</span><input type='file' name='file2' style='width:200px'  class='form-control'><span class='input-group-addon'>Comment</span><input type='text' placeholder='results comment' value=''  name='commentrbs' class='form-control' />  </div>");

                   }
          if(myhv=="UCT"){
            	        $("#testhv").html("<div class='input-group' style='margin-bottom:10px;'> <span class='input-group-addon'>Test</span><input type='text' name='hiv'  class='form-control' value='Urea and Creatinine' disabled=''>      <span class='input-group-addon'>Results image</span><input type='file' name='file3' style='width:200px'  class='form-control'> <span class='input-group-addon'>Comment</span><input type='text' placeholder='results comment' value=''  name='commentuct' class='form-control' /></div>");

                   }
          if(myml=="PBS"){
            	        $("#testml").html("<div class='input-group' style='margin-bottom:10px;'> <span class='input-group-addon'>Test</span><input type='text' name='malaria'  class='form-control' value='Peripheral Blood Smear' disabled=''  >      <span class='input-group-addon'>Results image</span><input type='file' name='file4' style='width:200px'  class='form-control'><span class='input-group-addon'>Comment</span><input type='text' placeholder='results comment' value=''  name='commentpbs' class='form-control' /></div>");

                   }
            if(myba=="MRDT"){
            	        $("#testba").html("<div class='input-group' style='margin-bottom:10px;'> <span class='input-group-addon'>Test</span><input type='text' name='bp'  class='form-control' value='Malaria Rapid Diagnostic test' disabled=''  ><span class='input-group-addon'>Results image</span><input type='file' name='file5' style='width:200px'  class='form-control'><span class='input-group-addon'>Comment</span><input type='text' placeholder='results comment' value=''  name='commentmrdt' class='form-control' /> </div>");

                   }
          if(mybb=="FBC"){
            	        $("#testbb").html("<div class='input-group' style='margin-bottom:10px;'> <span class='input-group-addon'>Test</span><input type='text' name='rbs'  class='form-control' value='Full Blood Count' disabled=''  ><span class='input-group-addon'>Results image</span><input type='file' name='file6' style='width:200px'  class='form-control'><span class='input-group-addon'>Comment</span><input type='text' placeholder='results comment' value=''  name='commentfbc' class='form-control' />  </div>");

                   }
          if(mybc=="TFT"){
            	        $("#testbc").html("<div class='input-group' style='margin-bottom:10px;'> <span class='input-group-addon'>Test</span><input type='text' name='hiv'  class='form-control' value='Thyroid Function' disabled=''> <span class='input-group-addon'>Results image</span><input type='file' name='file7' style='width:200px'  class='form-control'> <span class='input-group-addon'>Comment</span><input type='text' placeholder='results comment' value=''  name='commenttft' class='form-control' /></div>");

                   }
          if(mybd=="LFT"){
            	        $("#testbd").html("<div class='input-group' style='margin-bottom:10px;'> <span class='input-group-addon'>Test</span><input type='text' name='malaria'  class='form-control' value='Liver Function' disabled=''  >      <span class='input-group-addon'>Results image</span><input type='file' name='file8' style='width:200px'  class='form-control'><span class='input-group-addon'>Comment</span><input type='text' placeholder='results comment' value=''  name='commentlft' class='form-control' /></div>");

                   }
     $(".modal-body #mypatientid").val(myid);
     $(".modal-title #mypatient").html(myname);
     $(".modal-body #labtests").val(mytests);
      $(".modal-body #labresults").val(myresults);
       $(".modal-body #lab").val(myresults);
      $(".modal-body #storyid").val(mystory);
      $(".modal-body #complainid").val(mycomplaint);
  
               
      
}); 
 </script>
 <script type="text/javascript">
 $(document).on("click", ".open-patient2", function () {
     
       var myid = $(this).data('id');
       var myname = $(this).data('dp');
       var mytests = $(this).data('pd');
       var myresults = $(this).data('dd');
       var mybp2 = $(this).data('bp');
       var comfbs = $(this).data('c1');
       var mygl2 = $(this).data('gl');
       var comrbs = $(this).data('c2');
       var myml2 = $(this).data('ml');
       var compbs = $(this).data('c4');
       var myhv2 = $(this).data('hv');
       var mycomc4 = $(this).data('c3');
       var mymrdt = $(this).data('a5');
       var commrdt = $(this).data('c5');     
       var myfbc = $(this).data('a6');
       var comfbc = $(this).data('c6');
       var mytft = $(this).data('a7');
       var comtft = $(this).data('c7');     
       var mylft = $(this).data('a8');
       var comlft = $(this).data('c8');
      var diagnosis = $(this).data('ds');
       
 //$("#mycomc4").val(comc4);
         if(mybp2!=""){
            	        $("#testbp2").html("<div class='input-group' style='margin-bottom:10px;'> <span class='input-group-addon'>Fasting Blood Sugar Test </span><span class='input-group-addon'>Results image<a class='example-image-link' href='labresults/"+mybp2+" ' data-lightbox='example-1'><img  height='20' src='labresults/"+mybp2+" '/></a></span><span class='input-group-addon'>Feedback</span><textarea  placeholder='"+comfbs+"' class='form-control' ></textarea> </div>");

                       
                   }else{
                   	        $("#testbp2").html("");
                      }
          if(mygl2!=""){
            	        $("#testgl2").html("<div class='input-group' style='margin-bottom:10px;'> <span class='input-group-addon'>Random Blood Sugar Test </span><span class='input-group-addon'>Results image<a class='example-image-link' href='labresults/"+mygl2+" ' data-lightbox='example-1'><img  height='20' src='labresults/"+mygl2+" '/></a></span><span class='input-group-addon'>Feedback</span><textarea  placeholder='"+comrbs+"' class='form-control' ></textarea> </div>");

                   }
                   else{
                   	        $("#testgl2").html("");
                      }
          if(myhv2!=""){
            	        $("#testhv2").html("<div class='input-group' style='margin-bottom:10px;'> <span class='input-group-addon'>Urea and Creatinine Test </span> <span class='input-group-addon'>Results image<a class='example-image-link' href='labresults/"+myhv2+" ' data-lightbox='example-1'><img  height='67' width='60'  src='labresults/"+myhv2+" '/></a> </span><span class='input-group-addon'>Feedback</span><textarea  placeholder='"+mycomc4+"' class='form-control' ></textarea> </div>");

                   }
                   else{
                   	        $("#testhv2").html("");
                      }
          if(myml2!=""){
            	        $("#testml2").html("<div class='input-group' style='margin-bottom:10px;'> <span class='input-group-addon'>Peripheral Blood Smear Test </span> <span class='input-group-addon'>Results image<a class='example-image-link' href='labresults/"+myml2+" ' data-lightbox='example-1'><img  height='20' src='labresults/"+myml2+" '/></a></span><span class='input-group-addon'>Feedback</span><textarea  placeholder='"+compbs+"' class='form-control' ></textarea> </div>");
                     }
                     else{
                   	        $("#testml2").html("");
                      }
            if(myfbc!=""){
            	        $("#testfbc2").html("<div class='input-group' style='margin-bottom:10px;'> <span class='input-group-addon'>Full Blood Count Test </span> <span class='input-group-addon'>Results image<a class='example-image-link' href='labresults/"+myfbc+" ' data-lightbox='example-1'><img  height='67' width='60'  src='labresults/"+myfbc+" '/></a> </span><span class='input-group-addon'>Feedback</span><textarea  placeholder='"+comfbc+"' class='form-control' ></textarea> </div>");

                   }
                   else{
                   	        $("#testfbc2").html("");
                      }
          if(mylft!=""){
            	        $("#testlft2").html("<div class='input-group' style='margin-bottom:10px;'> <span class='input-group-addon'>Liver Function Test </span> <span class='input-group-addon'>Results image<a class='example-image-link' href='labresults/"+mylft+" ' data-lightbox='example-1'><img  height='67' width='60'  src='labresults/"+mylft+" '/></a> </span><span class='input-group-addon'>Feedback</span><textarea  placeholder='"+comlft+"' class='form-control' ></textarea> </div>");

                   }
                   else{
                   	        $("#testlft2").html("");
                      }
            if(mymrdt!=""){
            	        $("#testmrdt2").html("<div class='input-group' style='margin-bottom:10px;'> <span class='input-group-addon'>Malaria Rapid Diagnostic Test</span> <span class='input-group-addon'>Results image<a class='example-image-link' href='labresults/"+mymrdt+" ' data-lightbox='example-1'><img  height='67' width='60'  src='labresults/"+mymrdt+" '/></a> </span><span class='input-group-addon'>Feedback</span><textarea  placeholder='"+commrdt+"' class='form-control' ></textarea> </div>");

                   }
                   else{
                   	        $("#testmrdt2").html("");
                      }
            if(mytft!=""){
            	        $("#testtft2").html("<div class='input-group' style='margin-bottom:10px;'> <span class='input-group-addon'>Thyroid Function Test </span> <span class='input-group-addon'>Results image<a class='example-image-link' href='labresults/"+mytft+" ' data-lightbox='example-1'><img  height='67' width='60'  src='labresults/"+mytft+" '/></a> </span><span class='input-group-addon'>Feedback</span><textarea  placeholder='"+comtft+"' class='form-control' ></textarea> </div>");

                   }
                   else{
                   	        $("#testtft2").html("");
                      }
          
                if(myml2!="" || myhv2!="" || mygl2!="" || mybp2!="" || mytft!="" || mymrdt!="" || mylft!="" || myfbc!="")
                             {
                             	$("#commented").html("<div class='input-group' style='margin-bottom:10px;'><span class='input-group-addon'>Clinical details </span><textarea name='disapexp'  id='labtests2' class='form-control' ></textarea> <span class='input-group-addon'>Lab Tech comment</span><textarea name='pconditional'  id='labresults2' class='form-control' ></textarea></div>");
                             }
                	        else{
                   	               $("#commented").html("");
                            }
                	
     $(".modal-body #mypatientid2").val(myid);
     $(".modal-title #mypatient2").html(myname);
     $(".modal-body #labtests2").val(mytests);
      $(".modal-body #labresults2").val(myresults);
      $(".modal-body #labdiag").val(diagnosis);
}); 




 </script>
  <script type="text/javascript">
 $(document).on("click", ".open-patient22", function () {
     
       var myid = $(this).data('id');
       var myname = $(this).data('dp');
       var mytests = $(this).data('pd');
       var myresults = $(this).data('dd');
       var mybp2 = $(this).data('bp');
       var comfbs = $(this).data('c1');
       var mygl2 = $(this).data('gl');
       var comrbs = $(this).data('c2');
       var myml2 = $(this).data('ml');
       var compbs = $(this).data('c4');
       var myhv2 = $(this).data('hv');
       var mycomc4 = $(this).data('c3');
       var mymrdt = $(this).data('a5');
       var commrdt = $(this).data('c5');     
       var myfbc = $(this).data('a6');
       var comfbc = $(this).data('c6');
       var mytft = $(this).data('a7');
       var comtft = $(this).data('c7');     
       var mylft = $(this).data('a8');
       var comlft = $(this).data('c8');
     
       
 //$("#mycomc4").val(comc4);
         if(mybp2!=""){
            	        $("#testbp22").html("<div class='input-group' style='margin-bottom:10px;'> <span class='input-group-addon'>Fasting Blood Sugar Test </span><span class='input-group-addon'>Results image<a class='example-image-link' href='labresults/"+mybp2+" ' data-lightbox='example-1'><img  height='20' src='labresults/"+mybp2+" '/></a></span><span class='input-group-addon'>Feedback</span><textarea  placeholder='"+comfbs+"' class='form-control' ></textarea> </div>");

                       
                   }else{
                   	        $("#testbp22").html("");
                      }
          if(mygl2!=""){
            	        $("#testgl22").html("<div class='input-group' style='margin-bottom:10px;'> <span class='input-group-addon'>Random Blood Sugar Test </span><span class='input-group-addon'>Results image<a class='example-image-link' href='labresults/"+mygl2+" ' data-lightbox='example-1'><img  height='20' src='labresults/"+mygl2+" '/></a></span><span class='input-group-addon'>Feedback</span><textarea  placeholder='"+comrbs+"' class='form-control' ></textarea> </div>");

                   }
                   else{
                   	        $("#testgl22").html("");
                      }
          if(myhv2!=""){
            	        $("#testhv22").html("<div class='input-group' style='margin-bottom:10px;'> <span class='input-group-addon'>Urea and Creatinine Test </span> <span class='input-group-addon'>Results image<a class='example-image-link' href='labresults/"+myhv2+" ' data-lightbox='example-1'><img  height='67' width='60'  src='labresults/"+myhv2+" '/></a> </span><span class='input-group-addon'>Feedback</span><textarea  placeholder='"+mycomc4+"' class='form-control' ></textarea> </div>");

                   }
                   else{
                   	        $("#testhv22").html("");
                      }
          if(myml2!=""){
            	        $("#testml22").html("<div class='input-group' style='margin-bottom:10px;'> <span class='input-group-addon'>Peripheral Blood Smear Test </span> <span class='input-group-addon'>Results image<a class='example-image-link' href='labresults/"+myml2+" ' data-lightbox='example-1'><img  height='20' src='labresults/"+myml2+" '/></a></span><span class='input-group-addon'>Feedback</span><textarea  placeholder='"+compbs+"' class='form-control' ></textarea> </div>");
                     }
                     else{
                   	        $("#testml22").html("");
                      }
            if(myfbc!=""){
            	        $("#testfbc22").html("<div class='input-group' style='margin-bottom:10px;'> <span class='input-group-addon'>Full Blood Count Test </span> <span class='input-group-addon'>Results image<a class='example-image-link' href='labresults/"+myfbc+" ' data-lightbox='example-1'><img  height='67' width='60'  src='labresults/"+myfbc+" '/></a> </span><span class='input-group-addon'>Feedback</span><textarea  placeholder='"+comfbc+"' class='form-control' ></textarea> </div>");

                   }
                   else{
                   	        $("#testfbc22").html("");
                      }
          if(mylft!=""){
            	        $("#testlft22").html("<div class='input-group' style='margin-bottom:10px;'> <span class='input-group-addon'>Liver Function Test </span> <span class='input-group-addon'>Results image<a class='example-image-link' href='labresults/"+mylft+" ' data-lightbox='example-1'><img  height='67' width='60'  src='labresults/"+mylft+" '/></a> </span><span class='input-group-addon'>Feedback</span><textarea  placeholder='"+comlft+"' class='form-control' ></textarea> </div>");

                   }
                   else{
                   	        $("#testlft22").html("");
                      }
            if(mymrdt!=""){
            	        $("#testmrdt22").html("<div class='input-group' style='margin-bottom:10px;'> <span class='input-group-addon'>Malaria Rapid Diagnostic Test</span> <span class='input-group-addon'>Results image<a class='example-image-link' href='labresults/"+mymrdt+" ' data-lightbox='example-1'><img  height='67' width='60'  src='labresults/"+mymrdt+" '/></a> </span><span class='input-group-addon'>Feedback</span><textarea  placeholder='"+commrdt+"' class='form-control' ></textarea> </div>");

                   }
                   else{
                   	        $("#testmrdt22").html("");
                      }
            if(mytft!=""){
            	        $("#testtft22").html("<div class='input-group' style='margin-bottom:10px;'> <span class='input-group-addon'>Thyroid Function Test </span> <span class='input-group-addon'>Results image<a class='example-image-link' href='labresults/"+mytft+" ' data-lightbox='example-1'><img  height='67' width='60'  src='labresults/"+mytft+" '/></a> </span><span class='input-group-addon'>Feedback</span><textarea  placeholder='"+comtft+"' class='form-control' ></textarea> </div>");

                   }
                   else{
                   	        $("#testtft22").html("");
                      }
          
                if(myml2!="" || myhv2!="" || mygl2!="" || mybp2!="" || mytft!="" || mymrdt!="" || mylft!="" || myfbc!="")
                             {
                             	$("#commented22").html("<div class='input-group' style='margin-bottom:10px;'><span class='input-group-addon'>Clinical details </span><textarea name='disapexp'  id='labtests2' class='form-control' ></textarea> <span class='input-group-addon'>Lab Tech comment</span><textarea name='pconditional'  id='labresults2' class='form-control' ></textarea></div>");
                             }
                	        else{
                   	               $("#commented22").html("");
                            }
                	
     $(".modal-body #mypatientid22").val(myid);
     $(".modal-title #mypatient22").html(myname);
     $(".modal-body #labtests22").val(mytests);
      $(".modal-body #labresults22").val(myresults);
       
}); 




 </script>
 <div id="Privilages" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-family: Times New Roman;color:#F0F0F0;"><center>
                    Add/Change Privilages of <input style="border: none;background:#222d32" type="text" id="oldname" value="" readonly="readonly" />
	    	
        	</center></h4>
      </div>
      <div class="modal-body" >
        <center>
             
        	<form method="post" action="register.php" enctype='multipart/form-data'>        		
     <div class="input-group" style="margin-bottom:10px">
    <span class="input-group-addon"><span class="fa fa-user-plus"></span>&nbsp;Add System User
    <span id='adduser'></span>
   </span>
   
      <span class="input-group-addon"><span class="fa fa-users"></span>&nbsp;Manage System Users
      <span id='manageusers'></span>
   </span>
     
    <span class="input-group-addon"><span class="fa fa-file-pdf-o"></span>&nbsp;View Log Activities
    <span id='logact'></span>
   </span>
  </div>
  
  <div class="input-group" style="margin-bottom:10px">
    <span class="input-group-addon"><span class="fa fa-user-plus"></span>&nbsp;Add Patients
    <span id='addpat'></span>
   </span>
      <span class="input-group-addon"><span class="fa fa-edit"></span>&nbsp;Edit Patients
   <span id='editpat'></span>
   </span>
      <span class="input-group-addon"><span class="fa fa-users"></span>&nbsp;Manage Patients
   <span id='managepat'></span>
   </span>
  </div>
  <div class="input-group" style="margin-bottom:10px">
    <span class="input-group-addon"><span class="fa fa-hotel"></span>&nbsp;Consultation Access
   <span id='consult'></span>
   </span>
      <span class="input-group-addon"><span class="fa fa-eyedropper"></span>&nbsp;Laboratory Access 
  
   <span id='labs'></span>
   </span>
      <span class="input-group-addon"><span class="fa fa-money"></span>&nbsp;Accounts Access   
   <span id='accountss'></span>
   </span>
  </div>
  <div class="input-group" style="margin-bottom:10px">
    <span class="input-group-addon"><span class="fa fa-circle"></span>&nbsp;Give Drugs
   <span id='givedrugs'></span>
   </span>
      <span class="input-group-addon"><span class="fa fa-plus"></span>&nbsp;Add Drugs
   <span id='adddrugs'></span>
   </span>
      <span class="input-group-addon"><span class="fa fa-edit"></span>&nbsp;Manage Drugs 
   <span id='managedrugs'></span>
   </span>
  </div>
  <div class="input-group" style="margin-bottom:10px">
    <span class="input-group-addon"><span class="fa fa-money"></span>&nbsp;Todays sales
   <span id='todaysales'></span>
   </span>
      <span class="input-group-addon"><span class="fa fa-heartbeat"></span>&nbsp;Todays treatments
   <span id='todaytreat'></span>
   </span>
      <span class="input-group-addon"><span class="fa fa-calendar"></span>&nbsp;Monthly report
   <span id='reportmonth'></span>
   </span>
  </div>
              	 <input type="hidden" name="userid" value="" id="userid"/>                                                        	      		
                                                        	      		

        </center>
        
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Save" id="amendreceipt" name="Userprivilages"> &nbsp;
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
      </div>
       </form>
  </div>
  </div>

<div id="Code1" class="modal fade" role="dialog" style="background:#222d32">
  <div class="modal-dialog" >
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-family: Times New Roman;color:#F0F0F0;"><center>
             Click on the box to edit details of <span style="border: none;background:#222d32"  id="bankcbn" /> 
	    	
        	</center></h4>
      </div>
      <div class="modal-body" >
        <center>
             
   <form method="post" action="register.php" enctype='multipart/form-data'>        		
                          <div class="input-group" style="margin-bottom:10px;">
    <span class="input-group-addon">Drug Name</span>
    <input type="text" name="dname" placeholder="Firts Name" class="form-control" value="" id="bankcbn">
      <span class="input-group-addon">Quantity</span>
   
   <input type="text" name="quantity" placeholder="Enter the quantity of drugs" class="form-control" value=""  id="bc">
  </div>
  <div class="input-group" style="margin-bottom:10px;">
  	<span class="input-group-addon">Unit Price</span>
     <input type="text" name="uprice" placeholder="Enter buying price" class="form-control" id="gwork" value="" >   

    <span class="input-group-addon">Retail Price</span>
   <input type="text" name="rprice" placeholder="Enter selling price" class="form-control" value=""  id="dp" >
  </div>
  <div class="input-group" style="margin-bottom:10px;">
    <span class="input-group-addon">Exp Date</span>
   <input type="date" name="expdate" placeholder="Enter Exp date" class="form-control" value="" id="collfee" >
   <span class="input-group-addon">Maf Date</span>
     
     <input type="date" name="mafdate" placeholder="Enter Manufactured Date" class="form-control" value="" id="bankbranch">
 </div>
                            	
       
   
                           		
                            		<div class="input-group" style="margin-bottom:10px;">

    <span class="input-group-addon">Vendor Name</span>
   <input type="text" name="vname" placeholder="Enter Vendor Name" id="myaddress" value="" class="form-control">
      <span class="input-group-addon">Vendor Phone</span>
   <input type="number" name="vphone" placeholder="Enter Vendor Phone" class="form-control" value=""  id="myphone">

        </div>
        <div class="input-group" style="margin-bottom:10px;">
   	<span class="input-group-addon">Location</span>
  <input type="text" name="vlocation" placeholder="Vendor Location" class="form-control" value="" id="mymails" >

   	<span class="input-group-addon">Vendor Email</span>
   <input type="text" name="vemail" placeholder="Vendor Email"  value="" class="form-control"   id="fee"  >

             
  </div>
  
  
   
  <input type="hidden" name="drugid" id="ccodes">
          </center>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Update" id="amendreceipt" name="updatestudent"> &nbsp;
        <button type="button" class='btn btn-success' data-dismiss="modal">Close</button>
      </div>
      </div>
       </form>
  </div>
  </div>
<div class="modal" id="medicalhistory">
			<span class="close-modal">
							<button type="submit" class="btn btn-info" id="PrintButton" onclick="PrintPage()"><span class='glyphicon glyphicon-print' style="color: white"></span> </button>&nbsp;
							<button type="submit" class="btn btn-danger"  data-dismiss="modal"><span class='glyphicon glyphicon-remove' style="color: white"></span> </button>&nbsp;
                            
			</span>
			<div class="inner_section">
				<div id="record_container" class="record_container">
								<h3 class="title">EHR CLINIC</h3><br>
								Phone: +000-000-000-000<br>
								Email: info@ehrclinic.com			
			                    <label style="float: right"><?php echo date('l jS \of F Y ');?></label>

				 	<table class="table" >
                       
                        <tr class="table_row table_part">
                            <td class="table_column">
                                PATIENT INFORMATION
                            </td>
                        </tr>
                        <tr class="table_row clearfix">
                            <td class="table_column table_head s-column">
                               Full name
                            </td>
                            <td class="table_column table_head s-column">
                               Date of Birth
                            </td>
                            <td class="table_column table_head s-column">
                               Gender
                            </td>
                           
                            <td class="table_column s-column">
                             
                               <span id="bankcbn3"></span>   

                            </td>
                            <td class="table_column s-column">
                                <span id="bc3"></span>
                            </td>
                            <td class="table_column s-column">
                                <span id="collfee3"></span>
                            </td>
                            
                        </tr>
                        <tr class="table_row table_part">
                            <td class="table_column">
                                COMPLAINT
                            </td>
                        </tr>
                        <tr class="table_row">
                            
                            <td class="table_column table_head s-column">
                               PRESENTING COMPLAINT
                            </td>                            
                            <td class="table_column table_head m-column">
                                HISTORY OF PRESENTING COMPRAINT
                            </td>
                            
                            <td class="table_column s-column">
                                <span id="mytin3"></span>
                            </td>
                            <td class="table_column m-column">
                                <span id="fee3"></span>
                            </td>
                         </tr>
                        <tr class="table_row table_part">
                            <td class="table_column">
                                MEDICAL TREATMENT
                            </td>
                        </tr>
                        <tr class="table_row">
                            
                            <td class="table_column table_head s-column">
                               DIAGNOSE
                            </td>                            
                            <td class="table_column table_head m-column">
                                PRESCRIPTION
                            </td>
                            
                            <td class="table_column s-column">
                                <span id="pn3"></span>
                            </td>
                            <td class="table_column m-column">
                                <span id="relation3"></span>
                            </td>
                         </tr>
                        <tr class="table_row table_part">
                            <td class="table_column">
                                MANAGEMENT PLAN
                            </td>
                        </tr>
                        <tr class="table_row">                    
                                                        
                           <td class="table_column l-column">
                                <span id="address3"></span>
                            </td>
                         </tr>
                        
                        </table>

					
				</div>
			</div>
		</div>
<div class="modal" id="medicaltreatment">
			<span class="close-modal">
							<button type="submit" class="btn btn-info" id="PrintButton" onclick="PrintPage()"><span class='glyphicon glyphicon-print' style="color: white"></span> </button>&nbsp;
							<button type="submit" class="btn btn-danger"  data-dismiss="modal"><span class='glyphicon glyphicon-remove' style="color: white"></span> </button>&nbsp;
                            
			</span>
			<div class="inner_section">
				<div id="record_container" class="record_container">
								<h3 class="title">EHR CLINIC</h3><br>
								Phone: +000-000-000-000<br>
								Email: info@ehrclinic.com			
			                    <label style="float: right"><?php echo date('l jS \of F Y ');?></label>

				 	<table class="table" >
                       
                        <tr class="table_row table_part">
                            <td class="table_column">
                                PATIENT INFORMATION
                            </td>
                        </tr>
                        <tr class="table_row clearfix">
                            <td class="table_column table_head s-column">
                               Full name
                            </td>
                            <td class="table_column table_head s-column">
                               Date of Birth
                            </td>
                            <td class="table_column table_head s-column">
                               Gender
                            </td>
                           
                            <td class="table_column s-column">
                             
                               <span id="bankcbn4"></span>   

                            </td>
                            <td class="table_column s-column">
                                <span id="bc4"></span>
                            </td>
                            <td class="table_column s-column">
                                <span id="collfee4"></span>
                            </td>
                            
                        </tr>
                        <tr class="table_row table_part">
                            <td class="table_column">
                                COMPLAINT
                            </td>
                        </tr>
                        <tr class="table_row">
                            
                            <td class="table_column table_head s-column">
                               PRESENTING COMPLAINT
                            </td>                            
                            <td class="table_column table_head m-column">
                                HISTORY OF PRESENTING COMPRAINT
                            </td>
                            
                            <td class="table_column s-column">
                                <span id="mytin4"></span>
                            </td>
                            <td class="table_column m-column">
                                <span id="fee4"></span>
                            </td>
                         </tr>
                        <tr class="table_row table_part">
                            <td class="table_column">
                                MEDICAL TREATMENT
                            </td>
                        </tr>
                        <tr class="table_row">
                            
                            <td class="table_column table_head s-column">
                               DIAGNOSE
                            </td>                            
                            <td class="table_column table_head m-column">
                                PRESCRIPTION
                            </td>
                            
                            <td class="table_column s-column">
                                <span id="pn4"></span>
                            </td>
                            <td class="table_column m-column">
                                <span id="relation4"></span>
                            </td>
                         </tr>
                        <tr class="table_row table_part">
                            <td class="table_column">
                                MANAGEMENT PLAN
                            </td>
                        </tr>
                        <tr class="table_row">                    
                                                        
                           <td class="table_column l-column">
                                <span id="address4"></span>
                            </td>
                         </tr>
                        
                        </table>

					
				</div>
			</div>
		</div>
<div class="modal" id="displaystudentinfo">
			<span class="close-modal">
							<button type="submit" class="btn btn-info" id="PrintButton" onclick="PrintPage()"><span class='glyphicon glyphicon-print' style="color: white"></span> </button>&nbsp;
							<button type="submit" class="btn btn-danger"  data-dismiss="modal"><span class='glyphicon glyphicon-remove' style="color: white"></span> </button>&nbsp;
                             <input type="hidden"  id='ccodes1'/>
                           <!--<button type="button" class="Sendpharmacy btn btn-success"  data-dismiss="modal"><span class='fa fa-money' style="color: white"></span>&nbsp;<span id='stdalert'></span></button>-->
                             <span id='paystate'></span>
			</span>
			<div class="inner_section">
				<div id="record_container" class="record_container">
								<h3 class="title">MR PATRICK MVUMA CLINIC</h3><br>
								Phone: +000-000-000-000<br>
								Email: info@patrickmvuma.com			
			                    <label style="float: right"><?php echo date('l jS \of F Y ');?></label>

				 	<table class="table" >
                       
                        <tr class="table_row table_part">
                            <td class="table_column">
                                PATIENT INFORMATION
                            </td>
                        </tr>
                        <tr class="table_row clearfix">
                            <td class="table_column table_head s-column">
                               Full name
                            </td>
                            <td class="table_column table_head s-column">
                               Date of Birth
                            </td>
                            <td class="table_column table_head s-column">
                               Gender
                            </td>
                           
                            <td class="table_column s-column">
                             
                               <span id="bankcbn1"></span>   

                            </td>
                            <td class="table_column s-column">
                                <span id="bc1"></span>
                            </td>
                            <td class="table_column s-column">
                                <span id="collfee1"></span>
                            </td>
                            
                        </tr>
                        <tr class="table_row table_part">
                            <td class="table_column">
                                TREATMENT
                            </td>
                        </tr>
                        <tr class="table_row">
                            
                            <td class="table_column table_head s-column">
                               Cost
                            </td>
                            <td class="table_column table_head m-column">
                                PRESCRIPTION
                            </td>
                            <td class="table_column s-column">
                                 <span id='dp1' ></span>
                            </td>
                            <td class="table_column m-column">
                                <span id="relation1"></span>&nbsp; <br>&nbsp; <br>
                            </td>
                            
                        </tr>
                        <tr class="table_row">
                            
                            <td class="table_column table_head s-column">
                               Total
                            </td>
                            <td class="table_column table_head m-column">
                                Comment
                            </td>
                            <td class="table_column s-column">
                               MK<span id="fee1"></span>
                            </td>
                            <td class="table_column m-column">
                                <span id="pn1"></span>
                            </td>
                            
                        </tr>
                        
                        </table>

					
				</div>
			</div>
		</div>
<div class="modal" id="displaystudentinfo2">
			<span class="close-modal">
							<button type="submit" class="btn btn-info" id="PrintButton" onclick="PrintPage()"><span class='glyphicon glyphicon-print' style="color: white"></span> </button>&nbsp;
							<button type="submit" class="btn btn-danger"  data-dismiss="modal"><span class='glyphicon glyphicon-remove' style="color: white"></span> </button>&nbsp;
                             <input type="hidden"  id='ccodes2'/> <input type="hidden"  id='cnamej2'/> 
                           <button type="button" class="recordpatient btn btn-success" data-dismiss="modal" ><span class='fa fa-check' style="color: white"></span>&nbsp;Save</button>

			</span>
			<div class="inner_section">
				<div id="record_container" class="record_container">
								<h3 class="title">MR PATRICK MVUMA CLINIC</h3><br>
								Phone: +000-000-000-000<br>
								Email: info@patrickmvuma.com			
			                    <label style="float: right"><?php echo date('l jS \of F Y ');?></label>

				 	<table class="table" >
                       
                        <tr class="table_row table_part">
                            <td class="table_column">
                                PATIENT INFORMATION
                            </td>
                        </tr>
                        <tr class="table_row clearfix">
                            <td class="table_column table_head s-column">
                               Full name
                            </td>
                            <td class="table_column table_head s-column">
                               Date of Birth
                            </td>
                            <td class="table_column table_head s-column">
                               Gender
                            </td>
                           
                            <td class="table_column s-column">
                             
                               <span id="bankcbn2"></span>   

                            </td>
                            <td class="table_column s-column">
                                <span id="bc2"></span>
                            </td>
                            <td class="table_column s-column">
                                <span id="collfee2"></span>
                            </td>
                            
                        </tr>
                        <tr class="table_row table_part">
                            <td class="table_column">
                                TREATMENT
                            </td>
                        </tr>
                        <tr class="table_row">
                            
                           
                            <td class="table_column table_head l-column">
                                PRESCRIBTION
                            </td>
                            
                            <td class="table_column l-column">
                                <span id="relation2"></span>&nbsp; <br>&nbsp; <br>
                            </td>
                            
                        </tr>
                        <tr class="table_row">
                             <tr class="table_row table_part" style="background-color: green">
                            
                            <td class="table_column" align="center" style="font-weight: bold">
                                <span id="givedrugs5"></span>
                            </td>
                        </tr>
                        </tr>
                        
                        </table>

					
				</div>
			</div>
		</div>
<div class="modal" id="displaystudent">
			<span class="close-modal">
							<button type="submit" class="btn btn-success" id="PrintButton" onclick="PrintPage()"><span class='glyphicon glyphicon-print' style="color: white"></span> </button>&nbsp;
							<button type="submit" class="btn btn-danger"  data-dismiss="modal"><span class='glyphicon glyphicon-remove' style="color: white"></span> </button>

			</span>
			<div class="inner_section">
				<div id="record_container" class="record_container">
								<h3 class="title">MR PATRICK MVUMA CLINIC</h3><br>
								Phone: +000-000-000-000<br>
								Email: info@patrickmvuma.com			
			                    <label style="float: right"><?php echo date('l jS \of F Y ');?></label>

				 	<table class="table" >
                         
                        <tr class="table_row table_part">
                            <td class="table_column">
                                LOG INFORMATION
                            </td>
                        </tr>
                        
                        
                        <tr class="table_row clearfix">
                            <td class="table_column table_head s-column">
                                Username
                            </td>
                            <td class="table_column table_head s-column">
                                User role
                            </td>
                            <td class="table_column table_head s-column">
                                IP Address
                            </td>
                            <td class="table_column s-column">
                              <span id="staffid"></span>
                            </td>
                            <td class="table_column s-column">
                               <span id="oldpass"></span>
                            </td>
                            <td class="table_column s-column">
                                <span id="ss"></span>
                            </td>
                        </tr>
                        <tr class="table_row clearfix">
                            <td class="table_column table_head s-column">
                                Login
                            </td>
                            <td class="table_column table_head s-column">
                                Logout
                            </td>
                            <td class="table_column table_head s-column">
                                Number of Activities
                            </td>
                            <td class="table_column s-column">
                                <span id="bb"></span>
                            </td>
                            <td class="table_column s-column">
                                 <span id="cc"></span>
                            </td>
                            <td class="table_column s-column">
                                <span id="oldname"></span>
                            </td>
                        </tr>
                        
                        <tr class="table_row clearfix">
                            <td class="table_column table_head l-column">
                               Activity List
                            </td>
                            <td class="table_column l-column">
                              <span id="act"></span>
                            </td>
                        </tr>
                        
                        
                        
                        
                        </div>
                        </table>

					
				</div>
			</div>
		</div>




  
  
  <div id="displayschoolsteacher" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0"><center>
        	Patient:&nbsp;<span id='mypatient'></span>
        	</center></h4>
      </div>

      <div class="modal-body" >       	
         <form method="post" action="register.php" enctype='multipart/form-data'>
            <div class="input-group" style="margin-bottom:10px;">
         <span class="input-group-addon">Presenting Complaint </span>
   <textarea   placeholder="What the patient is feeling" value="" id="complainid" name="pcomplaint" class="form-control" ></textarea>  
  
         <span class="input-group-addon">History of Presenting Complaint</span>
   <textarea   placeholder="When did it start etc" value=""  id="storyid" name="pstory" class="form-control" ></textarea>  
   </div>
      		<div class="input-group" style="margin-bottom:10px;">
      			
         <span class="input-group-addon">Choose Recomended Tests </span>
   <!--<textarea name="disapexp" rows="10" placeholder="What have you suggested" value="" id="labtests" class="form-control" ></textarea>-->  
           				       
		                                         <input type='checkbox' name='test1' value='RBS'>&nbsp;Random Blood sugar<br>
		                                         <input type='checkbox' name='test2' value='FBS'>&nbsp;Fasting Blood Sugar<br>
		                                         <input type='checkbox' name='test3' value='PBS'>&nbsp;Peripheral Blood Smear<br>
		                                         <input type='checkbox' name='test4' value='UCT'>&nbsp;Urea and Creatinine<br>
			                                     <input type='checkbox' name='test5' value='MRDT'>&nbsp;Malaria Rapid Diagnostic Test<br>
	         			                         <input type='checkbox' name='test6' value='FBC'>&nbsp;Full Blood Count<br>
	         			                         <input type='checkbox' name='test7' value='TFT'>&nbsp;Thyroid Function<br>
	         			                         <input type='checkbox' name='test8' value='LFT'>&nbsp;Liver Function<br>

           </div>
          <span class="soplist"></span>
         		<p style="text-align: -webkit-auto;">
         			<span style="color: rgb(60, 58, 64); font-family: 'Palatino Linotype', serif; line-height: 19px; font-size: 18px;">
         		&nbsp;<span lang="EN-GB" style="line-height: 107%;">Do you want to recommend diagnosis?
        </span></span>
       
         	       		 
         		 
         	   <label class="art-checkbox">         		  	
                      <input type="checkbox"  class="open-yess">
                      <span style="font-size: 18px;">Yes</span> &nbsp; &nbsp;
                      </label>
                 <label class="art-checkbox">
                 	<input type="checkbox"  class="open-nos">
                 <span style="font-size: 18px;">No</span> &nbsp; &nbsp; </label>
         	   
         	   </span></p>      	   
         	   
         	   <p style="text-align: -webkit-auto;">
         			
         			<span style="font-size: 18px;">
         				<span style="color: rgb(60, 58, 64);">
         			&nbsp; &nbsp; &nbsp; &nbsp; 
         			
         			<span lang="EN-GB" style="line-height: 19px; font-family: 'Palatino Linotype', serif;">&nbsp;&nbsp;
                    <span class="historyinstructions"></span>
                     </span>
                     </span></span></p>
         
         
         <p style="text-align: -webkit-auto;">
         	
         	
         	
         	<span style="color: rgb(60, 58, 64); font-family: 'Palatino Linotype', serif; font-size: 18px; line-height: 16px;">
         		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
         		<span class="schoolbackgrounds"></span>
             </span>
             </p>
            				
       <input type="hidden"  id='mypatientid' name='mypatientid'/>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Send to Lab"  name="labdata">&nbsp;
          <button type="button" class="btn btn-danger" data-dismiss="modal" value='Close' ><i class="fa fa-close"></i></button>

      </div>
      </form>
      </div>
  </div>
  </div>
  <div id="displayadmin" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0"><center>
        	Patient:&nbsp;<span id='bankcbn'></span>
        	</center></h4>
      </div>

      <div class="modal-body" >       	
         <form method="post" action="register.php" enctype='multipart/form-data'>
            
      		<div class="input-group" style="margin-bottom:10px;">
      			
         <span class="input-group-addon">Choose Recomended Tests </span>
   <!--<textarea name="disapexp" rows="10" placeholder="What have you suggested" value="" id="labtests" class="form-control" ></textarea>-->  
           				       
		                                         <input type='checkbox' name='test1' value='RBS'>&nbsp;Random Blood sugar<br>
		                                         <input type='checkbox' name='test2' value='FBS'>&nbsp;Fasting Blood Sugar<br>
		                                         <input type='checkbox' name='test3' value='PBS'>&nbsp;Peripheral Blood Smear<br>
		                                         <input type='checkbox' name='test4' value='UCT'>&nbsp;Urea and Creatinine<br>
			                                     <input type='checkbox' name='test5' value='MRDT'>&nbsp;Malaria Rapid Diagnostic Test<br>
	         			                         <input type='checkbox' name='test6' value='FBC'>&nbsp;Full Blood Count<br>
	         			                         <input type='checkbox' name='test7' value='TFT'>&nbsp;Thyroid Function<br>
	         			                         <input type='checkbox' name='test8' value='LFT'>&nbsp;Liver Function<br>

           </div>
          <div class="input-group" style="margin-bottom:10px;">
         <span class="input-group-addon">Test Comment </span>
          <textarea   placeholder="" value="" id="labtests" name="labtestss" class="form-control" ></textarea>  
         </div>
             				
       <input type="hidden"  id='ccodes4' name='mypatientid'/>
       <input type="hidden"  value='' name='pcomplaint'/>
       <input type="hidden"  value='' name='pstory'/>

      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Send2Lab"  name="labdata">&nbsp;
          <button type="button" class="btn btn-danger" data-dismiss="modal" value='Close' ><i class="fa fa-close"></i></button>

      </div>
      </form>
      </div>
  </div>
  </div>
  
  <div id="displaypatient" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0"><center>
        	<span id='mypatient'></span>&nbsp;Samples
        	</center></h4>
      </div>

      <div class="modal-body" >       	
   <form method="post" action="register.php" enctype='multipart/form-data' id="submit-form">

               <span id='testbp'></span>
               <span id='testgl'></span>
               <span id='testhv'></span>
               <span id='testml'></span>
               <span id='testba'></span>
               <span id='testbb'></span>
               <span id='testbc'></span>
               <span id='testbd'></span>
      		<div class="input-group" style="margin-bottom:10px;">
         <span class="input-group-addon">Clinical detail </span>
   <textarea   placeholder="What have you suggested" value="" id="labtests" name="labtests" class="form-control" ></textarea>  
  
         <span class="input-group-addon">General Comment</span>
   <textarea   placeholder="Type results here" value="" id="labresultss" name="labresultss"class="form-control" ></textarea>  
   </div>
            				
       <input type="hidden"  id='mypatientid' name='mypatientid'/>
       <input type="hidden"  id='lab' name='statelab'/>

       
      </div>
      <div class="modal-footer">
      	<span id='loadbutton'></span>&nbsp;
      	<!--<button type="button" class="open-transpatient btn btn-success" name="classentry"><i class="fa fa-user-md"></i>&nbsp;Send Results</button>-->
       <input type="submit" class="open-transpatient btn btn-success" value="Submit"  data-dismiss="false" name="sendresults">&nbsp;
        
      </div>
      </form>
      </div>
  </div>
  </div>
  <div id="displayschoolsteachers2" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal"><span class='glyphicon glyphicon-remove' style="color: red"></span></button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0"><center>
        	Laboratory results of&nbsp;<span id='mypatient2'></span>
        	</center></h4>
      </div>

      <div class="modal-body" >   
      	   <form method="post" action="register.php" enctype='multipart/form-data' id="submit-form">
    	
             <span id='testbp2'></span>
               <span id='testgl2'></span>
               <span id='testhv2'></span>
               <span id='testml2'></span>
               <span id='testfbc2'></span>
               <span id='testlft2'></span> 
               <span id='testmrdt2'></span> 
               <span id='testtft2'></span>             
               <span id='commented'></span>
               
               <div class="input-group" style="margin-bottom:10px;">
         <span class="input-group-addon">Confirm Diagonosis from the tests results and examination</span>
  <select id="labdiag"   name='confirmdiagnosis' style='height:30px; width: 100%' >
            	 <?php $sqlmembe =" SELECT * FROM tbl_icd10 ";
			       $retriev = mysqli_query($db,$sqlmembe);				               
                     while($found = mysqli_fetch_array($retriev))
	                 {     
                       $name=$found['Diagnosisname'];
                        echo"<option>$name</option>";
                       }            
                    ?>
                  </select>


            </div>
         <input type="hidden"  id='mypatientid2' name='mypatientid2'/>
      </div>
      <div class="modal-footer">
      	<input type="submit" class="btn btn-success" value="SAVE" value="addmembe" name="savediagnosis">&nbsp;
          <button type="button" class="btn btn-danger" data-dismiss="modal" value='Close' ><i class="fa fa-close"></i></button>
        
      </div>
      </form>
      </div>
  </div>
  </div>
  <div id="displayschoolsteachers" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal"><span class='glyphicon glyphicon-remove' style="color: red"></span></button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0"><center>
        	Prescribe Medicine to&nbsp;<span id='mypatient2'></span>
        	</center></h4>
      </div>

      <div class="modal-body" >   
      	   <form method="post" action="register.php" enctype='multipart/form-data' id="submit-form">
    	
           
      		
   <p style="text-align: -webkit-auto;">
         			<span style="color: rgb(60, 58, 64); font-family: 'Palatino Linotype', serif; line-height: 19px; font-size: 18px;">
         		&nbsp;<span lang="EN-GB" style="line-height: 107%;">
         			How many types of medicine do you want to prescribe?
         			 <select style='width:18%;' class="open-1" id="medscount"  >
         			 	                               <option value="0">0</option>
        	     		                               <option value="1">1</option>
            				                           <option value="2">2</option>
            				                           <option value="3">3</option>
            				                           <option value="4">4</option>
            				                           <option value="5">5</option>
            				                           <option value="6">6</option>
            				                           <option value="7">7</option>
            				                           <option value="8">8</option>
            				                           <option value="9">9</option>
            				                           <option class="10">10</option>
            				                           
            				                                				          				
            				</select>
        </span></span>
       
         	       		 
         		 
         	   
                    </p> 
         	   <p style="text-align: -webkit-auto;">
         			
         			<span style="font-size: 18px;">
         				<span style="color: rgb(60, 58, 64);">
         			&nbsp; &nbsp; &nbsp; &nbsp; 
         			
         			<span lang="EN-GB" style="line-height: 19px; font-family: 'Palatino Linotype', serif;">&nbsp;&nbsp;
         				
         				
            				
            				<span class="meds"></span>
                    
                     </span>
                     </span></span></p>
                     
                     <p style="text-align: -webkit-auto;">
         			<span style="color: rgb(60, 58, 64); font-family: 'Palatino Linotype', serif; line-height: 19px; font-size: 18px;">
         		&nbsp;<span lang="EN-GB" style="line-height: 107%;">Do you want to add prescription comment?
        </span></span>
       
         	       		 
         		 
         	   <label class="art-checkbox">         		  	
                      <input type="checkbox" name="" class="open-yes4">
                      <span style="font-size: 18px;">Yes</span> &nbsp; &nbsp;
                      </label>
                 <label class="art-checkbox">
                 	<input type="checkbox" name="" class="open-no4">
                 <span style="font-size: 18px;">No</span> &nbsp; &nbsp; </label>
         	   
         	   </span></p>      	   
         	   
         	   <p style="text-align: -webkit-auto;">
         			
         			<span style="font-size: 18px;">
         				<span style="color: rgb(60, 58, 64);">
         			&nbsp; &nbsp; &nbsp; &nbsp; 
         			
         			<span lang="EN-GB" style="line-height: 19px; font-family: 'Palatino Linotype', serif;">&nbsp;&nbsp;
                    <span class="historyinstruction4"></span>
                     </span>
                     </span></span></p>
         
         
         <p style="text-align: -webkit-auto;">
         	
         	
         	
         	<span style="color: rgb(60, 58, 64); font-family: 'Palatino Linotype', serif; font-size: 18px; line-height: 16px;">
         		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
         		<span class="schoolbackground4"></span>
             </span>
             </p>
             
             <p style="text-align: -webkit-auto;">
         			<span style="color: rgb(60, 58, 64); font-family: 'Palatino Linotype', serif; line-height: 19px; font-size: 18px;">
         		&nbsp;<span lang="EN-GB" style="line-height: 107%;">Do you want to add management plan?
        </span></span>
       
         	       		 
         		 
         	   <label class="art-checkbox">         		  	
                      <input type="checkbox" name="" class="open-yes44">
                      <span style="font-size: 18px;">Yes</span> &nbsp; &nbsp;
                      </label>
                 <label class="art-checkbox">
                 	<input type="checkbox" name="" class="open-no44">
                 <span style="font-size: 18px;">No</span> &nbsp; &nbsp; </label>
         	   
         	   </span></p>  
            		
         
         
         <p style="text-align: -webkit-auto;">
         	
         	
         	
         	<span style="color: rgb(60, 58, 64); font-family: 'Palatino Linotype', serif; font-size: 18px; line-height: 16px;">
         		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
         		<span class="schoolbackground44"></span>
             </span>
             </p>		
       <input type="hidden"  id='mypatientid2' name='mypatientid2'/>
      </div>
      <div class="modal-footer">
      	<input type="submit" class="btn btn-success" value="Send to Accounts"  name="sendaccounts">
      	 &nbsp;<!--<input type="submit" class="btn btn-success" value="SAVE" value="save" name="sendaccounts">-->
          &nbsp;<button type="button" class="btn btn-danger" data-dismiss="modal" value='Close' ><i class="fa fa-close"></i></button>

        <!-- <button type="button" class="open-transferteacher btn btn-success" ><i class="fa fa-money"></i>&nbsp;Send To Accounts</button>--> &nbsp;
        
      </div>
      </form>
      </div>
  </div>
  </div>
  
  
  <div id="displaytests" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal"><span class='glyphicon glyphicon-remove' style="color: red"></span></button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0"><center>
        	Prescribe Medicine to&nbsp;<span id='mypatient22'></span>
        	</center></h4>
      </div>

      <div class="modal-body" >   
      	   <form method="post" action="register.php" enctype='multipart/form-data' id="submit-form">
    	
               		
   <p style="text-align: -webkit-auto;">
         			<span style="color: rgb(60, 58, 64); font-family: 'Palatino Linotype', serif; line-height: 19px; font-size: 18px;">
         		&nbsp;<span lang="EN-GB" style="line-height: 107%;">
         			How many types of medicine do you want to prescribe?
         			 <select style='width:18%;' class="open-11" id="medscount2"  >
         			 	                               <option value="0">0</option>
        	     		                               <option value="1">1</option>
            				                           <option value="2">2</option>
            				                           <option value="3">3</option>
            				                           <option value="4">4</option>
            				                           <option value="5">5</option>
            				                           <option value="6">6</option>
            				                           <option value="7">7</option>
            				                           <option value="8">8</option>
            				                           <option value="9">9</option>
            				                           <option class="10">10</option>
            				                           
            				                                				          				
            				</select>
        </span></span>
       
         	       		 
         		 
         	   
                    </p> 
         	   <p style="text-align: -webkit-auto;">
         			
         			<span style="font-size: 18px;">
         				<span style="color: rgb(60, 58, 64);">
         			&nbsp; &nbsp; &nbsp; &nbsp; 
         			
         			<span lang="EN-GB" style="line-height: 19px; font-family: 'Palatino Linotype', serif;">&nbsp;&nbsp;
         				
         				
            				
            				<span class="meds2"></span>
                    
                     </span>
                     </span></span></p>
                     <p style="text-align: -webkit-auto;">
         			<span style="color: rgb(60, 58, 64); font-family: 'Palatino Linotype', serif; line-height: 19px; font-size: 18px;">
         		&nbsp;<span lang="EN-GB" style="line-height: 107%;">Do you want to add prescription comment?
        </span></span>
       
         	       		 
         		 
         	   <label class="art-checkbox">         		  	
                      <input type="checkbox" name="" class="open-yes4">
                      <span style="font-size: 18px;">Yes</span> &nbsp; &nbsp;
                      </label>
                 <label class="art-checkbox">
                 	<input type="checkbox" name="" class="open-no4">
                 <span style="font-size: 18px;">No</span> &nbsp; &nbsp; </label>
         	   
         	   </span></p>      	   
         	   
         	   <p style="text-align: -webkit-auto;">
         			
         			<span style="font-size: 18px;">
         				<span style="color: rgb(60, 58, 64);">
         			&nbsp; &nbsp; &nbsp; &nbsp; 
         			
         			<span lang="EN-GB" style="line-height: 19px; font-family: 'Palatino Linotype', serif;">&nbsp;&nbsp;
                    <span class="historyinstruction4"></span>
                     </span>
                     </span></span></p>
         
         
         <p style="text-align: -webkit-auto;">
         	
         	
         	
         	<span style="color: rgb(60, 58, 64); font-family: 'Palatino Linotype', serif; font-size: 18px; line-height: 16px;">
         		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
         		<span class="schoolbackground4"></span>
             </span>
             </p>
            				
       <input type="hidden"  id='mypatientid22' name='mypatientid22'/>
      </div>
      <div class="modal-footer">
      	<input type="submit" class="btn btn-success" value="Submit" value="addmembe" name="sendadmissions">
          &nbsp;<button type="button" class="btn btn-danger" data-dismiss="modal" value='Close' ><i class="fa fa-close"></i></button>
        
      </div>
      </form>
      </div>
  </div>
  </div>
<div id="displaylabresults" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal"><span class='glyphicon glyphicon-remove' style="color: red"></span></button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0"><center>
        	See lab results of &nbsp;<span id='mypatient22'></span>
        	</center></h4>
      </div>

      <div class="modal-body" >   
      	   <form method="post" action="register.php" enctype='multipart/form-data' id="submit-form">
    	
             <span id='testbp22'></span>
               <span id='testgl22'></span>
               <span id='testhv22'></span>
               <span id='testml22'></span>
               <span id='testfbc22'></span>
               <span id='testlft22'></span> 
               <span id='testmrdt22'></span> 
               <span id='testtft22'></span>             
               <span id='commented22'></span>
      		
    
         	      	   
         	   
        
            				
       <input type="hidden"  id='mypatientid22' name='mypatientid22'/>
      </div>
      <div class="modal-footer">
      	<input type="submit" class="btn btn-success" value="Submit" value="addmembe" name="sendaccounts">
          &nbsp;<button type="button" class="btn btn-danger" data-dismiss="modal" value='Close' ><i class="fa fa-close"></i></button>
        
      </div>
      </form>
      </div>
  </div>
  </div>
  
 <div id="Addreadings" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0"><center>
        	Add vital signs readings of &nbsp;<span id='mypatient22'></span>
        	</center></h4>
      </div>

      <div class="modal-body" >       	
      	<center> 
                                                          	      		
        	     <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp; &nbsp;Blood Pressure:<label style="color: red;font-size:20px;">*</label><input style="width:60px" type="decimal" id="bloodp" value="">&nbsp;/&nbsp;<input type="number" value="" style="width:60px" id='bloodp2' value=""></span></p>
        	    <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;Pulse Rate:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="decimal" id="pulserate" value=""></span></p>
        		<p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Respiratory Rate:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="decimal" id="respirationr" value=""></span></p>
                 <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Oxygen Saturation:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="decimal" id="oxygensatu" value=""></span></p>
                 <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Temperature:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="decimal" id="bloodtemp" value=""></span></p>
                                        	      		
         </center>
         <input type="hidden"  id='mypatientid22' name='patientnumber'/>
      </div>
      <div class="modal-footer">
      	<input type="submit" class="addvitalreadings btn btn-success" value="submit"  >
        &nbsp;
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
      </div>
       
  </div>
  </div>  

  
    
    
    
<div id="Updatepicture" class="modal fade" role="dialog">
  <div class="modal-dialog" style="float:right;width:20%">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">        	        	
        	</h4>
      </div>
      <div class="modal-body" >
        <center><p></p>
        	<form method="post" action="upload.php" enctype='multipart/form-data'>        		
            
        	<p style="margin-bottom:10px;">
        			Select picture<input name='file2' type='file' id='file2' >
           </p>  
           <p>
        	<input name='id' type='hidden' value='' id='bookId'>    	                                                       	      		

           </p>     	      		
	                
        </center>
      </div>
      <div class="modal-footer">
                <input type="submit" class="btn btn-success" value="Change" id="btns1" name="Change"> &nbsp;
                  
      </div>
      </div>
       </form>
  </div>
  </div>
 
 <div id="Usericd10" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0">
        <center>
        	ADD ICD 10 CODES
        	</center></h4>
      </div>

      <div class="modal-body" >       	
      	<center> 
        		<form method="post" action="register.php" enctype='multipart/form-data' style="width: 98%;">        		

            	
      	        
        		                                                           	      		
                 <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;Diagnosis Name:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="dname"></span></p>
        	    <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; Diagnosis Code:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="dcode"></span></p>
        		
        		                        	      		
                                                         	      		
         </center>
      </div>
      <div class="modal-footer">
       <input type="submit" class="btn btn-success" value="Save" id="addmember" name="addicd10"> &nbsp;
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
      </div>
       </form>
  </div>
  </div> 
 <div id="Useradd" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0"><center>
        	ADD USER TO THE SYSTEM
        	</center></h4>
      </div>

      <div class="modal-body" >       	
      	<center> 
        		<form method="post" action="upload.php" enctype='multipart/form-data' style="width: 98%;">        		

            	
      	        <p style="margin-bottom:10px;">  
        	      <span style="font-size: 15px; font-weight: bold;"><input type="checkbox" name="pro">&nbsp;Pro&nbsp;&nbsp; &nbsp; &nbsp;</span>
        	    <span style="font-size: 15px; font-weight: bold;"><input type="checkbox" name="dr">&nbsp;Dr &nbsp; &nbsp;&nbsp;&nbsp;</span>
        		<span style="font-size: 15px; font-weight: bold;"><input type="checkbox" name="mr">&nbsp;Mr &nbsp; &nbsp; &nbsp;&nbsp;</span>        		
        		<span style="font-size: 15px; font-weight: bold;"><input type="checkbox" name="mrs">&nbsp;Mrs &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span>
        		<span style="font-size: 15px; font-weight: bold;"><input type="checkbox" name="miss">&nbsp;Miss</span>
        		</p>
        		                                                           	      		
                 <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; Firstname:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="mfname"></span></p>
        	    <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; Surname:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="msname"></span></p>
        		<p style="margin-bottom:10px;"><span style="font-weight: bold; font-size: 18px;">Staff Desgnation:
        		<select style='width:273px; height:35px; color:black' name="minstitution" >
        			            				       <option>Medical Doctor</option>
            				                           <option>Acountant</option>
            				                           <option>Assistant Accountant</option>
            				                           <option>Lab Technician</option>
            				                           <option >Pharmacist</option>
            				                           <option >Receptionist</option>
            				                           <option >Clinician</option>
            				                           <option >Nurse</option>
            				            

            			</select>        		
        		</span></p>
        		
        		
        	     <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; Email addr:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="email" name="memail"></span></p>
        	     <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Phone:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="number" name="mphone"></span></p>
        	     <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Password:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="password" name="mpassword"></span></p>
        	     <p ><span style="font-size: 18px; font-weight: bold;">Repeat Password:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="password" name="mpassword"></span></p>
        		          	 <input type="hidden" name="page" value="administrator.php"/>                                                        	      		
                                                         	      		
         </center>
      </div>
      <div class="modal-footer">
       <input type="submit" class="btn btn-success" value="Save" id="addmember" name="addmember"> &nbsp;
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
      </div>
       </form>
  </div>
  </div>  
  
  
  
  
 


<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse" >
          <div class="navbar-header">
            <button  type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
      
           
			   
                           </div>
        
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header" style="margin-top:10px">
              	
              	 <h4> ELECTRONIC MEDICAL RECORDS</h4>
              </li>
                <?php
               
              $sql ="SELECT * FROM tbl_userprivilages WHERE Userid='$id' ";
                 $retr = mysqli_query($db,$sql);
                  while($found = mysqli_fetch_array($retr))
	             {
                     $adduser = $found['Adduser'];$manageuser= $found['Manageuser'];
					$logact= $found['Logactivities']; $addpat= $found['Addpatient'];
	        		$editpat = $found['Editpatient'];$managepat= $found['Managepatient'];																	   
					$consul = $found['Consultation'];$labs= $found['Labaccess'];
					$accountsa= $found['Accountaccess'];$gdrugs= $found['Givedrugs'];
	        		$adddrugs = $found['Adddrugs']; $managedrugs= $found['Managedrugs'];
					$tsales= $found['Todayssales']; $ttreat = $found['Todaystreat'];																	   
					$montre= $found['Monthlyreport'];
				} 
			 ?>
			 <?php if($addpat=='Yes' || $editpat=="Yes" || $managepat=='Yes'){
               	  ?>
				  <li class="treeview">
                <a href="#">                
                   <i class="fa fa-users"></i>
                <span>Patients</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                <?php if($addpat=='Yes'){ echo"<li><a href='#'   class='addpatient' ><i class='fa fa-plus'></i>Add patient(Form)</a></li>"; }?>
                <?php if($managepat=='Yes' || $editpat=="Yes"){ echo"<li><a href='#' class='managepatients'><i class='fa fa-plus'></i>Find patient</a></li>";}?>
                </ul>
              </li>
				
              <?php } 
			 
			   $sqlmember ="SELECT * FROM tbl_petients WHERE Status='Consultation' ORDER BY id DESC ";
			       $retrieve = mysqli_query($db,$sqlmember);				                 
                     $petients = mysqli_num_rows($retrieve);
	          
               if($consul=='Yes'){
               	  ?>
              <li class="treeview">
                <a href="#" class='openweekly'>
                <i class="fa fa-user-md"></i> <span>Consultation</span>
                <i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1"><?php echo$petients; ?></small></a>
                
              </li>
              <?php  
              }
              
               $sqlmember ="SELECT * FROM tbl_petients WHERE Status='Laboratory' ORDER BY id DESC ";
			       $retrieve = mysqli_query($db,$sqlmember);				                 
                     $petient = mysqli_num_rows($retrieve);
					 
					    $sqlmemberr ="SELECT * FROM tbl_petients WHERE Status='Accounts' ORDER BY id DESC ";
			       $retriever = mysqli_query($db,$sqlmemberr);				                 
                     $petientac = mysqli_num_rows($retriever);
	          if($labs=='Yes'){
               ?>
              
              <li class="treeview">
                <a href="#" class='openlabtests'>
                <i class="fa fa-eyedropper"></i> <span>Laboratory </span>
                <i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-primary1"><?php echo$petient; ?></small></a>
                
              </li>
               <?php   
			       }
			        $count=0;
                  $sqlmembeS ="SELECT * FROM tbl_treatment WHERE Status='Pay' ";
			       $retrievS = mysqli_query($db,$sqlmembeS);	
				   $du = mysqli_num_rows($retrievS);
				   if($du>=1){			                
                     while($foundS = mysqli_fetch_array($retrievS))
	                 {            
					        $rid=$foundS['Resultsid'];
					        $pid=$foundS['Patientid'];
							$date=$foundS['Date'];
		
							$sqlmembe ="SELECT * FROM tbl_treatment WHERE Resultsid='$rid' && Patientid='$pid' && Date='$date' && Status='Pay' ";
			               $retriev = mysqli_query($db,$sqlmembe);	
						   $duplicate = mysqli_num_rows($retriev);
						  if($duplicate>1){                    	               
                                             $counts=1;
			                               }
                         if($duplicate==1){                    	               
                                             $counts=1;
			                               }
						     
					 }
					 $count=$count+1;
					  
				   }
			 if($accountsa=='Yes'){
		           	?>         
              <li class="treeview">
                <a href="#" >
                <i class="fa fa-money"></i> <span>Accounts </span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a class='openaccounts' href='#' ><i class="fa fa-plus"></i>Process Payment<small class="label pull-right label-primary1"><?php echo$petientac; ?></small></a></li>
                  <!--<li><a class='openaccounts2' href='#' ><i class="fa fa-plus"></i>Admitted Patients Bills<small class="label pull-right label-primary1"><?php echo$count; ?></small></a></li>-->
                  <li><a  href='#' class='open-paidscheme'><i class="fa fa-plus"></i>Track Scheme Patients</a></li>
                </ul>
              </li>
              <?php } 
               if($adddrugs=='Yes' || $managedrugs=="Yes" || $gdrugs=='Yes'){
              ?>
              <li class="treeview">
                <a href="#">
                	 
                <i class="fa fa-medkit"></i>
                <span>Phamarcy</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                <?php if($gdrugs=='Yes'){ echo"<li><a href='#'   class='givedrugs' ><i class='fa fa-plus'></i>Give Drugs</a></li>"; }?>
                <?php if($adddrugs=='Yes'){ echo"<li><a href='#' class='addstudent'  ><i class='fa fa-plus'></i>Add Drug (Form)</a></li>";}?>
               <?php if($adddrugs=='Yes' || $managedrugs=="Yes"){ echo"<li><a href='#' class='addstudents'><i class='fa fa-plus'></i>Add Drugs (CVS)</a></li>";}?>
                <?php if($managedrugs=="Yes"){ echo"<li><a href='#' class='managestudent'><i class='fa fa-plus'></i>Manage Drugs</a></li>";}?>
               </ul>
              </li>
              <?php } 
			   if($accountsa=='Yes'){
		           	?>         
              <!--<li class="treeview">
                <a href="#" >
                <i class="fa fa-hotel"></i> <span>Admissions </span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a class='trackpatients' href='#' ><i class="fa fa-heartbeat"></i>Track Patients<small class="label pull-right label-primary1"><?php echo$count; ?></small></a></li>
                </ul>
              </li>-->
              <?php } 
              
              if($tsales=='Yes' || $ttreat=="Yes" || $montre=='Yes'){
              	?>   
              <li class="treeview">
                <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Reports</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                <?php if($tsales=='Yes'){ echo"<li><a href='#'   class='opentoday' ><i class='fa fa-plus'></i>Todays Sales report</a></li>"; }?>
                <?php if($ttreat=='Yes'){ echo"<li><a href='#'   class='opentreatment' ><i class='fa fa-plus'></i>Todays treatments</a></li>"; }?>
                </ul>
              </li>
               <?php }
               if($adduser=='Yes' || $logact=="Yes" || $manageuser=='Yes'){?>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-cogs"></i>
                <span>Set up</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
               <?php if($adduser=='Yes'){ echo"<li><a data-toggle='modal' data-id='' href='#Usericd10' class='open-adduser' ><i class='fa fa-plus'></i>Add ICD 10 Codes</a></li>"; }?>
                <?php if($adduser=='Yes'){ echo"<li><a data-toggle='modal' data-id='' href='#Useradd' class='open-adduser' ><i class='fa fa-plus'></i>Add System User</a></li>"; }?>
                <?php if($manageuser=='Yes'){ echo"<li><a href='#'   class='manageusers' ><i class='fa fa-plus'></i>Manage System Users</a></li>"; }?>
                <?php if($logact=='Yes'){ echo"<li><a href='#' class='openreports' ><i class='fa fa-plus'></i>Users Log Activity</a></li>"; }?>
                 </ul>
              </li>
              <?php } ?>
                </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<div class="sticky-header header-section">
			<div class="header-left" >
				<!--toggle button start-->
				<button id="showLeftPush" style="background-color: black"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
			
				
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				
				<!--search-box-->
				<div class="search-box" >
					<form class="input" >
						
					</form>
				</div><!--//end-search-box-->
				
				<div class="profile_details" >		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
								<span class="prfil-img">
										<?php   
										
                                                if($profile!=""){
												                 
																	echo"<img src='multimedia/pictures/$profile' height='50px' width='50px' alt=''>";	   
												             }
												        else{
												           	echo"<img src='admin/images/profile.png' height='50px' width='50px' alt=''>";	   
														     	
												             }										
										?>
										 </span> 
									<div class="user-name" >
										<p style="color:#1D809F;"><?php if(isset($sirname))
                                            {echo"<strong>".$firstname." ".$sirname."! </strong>";} ?>
				                         </p>
										<span><?php if(isset($sirname)){echo$role;} ?> &nbsp;<img src='admin/images/dot.png' height='15px' width='15px' alt=''>
										</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								 <li>
                                  <a data-toggle='modal' data-id='<?php echo$id; ?>' href='#Updatepicture' class='open-Updatepicture'><i class="fa fa-user"></i>Change profile picture</a>
                                 </li>
								<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper"  >
			<div class="main-page" style="">
		
		 <span id="results"><!-- results appear here --></span>

				
		</div>
				
	
		<div>
			&nbsp;
			</div>
			</div>
		</div>
	<!--footer-->
	<div class="footer">
	  
	</div>
    <!--//footer-->
	</div>
		
		<!-- Classie --><!-- for toggle left push menu script -->
		<script src="admin/js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
			
	<!--scrolling js-->
	<script src="admin/js/jquery.nicescroll.js"></script>
	<script src="admin/js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- side nav js -->
	<script src='admin/js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- for index page weekly sales java script -->
	
	
	<!-- Bootstrap Core JavaScript -->
   <script src="admin/js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->



</body>
<script type="text/javascript">

	function PrintPage() {
		window.print();
	}
	
	 
</script>
</html>

<?php
if(isset($_GET['gs'])) 
          {	           
			  $id=$_GET['gs'];
              $query = "SELECT name,type,Size,content FROM Excelfiles WHERE id='$id' ";         
         $result = mysqli_query($db,$query) or die('Error, query failed');		 
     list($name, $type, $content) = mysqli_fetch_array($result);
	       $path = 'multimedia/'.$name;
		   $size = filesize($path);
	     header('Content-Description: File Transfer');
         header('Content-Type: application/octet-stream');
         header("Content-length:". $size);
         header("Content-type:". $type);
         header("Content-Disposition: attachment; filename=\"" . basename($name) . "\";");
		 header('Content-Transfer-Encoding: binary');
         header('Expires: 0');
         header('Cache-Control: must-revalidate');
     ob_clean();
       flush();
	       readfile('multimedia/'.$name);	
                mysqli_close();
                exit;      
	}
?>		  