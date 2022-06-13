<div class="container-fluid">
    <div class="h6 text-danger"><i>*notes: <br /> role id 1 untuk <b> admin</b>, role id 2 untuk <b> user</b></i></div>

    <table class="table table-bordered table-hover table-striped table-borderless">
        <tr>

            <th>no </th>
            <th>nama </th>
            <th>username</th>
            <th>password</th>
            <th>role id</th>
            <th colspan="2">aksi</th>
        </tr>

        <?php
        foreach ($user as $usr) : ?>

            <tr>

                <td><?php echo ++$start ?></td>
                <td><?php echo $usr['nama']; ?></td>
                <td><?php echo $usr['username']; ?></td>
                <td><?php echo $usr['password']; ?></td>
                <td><?php echo $usr['role_id']; ?></td>
                <td><?php echo anchor('admin/data_user/edit/' . $usr['id'], '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
                <td><?php echo anchor('admin/data_user/hapus/' . $usr['id'], '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
            </tr>

        <?php endforeach ?>
    </table>

    <?= $this->pagination->create_links(); ?>
</div>