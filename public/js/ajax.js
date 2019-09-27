$(document).on('click', '#previewModal', function(){
	alert("heloo");
	$('#modalSubscriptionForm').modal('show');
});

$(document).on('click','#add_profile_data', function () {
	//alert('Validation Code');

    var name = $(this).parents('.modal-content').find('#name').val();
    //alert(name);
    var email_box = $(this).parents('.modal-content').find('#email').val();  
    //alert(email_box);
    var atposition=email_box.indexOf("@");  
    var dotposition=email_box.lastIndexOf(".");
    var mobile = $(this).parents('.modal-content').find('#number').val();
    //alert(mobile);
   
  
    if(name == ""){
        $('#user_name_error').css('color', 'red').html('Please Enter Name');
        return false;
    }
   
   if(email_box == "" ){
        $('#user_email_error').css('display','block').html('Email can not be left blank!');
        return false;
    }

    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email_box.length){  
      $('#user_email_error').css('display','block').html('Please Enter a Valid Email!'); 
      return false; 
    }

    if(mobile == ""){
        $('#user_number_error').css('color', 'red').html('Please Enter Number');
        return false;
    }

  
});

