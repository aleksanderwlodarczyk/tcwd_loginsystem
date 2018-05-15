<?php
    define("__CONFIG__", true);
     require_once("includes/config.php");
     require_once("includes/links.php");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Complete Web Developer project</title>

</head>
<body>

    <div class="uk-section uk-container uk-text-center">
        <div class="uk-flex uk-flex-center@s uk-flex-left uk-flex-stretch">
            <form action="#" class="js-register">
                <fieldset class="uk-fieldset">
                    <legend class="uk-legend">Register</legend>
                    <div class="uk-margin">
                        <input type="text" class="uk-input" placeholder="Email" name="input_email">
                    </div>
                    <div class="uk-margin">
                        <input type="password" class="uk-input" placeholder="Password" name="input_password">

                        <button class="uk-button uk-button-default">Register</button>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>

</body>
</html>