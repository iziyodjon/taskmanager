<?php require_once (ROOT.'/view/inc/header.php');?>

    <div class="container">
        <div class="login-wrap">
            <h2>Login page</h2>
            <br>
            <br>
            <form action="" method="post">
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="task_email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="pass">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div><!--tasks-wrap-->
    </div>

<?php require_once (ROOT.'/view/inc/footer.php');?>