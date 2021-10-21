<?php include '../includes/header.php'; ?>

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 my-5 justify-content-center">
                <h1 class="text-center my-5 font-weight-bold">Seller Login</h1>
                <form action="." method="post" id="login_form">
                    <input type="hidden" name="action" value="login">

                    <div class="form-group">
                        <label class="smb-1">E-Mail</label>
                        <input class="form-control" type="text" name="email"
                               value="<?php echo htmlspecialchars($email); ?>" size="30">
                        <?php echo $fields->getField('email')->getHTML(); ?><br>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" type="password" name="password" size="30">
                        <?php echo $fields->getField('password')->getHTML(); ?>
                    </div>

                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Login">
                    </div>

                    <?php if (!empty($password_message)) : ?>
                    <span class="error">
                        <?php echo htmlspecialchars($password_message); ?>
                    </span><br>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</main>
<?php include '../includes/footer.php'; ?>
