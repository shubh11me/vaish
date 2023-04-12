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