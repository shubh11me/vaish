<?php
include('./conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="navbar.css">
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
                    while ($data = mysqli_fetch_assoc($res)) {

                ?>

                        <tr>
                            <th scope="row">1</th>
                            <td><?php echo $data['useri_fname'] ?></td>
                            <td><?php echo $data['useri_lname'] ?></td>
                            <td><?php echo $data['useri_email'] ?></td>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>