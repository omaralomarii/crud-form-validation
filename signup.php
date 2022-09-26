<?php
require_once'./conn.php';
$sql = 'SELECT * FROM signup';

// $getData = $conn->query($sql);

// $user = $getData->fetchAll(PDO::FETCH_OBJ);

//    print_r( $user);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form>

              <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg"name="Email" />
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                
              <div class="form-outline mb-4">
                  <input type="number" id="form3Example3cg" class="form-control form-control-lg"name="mobile" />
                  <label class="form-label" for="form3Example3cg">Your mobile phone</label>
                </div>



                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="Firstname"/>
                  <label class="form-label" for="form3Example1cg">First Name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg"  name="middleName"/>
                  <label class="form-label" for="form3Example1cg">middle Name</label>
                </div>


                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="Lastname"/>
                  <label class="form-label" for="form3Example1cg">last Name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg"  name="FamilyName"/>
                  <label class="form-label" for="form3Example1cg">Family Name</label>
                </div>


                
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg"name="Password" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

             

              


                <div class="form-outline mb-4">
                  <input type="date" id="form3Example4cg" class="form-control form-control-lg" name="Date"/>
                  <label class="form-label" for="form3Example4cg">Date Of birth</label>
                </div>


                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="button"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="./login.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>

<?php
//    require_once './conn.php';

   if(isset($_POST['Register'])){
     
     $Firstname = $_POST['Firstname'];
     $LastName = $_POST['LastName'];
     $middleName = $_POST['middleName'];
     $FamilyName = $_POST['FamilyName'];
     $mobile = $_POST['mobile'];
     $Password = $_POST['Password'];
     $Date = $_POST['Date'];
     $Email = $_POST['Email'];

    //  echo $name;


    $sql = "INSERT INTO info (Firstname , LastName, middleName, FamilyName , mobile ,Password ,Date) VALUES ('$Firstname' , '$LastName', '$middleName', '$FamilyName' , '$mobile' ,'$Password' ,'$Date' , '$Email')";

    $query = $db->prepare($sql);

   
    $result = $query->execute();

    header("location: admin.php");

   }



   ?>