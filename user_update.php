<?php
include('./conn.php');
include('./header.inc.php');

$user_id = null;
if (isset($_GET['usr'])) {
    $user_id = $_GET['usr'];
    $q = "select * from usersssss where useri_id ='$user_id'";
    // echo $q;
    $r = mysqli_query($c, $q);
    if ($r) {
        if (mysqli_num_rows($r) ==0) {
            die("No data");
        }
        $data = mysqli_fetch_assoc($r);
        // echo json_encode($data);  // convert it in json
        // die();
    } else {
        echo "NOo run";
        die();
    }
} else {
    header("Location: ./index.php");
}


?>


<div class="container">
    <form method="post" action="./scripts/add.php">
        <input type="hidden" name="user_id" value="<?php echo $data['useri_id'] ?>">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">First Name</label>
            <input type="text" name="fname" value="<?php echo $data['useri_fname'] ?>" class="form-control">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Last Name</label>
            <input type="text" value="<?php echo $data['useri_lname'] ?>" name="lname" class="form-control">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" value="<?php echo $data['useri_email'] ?>" name="ema" class="form-control">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" value="<?php echo $data['useri_password'] ?>" name="pa" class="form-control">
        </div>
        <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" >
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php
include('./footer.inc.php');
?>