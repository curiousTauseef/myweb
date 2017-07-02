function validation() {
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


    if (!fullname) {
        status.error = "Please Enter your Full Name";
        status.valid = false;
    } else if (!email) {
        status.error = "Please enter your email id";
        status.valid = false;
    } else if (!password) {
        status.error = "Please enter your email id";
        status.valid = false;
    } else if (!dob) {
        status.error = "Please enter your DOB";
        status.valid = false;
    } else if (!country) {
        status.error = "Please enter your email id";
        status.valid = false;
    } else if (!gender) {
        status.error = "Please enter your gender";
        status.valid = false;
    }
    return status;
}


function myFunction() {
    var status = validation();
    if (status.valid) {
        $('#error').html('');
        $('#error').css('display', 'none');
        var formdata = $("#register").serialize();
        $.ajax({
            type: 'POST',
            url: "./include/process/process_register.php",
            data: formdata,
            success: function (resultData) {
                alert("Save Complete");
                window.location.href = "login.php";
            },
            error: function (error) {
                alert(error);
            }
        });
    } else {
        $('#error').css('display', 'block');
        $('#error').html(status.error);

    }
}




// login

function logvalidate() {
    var status = {};
    status.valid = true;
    status.error = "";

    var email = $('#email').val();
    var pass = $('#password').val();

    if (!email) {
        status.error = "Please Enter Correct Email id";
        status.valid = false;
    } else if (!pass) {
        status.error = "Please Enter Correct Password";
        status.valid = false;
    }
    return status;
}


function LoginFunction() {
    var status = logvalidate();
    if (status.valid) {
        $('#error').css('display', 'none');
        var formdata = $("#login").serialize();
        $.ajax({
            type: 'POST',
            url: "./include/process/process_login.php",
            data: formdata,
            success: function (resultData) {
                alert(resultData);
                window.location.href = "home.php";
            },
            error: function (error) {
                alert(Hello);
            }
        });
    } else {
        $('#error').css('display', 'block');
        $('#error').html(status.error);
    }
}


$(window, document, undefined).ready(function () {

    $('input').blur(function () {
        var $this = $(this);
        if ($this.val())
            $this.addClass('used');
        else
            $this.removeClass('used');
    });

    var $ripples = $('.ripples');

    $ripples.on('click.Ripples', function (e) {

        var $this = $(this);
        var $offset = $this.parent().offset();
        var $circle = $this.find('.ripplesCircle');

        var x = e.pageX - $offset.left;
        var y = e.pageY - $offset.top;

        $circle.css({
            top: y + 'px',
            left: x + 'px'
        });

        $this.addClass('is-active');

    });

    $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function (e) {
        $(this).removeClass('is-active');
    });

});