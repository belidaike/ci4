<?php

$this->extend('layout/main.php');
$this->section('body');

?>


<div class="container mt-5">
    <header class="bg-info p-3 text-center mb-3"><h1>Edit Account</h1></header>
    <form action="persons/update/<?= $person['id']; ?>" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="personFirst" class="form-label">First Name</label>
        <input type="text" class="form-control" name="personFirst" value="<?= $person['FIRSTNAME']; ?>">
    </div>

    <div class="mb-3">
        <label for="personLast" class="form-label">Last Name</label>
        <input type="text" class="form-control" name="personLast" value="<?= $person['LASTNAME']; ?>">
    </div>

    <div class="mb-3">
        <label for="personAdd" class="form-label">Address</label>
        <input type="text" class="form-control" name="personAdd" value="<?= $person['ADDRESS']; ?>">
    </div>

    <div class="mb-3">
        <label for="date" class="form-label">Date</label>
        <input type="date" class="form-control" name="date" value="<?= $person['DATE']; ?>">
    </div>

    <div class="w-100 d-flex justify-content-end"><button type="submit" class="btn btn-primary d-flex justify-content-center">Submit</button></div>
    </form>
</div>

<?php $this->endSection(); ?>