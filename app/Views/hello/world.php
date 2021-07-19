<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h1>Selamat Datang....</h1>
<h4>
    <?php
    echo session()->get('username');
    ?>
</h4>
<?= $this->endsection() ?>