<h2>Show <?php echo f('controller.name') ?></h2>

<form method="post">

    <?php foreach(f('app')->controller->schema() as $name => $field): ?>

    <div>

        <?php echo $field->label() ?>

        <?php echo $field->set('readonly', true)->input(@$entry[$name]) ?>

    </div>

    <?php endforeach ?>

    <div class="command-bar">
        <a href="<?php echo f('controller.url') ?>">List</a>
        <a href="<?php echo f('controller.url', '/:id/update') ?>">Update</a>
        <a href="<?php echo f('controller.url', '/:id/delete') ?>">Delete</a>
    </div>

</form>