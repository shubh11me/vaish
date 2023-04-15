<?php
include('./conn.php');
include('./header.inc.php');
?>

    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Teacher Name</th>
                    <th scope="col">Teacher Email</th>
                    <th scope="col">Teacher Password</th>
                    <th scope="col">Teacher Edit</th>
                    <th scope="col">Teacher Delete</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $q = "SELECT * FROM `teacher`";
                $res = mysqli_query($c, $q);
                if ($res) {
                    while ($data = mysqli_fetch_assoc($res)) {

                ?>

                        <tr>
                            <th scope="row">1</th>
                            <td><?php echo $data['teacher_name'] ?></td>
                            <td><?php echo $data['teacher_email'] ?></td>
                            <td><?php echo $data['teacher_password'] ?></td>
                            <td>
                            <a href="teacher_update.php?tea=<?php echo $data['teacher_id'] ?>">Edit</a>
                            </td>
                            <td>
                            <a href="scripts/delete_teacher.php?tea=<?php echo $data['teacher_id'] ?>">Delete</a>
                            </td>

                        </tr>
                <?php
                    }
                }

                ?>



            </tbody>
        </table>



        -------------------------------------------------------------------------------------


        


    </div>

    <?php
include('./footer.inc.php');
?>