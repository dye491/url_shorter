<?php
/**
 * @var array $vars
 */
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $vars['title'] ?></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
</head>
<body>
<h2><?= $vars['title'] ?></h2>
<div class="row">
    <form class="form-inline col-md-12" action="" method="post">
        <div class="row">
            <label for="source-url" class="col-md-1 ">Source URL</label>
            <div class="col-md-9">
                <input id="source-url" type="text" name="url" value="http://" style="display: block;width: 100%">
                <?php if ($vars['error']): ?>
                    <span style="color: red"><?= $vars['error'] ?></span>
                <?php endif; ?>
            </div>
            <div class="col-md-2">
                <input type="submit" value="Shorten this URL">
            </div>
        </div>
    </form>
</div>
<div class="panel panel-default">
    <?php if (isset($vars['short_url'])): ?>
        <div class="panel-heading">Short URL</div>
        <div class="panel-body">
            <p>
                <a href="<?= $vars['short_url'] ?>" target="_blank"><?= $vars['short_url'] ?></a>
            </p>
        </div>
    <?php endif; ?>
</div>
</body>
</html>