<?php $this->extend('layouts/auth/default'); ?>
<?php $this->section('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xxl-6 col-xl-4 col-md-6 col-sm-8">
            <div class="edit-profile">
                <div class="card border-0">
                    <div class="card-header">
                        <div class="edit-profile__title">
                            <h6>Register</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="edit-profile__body">
                            <div class="form-group mb-25">
                                <label for="nama-lengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap" id="nama-lengkap">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group mb-25">
                                        <label for="tempat-lahir">Tempat Lahir</label>
                                        <input type="text" class="form-control" name="tempat-lahir" id="tempat-lahir">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group mb-25">
                                        <label for="datepicker8">Tanggal Lahir</label>
                                        <div class="with-icon">
                                            <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15 hasDatepicker" id="datepicker8" placeholder="01/10/2021">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-15">
                                <label for="password-field">password</label>
                                <div class="position-relative">
                                    <input id="password-field" type="password" class="form-control" name="password" placeholder="Password">
                                    <div class="uil uil-eye-slash text-lighten fs-15 field-icon toggle-password2">
                                    </div>
                                </div>
                            </div>
                            <div class="admin-condition">
                                <a href="forget-password.html">Lupa Password ?</a>
                            </div>
                            <div class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                <button class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn ">
                                    Login
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="admin-topbar">
                        <p class="mb-0">
                            Sudah Punya Akun ?
                            <a href="sign-up.html" class="color-primary">
                                Login Disini
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>

<?php $this->section('plugin_css'); ?>
<?php if (isset($pluginCSS)) {
    foreach ($pluginCSS as $file) {
        echo '<link href="' . $file . '" rel="stylesheet" type="text/css">';
    }
} ?>
<?php $this->endSection(); ?>

<?php $this->section('plugin_js'); ?>
<script src="<?= base_url('assets/js/form.js') ?>"></script>
<?php if (isset($pluginJS)) {
    foreach ($pluginJS as $file) {
        echo '<script src="' . $file . '"></script>';
    }
} ?>
<?php $this->endSection(); ?>

<?php $this->section('custom_css'); ?>
<?php if (isset($customCSS)) {
    foreach ($customCSS as $file) {
        echo '<link href="' . $file . '?v=' . env('ASSETV') . '" rel="stylesheet" type="text/css">';
    }
} ?>
<?php $this->endSection(); ?>

<?php $this->section('custom_js'); ?>
<?php if (isset($customJS)) {
    foreach ($customJS as $file) {
        echo '<script src="' . $file . '?v=' . env('ASSETV') . '"></script>';
    }
} ?>
<?php $this->endSection(); ?>