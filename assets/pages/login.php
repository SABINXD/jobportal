
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobHunt - Login</title>
    <link rel="stylesheet" href="assets/css/authpage.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
</head>

<body>
    <div class="company-logo" id="logo1">
        <img src="assets/img/amazon.png" alt="Company Logo 1">
        <span class="company-name">amazon</span>
    </div>
    <div class="company-logo" id="logo2">
        <img src="assets/img/google.png" alt="Company Logo 2">
        <span class="company-name">Google</span>
    </div>
    <div class="company-logo" id="logo3">
        <img src="assets/img/figma.png" alt="Company Logo 3">
        <span class="company-name">Figma</span>
    </div>
    <div class="company-logo" id="logo4">
        <img src="assets/img/microsoft.png" alt="Company Logo 4">
        <span class="company-name">Microsoft</span>
    </div>
    <div class="company-logo" id="logo5">
        <img src="assets/img/linkedin.png" alt="Company Logo 5">
        <span class="company-name">LinkedIn</span>
    </div>
    <div class="company-logo" id="logo6">
        <img src="assets/img/google.png" alt="Company Logo 6">
        <span class="company-name">Google</span>
    </div>

    <div class="container" id="login-container">
        <div class="logo">RojGar<span>Nepal</span></div>
        <div class="form" id="login-form">
            <h2>Login</h2>
            <form  method="post" action="assets/php/actions.php?login">
                <input type="text" value="<?= showFormData('username_email') ?>" name="username_email" placeholder="Username/email" >
                <?= showError('username_email') ?>
                <input type="password" name="password" placeholder="Password">
                <?= showError('password') ?>
                <?= showError('checkuser') ?>
                <button type="submit">Login</button>
            </form>
            <p>New to JobHunt? <a href="?signup">Create an account</a></p>
        </div>
    </div>

    <div id="ball" class="ball"></div>
    <script src="assets/js/authpage.js"></script>
</body>

</html>