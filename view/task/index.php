<?php require_once (ROOT.'/view/inc/header.php');?>



<div class="container">
    <h1><?=$title;?></h1>
    <br>
    <br>

    <form action="" method="post">
        <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control"  placeholder="sergey@gmail.com">
        </div>
        <div class="form-group">
            <label>Type your name</label>
            <input type="text" class="form-control" placeholder="Sergey">
        </div>
        <div class="form-group">
            <label>Task description</label>
            <textarea class="form-control" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>





<?php require_once (ROOT.'/view/inc/footer.php');?>
