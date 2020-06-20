<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- All CSS -->
    <link rel="stylesheet" href="/view/inc/css/bootstrap.min.css" >
    <link rel="stylesheet" href="/view/inc/css/style.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >

    <title>Задачник - <?=$title;?></title>
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="/" class="logo"> <h1><i class="fa fa-tasks" aria-hidden="true"></i> <span>Task manager</span></h1></a>
            </div>
            <div class="col-md-6">
                <div class="auth-block float-right">
                    <a href="/auth" class="auth-btn btn btn-light"><i class="fa fa-users" aria-hidden="true"></i> Login</a>
                </div><!--auth-block-->
            </div>
        </div>
    </div>
</header>
<?if($_SERVER['REQUEST_URI'] != '/'):?>
<!--BreadCrumb-->
<nav class="breadcrumb-block">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?=$title;?></li>
        </ol>
    </div>
</nav>
<!--End BreadCrumb-->
<?endif;?>