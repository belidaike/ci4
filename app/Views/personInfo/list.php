<?php

$this->extend('layout/main.php');
$this->section('body');

?>

<?php if(session()->getFlashdata('success')) :?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>
<h1>People List</h1>

<div class="d-flex justify-content-end"><a href="/persons/create" class="btn btn-primary">Add Person</a></div>

    <table class="table">
        <thead>
            <tr>
                <th scoped="col">#</th>
                <th scoped="col">First Name</th>
                <th scoped="col">Last Name</th>
                <th scoped="col">Address</th>
                <th scoped="col">Date</th>
                <th scoped="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($persons as $person): ?>
        
                <tr>
                    <td><?= $person['id']; ?></td>
                    <td><?= $person['FIRSTNAME']; ?></td>
                    <td><?= $person['LASTNAME']; ?></td>
                    <td><?= $person['ADDRESS']; ?></td>
                    <td><?= $person['DATE']; ?></td>
                    <td>
                        <a href="/persons/edit/<?= $person['id']; ?>" class="btn btn-primary">Edit</a>
                        <a href="/persons/delete/<?= $person['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>

<?php $this->endSection(); ?>