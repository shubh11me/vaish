<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="navbar.css">

 <style>
        .container h2{
            margin:50px 0px;
            color:#6a359c;
            font-family:'poppins';
        }
    </style>
</head>
<body>
<header>  
<nav>  
<ul>  
<li>  
<a href="./index.php"> User </a>  
</li> 
<li>  
<a href="./user_list.php"> User List</a>  
</li>  

<li>  
<a href="teacher.php"> Teacher </a>  
</li>  
<li>  
<a href="#"> Contact </a>  
</li>  
<li> <a href="#"> Terms of use </a>  
</li>  
<li>  
<a href="#"> Join Us </a>  
</li>  
</ul>  
</nav>  
</header>  


    <div class="container">

        <h2>Teacher Info Form</h2>

        <form method="post" action="./scripts/teacher_info.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                <input type="text" name="fullname" class="form-control" >
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="tea_email" class="form-control">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="tea_pass" class="form-control">
            </div>
            <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" >
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>