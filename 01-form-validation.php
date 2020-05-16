<?php
$fonts = 'verdana';
$bgcolor = '#444';
$fontcolor = '#FB8637';
$errname = $erremail = $errweb = $errgender = "";
$name = $email = $website = $comment = $comment = $gender = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        $errname = "<span style='color:red'>Name is required.</span>";
    } else {
        $name = validate($_POST['name']);
    }
    if (empty($_POST['email'])) {
        $erremail = "<span style='color:red'>E-mail is required.</span>";
    } else {
        $email = validate($_POST['email']);
    }
    if (empty($_POST['website'])) {
        $errweb = "<span style='color:red'>Website is required.</span>";
    } else {
        $website = validate($_POST['website']);
    }
    if (empty($_POST['gender'])) {
        $errgender = "<span style='color:red'>Gender is required.</span>";
    } else {
        $gender = validate($_POST['gender']);
    }


    // echo 'Name: ' . $name . '<br>';
    // echo 'E-mail: ' . $email . '<br>';
    // echo 'Website: ' . $website . '<br>';
    // echo 'Comment: ' . $comment . '<br>';
    // echo 'Gender: ' . $gender . '<br>';
}
function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
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
                    <p style="color: red">* Required field</p>
                    <tr>
                        <td>Name </td>
                        <td><input type="text" name="name">*<?php echo $errname; ?></td>
                    </tr>
                    <tr>
                        <td>E-mail </td>
                        <td><input type="text" name="email">*<?php echo $erremail; ?></td>
                    </tr>
                    <tr>
                        <td>Website </td>
                        <td><input type="text" name="website">*<?php echo $errweb; ?></td>
                    </tr>
                    <tr>
                        <td>Comment </td>
                        <td><textarea name="comment" cols="40" rows="5"></textarea> </td>
                    </tr>
                    <tr>
                        <td>Gender </td>
                        <td>
                            <input type="radio" name="gender" value="female">Female
                            <input type="radio" name="gender" value="male">Male*<?php echo $errgender; ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Submit" name="submit"></td>
                    </tr>

                </table>
            </form>
            <?php

            ?>
        </div>
        <section class="footeroption">
            <h2><?php echo 'http://www.trainingwithliveproject.com/'; ?></h2>
        </section>
    </div>
</body>

</html>