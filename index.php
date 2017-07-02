<!DOCTYPE html>
<html>
<head>
	<title>Shyam Projects</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="assets/libs/bootstrap/css/bootstrap.css">	
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">    

</head>
<body>

<div class="container">
            <form class="form-horizontal" name="register" method="POST" id="register" role="form" >
                <h2>Registration Form</h2>
                <div class="form-group">
                    <label for="fullname" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="fullname"  name="fullname" placeholder="Full Name" class="form-control" autofocus>
                        <span class="name" id="name"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                    <div class="col-sm-9">
                        <input type="date" id="birthdate" name="birthdate" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Country</label>
                    <div class="col-sm-9">
                        <select id="country" name="country" class="form-control">
                            <option>Select</option>
                            <option value="india">India</option>
                            <option value="usa">USA</option>
                            <option value="england">England</option>
                        </select>
                    </div>
                </div> <!-- /.form-group -->
                
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" id="maleRadio" value="m">Male
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" id="femaleRadio" value="f">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" id="uncknownRadio" value="o">Unknown
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-label col-sm-3">Meal Preference</label>
                    <div class="col-sm-9">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="calorieCheckbox" value="Low calorie">Low calorie
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="saltCheckbox" value="Low salt">Low salt
                            </label>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">I accept <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="error" id="error" name="error"></div>
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="button" onclick="myFunction()" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->
<!-- Jquery 3.2.1 -->
<script type="text/javascript" src="assets/libs/jquery/jquery-3.2.1.js"></script>

<!-- Bootstrap JS -->
<script type="text/javascript" src="assets/libs/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
</body>
</html>