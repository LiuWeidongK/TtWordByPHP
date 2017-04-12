<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tt Manager</title>
    <link href="../../lib/ico.ico" rel="icon">

    <link href="../../lib/css/bootstrap.min.css" rel="stylesheet">    <!-- Bootstrap Code -->
    <link href="../../lib/css/dashboard.css" rel="stylesheet">
    <link href="manager.css" rel="stylesheet">                    <!-- Own Css -->

    <script type="text/javascript" src="../../lib/js/jquery-3.0.0.js"></script>	    <!-- Jquery -->
    <script type="text/javascript" src="../../lib/js/bootstrap.min.js"></script>     <!-- Bootstrap Code-->
    <script type="text/javascript" src="manager.js"></script>	    <!-- Own Js -->
</head>
<body>
    <div class="main">
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <span id="listText">unit1</span>
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <?php
                    for($i=1;$i<=30;$i++) {
                        $unit = "unit" . $i;
                        ?>
                        <li><a href="#" name="list"><?= $unit ?></a></li>
                        <?php
                    }
                ?>
            </ul>
        </div>

        <div class="back">
            <a href="../index/index.php">返回</a>
        </div>
    </div>

    <div class="content">
        <div class="show"><span id="word">Waiting...</span></div>
        <form class="input">
            <input id="inputE" class="form-control" type="text"/>
            <input type="submit" id="submit" value="submit"/>
        </form>
    </div>
</body>
</html>