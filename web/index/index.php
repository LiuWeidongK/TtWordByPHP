<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tt Word</title>
    <link href="../../lib/ico.ico" rel="icon">

    <link href="../../lib/css/bootstrap.min.css" rel="stylesheet">    <!-- Bootstrap Code -->
    <link href="../../lib/css/dashboard.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">                    <!-- Own Css -->

    <script type="text/javascript" src="../../lib/js/jquery-3.0.0.js"></script>	    <!-- Jquery -->
    <script type="text/javascript" src="../../lib/js/bootstrap.min.js"></script>     <!-- Bootstrap Code-->
    <script type="text/javascript" src="index.js"></script>	    <!-- Own Js -->
</head>
<body>
<audio style="display: none" id="sound">
    <!--source id="vSource" src="" type="audio/mpeg"-->
</audio>
<div class="top">
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

    <div class="count">
        <span id="firstCount">1</span> / <span id="totalCount">10</span>
    </div>

    <div class="right">
        <a href="../manager/manager.php">录入单词</a>
    </div>
</div>
<div class="main">
    <div class="content">
        <div class="word">
            <span class="first"></span><span class="follow"></span>
        </div>
        <div class="phonetic">
            <span id="phonetic"></span>
            <!--美：<span id="us"></span-->
        </div>
        <div class="explains">
            <span id="explains"></span>
        </div>
    </div>
    <div class="btn-group">
        <button type="button" id="pre" class="btn btn-default">pre</button>
        <button type="button" id="show" class="btn btn-default">show</button>
        <button type="button" id="hide" class="btn btn-default">hide</button>
        <button type="button" id="next" class="btn btn-default">next</button>
        <button type="button" id="voice" class="btn btn-default">
            <span class="glyphicon glyphicon-volume-up"></span>
        </button>
    </div>
</div>


</body>
</html>