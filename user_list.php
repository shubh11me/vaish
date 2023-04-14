<?php
include('./conn.php');
include('./header.inc.php');
?>

    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User Name</th>
                    <th scope="col">User Last Name</th>
                    <th scope="col">User Email</th>
                    <th scope="col">User Edit</th>
                    <th scope="col">User Delete</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $q = "SELECT * FROM `usersssss`";
                $res = mysqli_query($c, $q);
                if ($res) {
                    while ($data = mysqli_fetch_assoc($res)) {

                ?>

                        <tr>
                            <th scope="row">1</th>
                            <td><?php echo $data['useri_fname'] ?></td>
                            <td><?php echo $data['useri_lname'] ?></td>
                            <td><?php echo $data['useri_email'] ?></td>
                            <td>
                                <a href="user_update.php?usr=<?php echo $data['useri_id'] ?>">Edit</a>
                            </td>
                            <td>
                                <a href="scripts/delete_usr.php?usr=<?php echo $data['useri_id'] ?>">Delete</a>
                            </td>

                        </tr>
                <?php
                    }
                }

                ?>



            </tbody>
        </table>



        -------------------------------------------------------------------------------------


        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User Name</th>
                    <th scope="col">User Last Name</th>
                    <th scope="col">User Email</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $q = "SELECT * FROM `usersssss`";
                $res = mysqli_query($c, $q);
                if ($res) {
                    $no=1;
                    while ($data = mysqli_fetch_assoc($res)) {
                        echo "<tr>";
                        echo "<td>".$no."</td>";

                        echo "<td>".$data['useri_fname']."</td>";
                        echo "<td>".$data['useri_lname']."</td>";
                        echo "<td>".$data['useri_email']."</td>";
                        $no++;
                    }
                }
                ?>

            
            </tbody>
        </table>


    </div>

    <?php
include('./footer.inc.php');
?>