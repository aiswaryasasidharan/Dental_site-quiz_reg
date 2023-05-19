 <?php  
 include ("Connection.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
	.gradient-custom {
/* fallback for old browsers */
background: #D7D0FF;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to bottom right, rgba(215, 208, 255 ), rgba(215, 208, 255 ));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to bottom right, rgba(215, 208, 255 ), rgba(215, 208, 255 ))
}

.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;

}
.card-registration .select-arrow {
top: 12px;
}
</style>
<body>
  
 <section class="vh-80 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
     
         <form action="" name="forml" method="post">
              <div class="row">
                <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="name" name="name" class="form-control form-control-lg"/>
                    <label class="form-label" >Name of school</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="address" name="address"class="form-control form-control-lg" />
                    <label class="form-label"> Address of school</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">
                  <div class="form-outline datepicker w-100">
                    <input type="text" class="form-control form-control-lg" id="contact " name="contact" />
                    <label for="contact  " class="form-label">Name of contact person</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <h6 class="mb-2 pb-1">Gender: </h6>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender"
                      value="M" checked />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender"
                      value="F" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender"
                      value="O" />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>
                </div>
              </div>
              <div class="row">
              <div class="col-md-6 mb-4 pb-2">
       <div class="form-outline">
  <input type="tel" id="number" name="number" class="form-control form-control-lg" />
  <label class="form-label" for="phoneNumber">Phone Number</label>
</div>
</div>
<div class="col-md-6 mb-4">
<h6 class="mb-2 pb-1">please as appropriate </h6>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="appropriate" id="appropriate"
    value="P" checked />
  <label class="form-check-label" for="primary">primary</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="appropriate" id="appropriate"
    value="S" />
  <label class="form-check-label" for="secondary">secondary</label>
</div>
</div>
</div>
             <div class="row" >
                <div class="col-12">
                  <select class="select form-control-lg"id="options" name="options" >
                    <option value="0" disabled >Number of participants</option>
                    <option value="1"> 1</option>
                    <option value="2"> 2</option>
                    <option value="3"> 3</option>
                    <option value="4"> 4</option>
                  </select>
                  <label class="form-label select-label">Choose option</label>
                </div>
              </div>
              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" name="submit"value="Submit" />
              </div><br>
<a href="login.php">login here</a>
<div class="alert alert-success" id="success" style="display: none;">
  <strong>success</strong>registration successfully
</div>
<div class="alert alert-danger" id="failure" style="display: none;">
  <strong>already exit</strong>usernae is exit
</div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</body>
</html>