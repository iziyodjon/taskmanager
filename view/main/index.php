<?php require_once (ROOT.'/view/inc/header.php');?>



<div class="container">
    <div class="tasks-wrap">
        <h2>Task list</h2>
        <div class="add-task-block">
            <a href="/task/" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add task</a>
        </div>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col"><a href="?sort=name">Name</a></th>
                <th scope="col">Email</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $cnt =1;
            foreach ($tasks as $task):?>
            <?if($task['task_status'] == 1):?>
                <tr class="table-success">
            <?else:?>
                    <tr class="bg-warning">
            <?endif;?>
                <th scope="row"><?=$cnt?></th>
                <td><?=$task['task_name'];?></td>
                <td><?=$task['task_email'];?></td>
                <td class="task-descs"><?=$task['task_desc'];?></td>
                <?if($task['task_status'] == 1):?>
                    <td class="text-success"><i class="fa fa-check-circle" aria-hidden="true"></i> Выполнен</td>
                <?else:?>
                    <td class="text-danger"><i class="fa fa-clock-o" aria-hidden="true"></i> В процессе</td>
                <?endif;?>
            </tr>
            <?php $cnt++; endforeach; ?>

            </tbody>
        </table>


    </div><!--tasks-wrap-->
</div>





<?php require_once (ROOT.'/view/inc/footer.php');?>
