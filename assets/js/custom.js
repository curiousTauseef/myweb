function validation(){
    var status = {};
    status.valid = true;
    status.error = "";
    var fullname = $('#fullname').val();
    var email = $('#email').val();
    var password = $('#password').val();
    var dob = $('#birthdate').val();
    var country = $('#country').val();
    var gender = $("input:radio[name='gender']:checked").val();
    console.log(gender);


    if(!fullname){
        status.error = "Please Enter your Full Name";
        status.valid = false;
    }else if(!email){
        status.error = "Please enter your email id";
        status.valid = false;
    }else if(!password){
        status.error = "Please enter your email id";
        status.valid = false;
    }else if(!dob){
        status.error = "Please enter your DOB";
        status.valid = false;
    } else if(!country){
        status.error = "Please enter your email id";
        status.valid = false;
    }else if(!gender){
        status.error = "Please enter your gender";
        status.valid = false;
    }
    return status;
}


function myFunction(){
    var status = validation();
    if(status.valid){
        $('#error').html('');
            $('#error').css('display', 'none');
            var formdata = $("#register").serialize();
            $.ajax({
                type: 'POST',
                url: "./include/process/process_register.php",
                data: formdata,
                success: function (resultData) {
                    alert("Save Complete");
                },
                error: function (error) {
                    alert(error);
                }
            });
    }else{
        $('#error').css('display', 'block');
        $('#error').html(status.error);

    }
}