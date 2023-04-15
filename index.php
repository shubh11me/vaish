<?php
include('./conn.php');
include('./header.inc.php');
?>


<div class="container">
    <form method="post" action="./scripts/add.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">First Name</label>
            <input type="text" name="fname" class="form-control">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Divison</label>
            <!-- <input type="text" name="div" class="form-control"> -->
            <select name="div" id="cars">
                <?php 
$qu="select * from division";
$r=mysqli_query($c,$qu);
while ($row=mysqli_fetch_assoc($r)) {
//    echo "<option value="rowwaladata">A</option>";
   echo "<option value=".$row['division_id'].">".$row['division_name']."</option>";
}
                ?>
                <!-- <option value="1">A</option>
                <option value="2">B</option>
                <option value="3">C</option> -->
            
            </select>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Last Name</label>
            <input type="text" name="lname" class="form-control">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="ema" class="form-control">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="pa" class="form-control">
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