<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .card{
            background-color:transparent;
        }
        body{
            background-image:url(anonymous.jpg);
        .col-md-6 {
           /*  border: 1px solid red; */
        } 
        .btn {
            margin-top: 20px;
            margin-left: 45%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 card">
                <h2 class="p-5 mb-4 bg-dark text-white" class="card-header text-center">
                    STUDENT REGISTRATION FORM
                </h2>
                <form class="row" action="output.php" method="post">
                    <div class="col-md-6"><!-- lastname -->
                        <label class="text-white" for="">Last Name</label>
                        <input class="form-control" type="text" id="fname" name="fname">
                        <label class="text-white" for="">First Name</label>
                        <input class="form-control" type="text" id="lname" name="lname">
                         <!-- midname -->
                        <label class="text-white" for="">Middle Name</label>
                        <input class="form-control" type="text" id="midname" name="midname">
                        <label class="text-white" for="">address</label>
                        <input class="form-control" type="text" id="addr" name="addr">
                        <label class="text-white" for="">BitrhDay</label>
                        <input class="form-control" type="date" id="addr" name="DOB">
                        <!-- bday -->
                        <label class="text-white">Place Of Birth</label>
                        <input class="form-control" type="text" id="dob" name="POB">
                        <!-- gender -->
                        <!--  <label class="text-white" for="">Gender</label><br>
                        <input type="radio" id="male" name="gender" value="male" required>Male
                    
                        <input type="radio" id="female" name="gender" value="female" required>Female
                        
                        <input type="radio" id="other" name="gender" value="other" required>Other  -->

                        <p class="text-white">Select your gender</p>
                         <input type="radio" id="male" name="gender" value="male">
                        <label class="text-white" for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="female">
                         <label class="text-white" for="female">Female</label>
                         <input type="radio" id="other" name="gender" value="other">
                        <label class="text-white" for="other">Other</label>

                    </div>
                    <div class="col-md-6"><!-- guardian -->
                        <label class="text-white" for="">Gaurdian</label>
                        <input class="form-control" type="text" id="guardian" name="guardian" >
                        <label class="text-white" for="">Contact number</label>
                        <input class="form-control" type="text" id="contactnum" name="contactnum" >
                        <!-- civilwar -->
                        <label class="text-white" for="">Civil Status</label>
                        <input class="form-control" type="text" id="status" name="status" >
                        <!-- year -->
                        <label class="text-white" for="">Year</label>
                        <select name="yrlvl">
                        <option value="1">1st year</option>
                        <option value="2">2nd year</option>
                        <option value="3">3rd year</option>
                        <option value="4">4th year</option>
                        </select>

                        <!-- course -->
                        <label class="text-white" for="">Course</label>
                        <select id="course" name="course">
                        <option value="Coe">BS Coe</option>
                        <option value="OB">BS OB</option>
                        <option value="Vul">BS Vulcanizing</option>
                        <option value="BS">BS BS</option>
                        </select>
                        <!-- schoolyear -->
                        <label class="text-white" for="">School Year</label>
                        <input class="form-control" type="text" id="sy" name="sy">
                        <!-- Email -->
                        <label class="text-white" for="">Email</label>
                        <input class="form-control" type="email" id="email" name="email">
                    </div>
                    <!-- submit -->
                    <button type="submit" class="btn btn-dark">Submit</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>