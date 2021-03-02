<?php
/* @var $this yii\web\View */
?>
<h1>part/index</h1>

<p>
    This is Part viewing page <br><br><br>
</p>




<div class="table-responsive">
  <table class="table table-striped">
    
    <thead>
    <tr>
        <th scope="col">#                     </th>
        <th scope="col">Name                  </th>
        <th scope="col">Full Name             </th>
        <th scope="col">Qty                   </th>
        <th scope="col">Actions               </th>
    </tr>
    </thead>

    <tbody>

    <?php foreach($parts as $part) { ?>
    <tr>
         <th scope="row"><?= $part->id ?>        </th>
        <td>             <?= $part->name ?>      </td>
        <td>             <?= $part->full_name ?> </td>
        <td>             <?= $part->quantity ?>  </td>
        <td><a class="btn btn-danger" href="/part/edit/<?= $part->id ?>" role="button">Edit </td>
    </tr>
    <?php } ?>
    </tbody>

  </table>
</div>

