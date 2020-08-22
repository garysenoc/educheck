function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
 $(document).ready(function(){

// WHEN SUBMITTED SCHOOL
$(document).on('click','#submit_school',function(){
	var school_name=   $('.school_name').val();
	var sadmin_id_number= $('.sadmin_id_number').val();
	var generated_password= $('.generated_password').val();

	$('#school_added_modal').modal('show');

	$('#the_school_name').text(school_name);
	$('#generated_username').text(sadmin_id_number);
	$('#the_generated_password').text(generated_password);
});
$(document).ready(function(){
	$( "#submitted_request" ).trigger( "click" );
});

// WHEN SUMBIT TEACHER
$(document).on('click','#submit_teacher',function(){
	var the_teacher_name=   $('.the_teacher_name').val();
	var teacher_username= $('.teacher_username').val();
	var teacher_generated_password= $('.teacher_generated_password').val();

	$('#teacher_added_modal').modal('show');

	$('#the_teacher_name').text(the_teacher_name);
	$('#teacher_username').text(teacher_username);
	$('#teacher_generated_password').text(teacher_generated_password);
});
$(document).ready(function(){
	$( "#submit_teacher" ).trigger( "click" );
});

// WHEN SUMBIT STUDENT
$(document).on('click','#submit_student',function(){
	var the_student_name=   $('.the_student_name').val();
	var student_username= $('.student_username').val();
	var student_generated_password= $('.student_generated_password').val();

	$('#student_added_modal').modal('show');

	$('#the_student_name').text(the_student_name);
	$('#student_username').text(student_username);
	$('#student_generated_password').text(student_generated_password);
});
$(document).ready(function(){
	$( "#submit_student" ).trigger( "click" );
});


//WHEN SUBMITTED REQUEST PARTNERSHIP
$(document).on('click','#submitted_request',function(){

	var snd='<audio autoplay=true><source src="assets/sounds/ap_sound.mp3.mp3"> </audio>';
    $('body').append(snd);

	var requester_fullname=   $('.requester_fullname').val();
	var requested_school= $('.requested_school').val();
	var requester_email= $('.requester_email').val();

	$('#sent_request').modal('show');

	$('#requester_name').text(requester_fullname);
	$('#requested_school').text(requested_school);
	$('#requester_email').text(requester_email);
});

$(document).ready(function(){
	$( "#submit_school" ).trigger( "click" );
});
// click sound
$(document).on('click','#sound_success',function(){

var snd='<audio autoplay=true><source src="assets/sounds/ap_sound.mp3.mp3"> </audio>';
    $('body').append(snd);
});
// click sound
$(document).on('click','#click_sound',function(){

var snd='<audio autoplay=true><source src="assets/sounds/ap_sound.mp3.mp3"> </audio>';
    $('body').append(snd);
});



$(document).ready(function(){
	
	$( "#sound_success" ).trigger( "click" );
});


//checking the request form if filled up

	// setInterval(function(){
    // 	var sname = $('#sname').val();
    // 	var saddress = $('#saddress').val();
    // 	var sfn = $('#sfn').val();
    // 	var sln = $('#sln').val();
    // 	var swork = $('#swork').val();
    // 	var semail = $('#semail').val();
    // 	var scontact = $('#scontact').val();

    // 	if(sname.length>0 && saddress.length>0 && sfn.length>0 && sln.length>0 && swork.length>0 && semail.length>0 && scontact.length>0){
    // 		document.querySelector('#agree_to_terms').disabled=false;
    // 	}else{ 	 	
    // 		document.querySelector('#agree_to_terms').disabled=true;
    // 	}
    	
    // },100);

//Agree to terms
$(document).on('click','#agree_to_terms',function(){

	if(document.getElementById('agree_to_terms').checked){
		document.getElementById('submit_request').disabled=false;
		$('#submit_request').css({"backgroundColor":"teal"});
	}else{
		document.getElementById('submit_request').disabled=true;
		$('#submit_request').css({"backgroundColor":"#D4D4D4"});
	}
    
    
});

//EXCEL MODALS
$(document).on('click','#clicked_excel',function(){
		$('#excel_send').modal('show');
});

$(document).on('click','#clicked_excel_student',function(){
		$('#excel_send_student').modal('show');
});

















 });