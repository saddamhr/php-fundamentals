<?php
$fonts = 'verdana';
$bgcolor = '#444';
$fontcolor = '#FB8637';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Syntax</title>
    <style>
        body {
            font-family: <?php echo $fonts; ?>;
        }

        .phpcoding {
            width: 900px;
            margin: 0 auto;
            background: #ddd;
        }

        .headeroption,
        .footeroption {
            background: <?php echo $bgcolor; ?>;
            color: <?php echo $fontcolor; ?>;
            text-align: center;
            padding: 20px;
        }

        .headeroption h2,
        .footeroption h2 {
            margin: 0;
        }

        .maincontent {
            min-height: 400px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="phpcoding">
        <section class="headeroption">
            <h2><?php echo 'PHP Fundamentals Training'; ?></h2>
        </section>
        <div class="maincontent">
            <hr>
            PHP Form Validation
            <hr>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <table>
                    <tr>
                        <td>Name: </td>
                        <td><input type="text" name="name" required> </td>
                    </tr>
                    <tr>
                        <td>E-mail: </td>
                        <td><input type="text" name="email" required> </td>
                    </tr>
                    <tr>
                        <td>Website: </td>
                        <td><input type="text" name="website" required> </td>
                    </tr>
                    <tr>
                        <td>Comment: </td>
                        <td><textarea name="comment" cols="40" rows="5" required></textarea> </td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>
                            <input type="radio" name="gender" value="female" required>Female
                            <input type="radio" name="gender" value="male" required>Male
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Submit" name="submit"></td>
                    </tr>

                </table>
            </form>
            <?php
            $name = $email = $website = $comment = $comment = $gender = "";
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $name = validate($_POST['name']);
                $email = validate($_POST['email']);
                $website = validate($_POST['website']);
                $comment = validate($_POST['comment']);
                $gender = validate($_POST['gender']);


                echo 'Name: ' . $name . '<br>';
                echo 'E-mail: ' . $email . '<br>';
                echo 'Website: ' . $website . '<br>';
                echo 'Comment: ' . $comment . '<br>';
                echo 'Gender: ' . $gender . '<br>';
            }
            function validate($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            ?>
        </div>
        <section class="footeroption">
            <h2><?php echo 'http://www.trainingwithliveproject.com/'; ?></h2>
        </section>
    </div>
</body>

</html>