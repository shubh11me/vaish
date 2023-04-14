<?php
include('./conn.php');
include('./header.inc.php');



$tea_id = null;
if(isset($_GET['tea'])){
    $tea_id = $_GET['tea'];
    $qi = "select * from teacher where teacher_id ='$tea_id'";
    // echo $q;
    $ri = mysqli_query($c, $qi);
    if($ri){
        if(mysqli_num_rows($ri)==0){
            die("No data");
        }
        $info=mysqli_fetch_assoc($ri);
        echo json_encode($info);
    } else {
        echo("Noo Run");
        die();
    }

} else {
    header("Location: ./teacher.php");
}


?>






    <div class="container">

        <h2>Teacher Info Form</h2>

        <form method="post" action="./scripts/teacher_info.php">
        <input type="hidden" name="teacher_id" value="<?php echo $info['teacher_id'] ?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                <input type="text" name="fullname" class="form-control"  value="<?php echo $info['teacher_name'] ?>">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="tea_email" class="form-control" value="<?php echo $info['teacher_email'] ?>">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="tea_pass" class="form-control" value="<?php echo $info['teacher_password'] ?>">
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