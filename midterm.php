<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>349 Midterm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container-fluid">
        #1

        <form target="index.php" method="GET">
            <div class="form-group">
                <label for="fname">First Name:</label>
                <input class="form-control" name="fname" id="user_form" required autofocus>
            </div>
            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input class="form-control" name="lname" id="user_form" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" name="email" id="user_form" required>
            </div>
            <div class="container-fluid">
                <div class="row">
                    Major:
                    <div class="radio col-sm-1">
                        <label>
                            <input type="radio" name="major" value="cs" checked>
                            CS
                        </label>
                    </div>
                    <div class="radio col-sm-1">
                        <label>
                            <input type="radio" name="major" value="csce">
                            CSCE
                        </label>
                    </div>
                    <div class="radio col-sm-1">
                        <label>
                            <input type="radio" name="major" value="math">
                            Math
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
            <button type="reset" class="btn btn-default">Reset</button>
        </form>
    </div>

    <div class="container-fluid">
        #2
        <?php
            $conid = mysqli_connect("localhost", "root", "", "midterm");

            if($conid) {
                echo "Connected. " . mysqli_get_host_info($conid);
            }

            else {
                echo "Cannot Connect. " . mysqli_connect_errno() . " " . mysqli_connect_error();
            }

            mysqli_close($conid);
        ?>
    </div>

    <div class="container-fluid">
        #3
        <?php
            $row = mysqli_fetch_object($result);

            $db_userid = $row->admin_id;
            $db_password = $row→admin_password;
            $encryptpasswd = sha1($userPasswd); // Note: sha1 encryption is obsolete
            $db_name = $row->admin_name;

            if ($db_userid != $userid || $db_password != $encryptpasswd) {
                $query = "INSERT INTO administrator VALUES(" . $db_userid . ", " . $db_password . ", " . $db_name . ")";
                $result = mysqli_query($connection, $query);
            
            if (!$result) {
                echo ("Insert to administrator failed. ". mysqli_error($connection));
                exit();
            }
            }
        ?>
    </div>
</body>
</html>