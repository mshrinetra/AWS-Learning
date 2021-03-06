<!DOCTYPE html>
<html>
<head>
    <title>AWS Learning</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
    <link rel="stylesheet" type="text/css" href="cssnjs/custome.css" />
</head>
<body>
    <div class="page-header">
        <div class="page-header-left">
            <h1>AWS Learning Resources</h1>
            <small>
                by <b>Manvendra Shrinetra</b>
                <a class="about-link" href="aboutmshrinetra.php">Know about</a>
            </small>
        </div>
        <div class="page-header-right">
            <a class="btn btn-primary" href="index.php" role="button">Home</a>
        </div>
    </div>
    <?php
        
    ?>
    <div id="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><b>Select an option</b></h3>
            </div>
            <div class="panel-body">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title"><b>Please Enter</b></h2>
                    </div>
                    <div class="panel-body">
                        <form class="navbar-form" id="input-form" action="processData.php" method="post">
                            <div>
                                <input type="text" name="todo" id="todo">
                                <input type="text" name="firstInput" class="form-control input-text" placeholder="firstInput">
                                <input type="text" name="secondInput" class="form-control input-text" placeholder="secondInput">
                                <textarea rows="5" name="thirdInput" class="form-control input-text"  placeholder="thirdInput" ></textarea>
                                <input type="text" name="fourthInput" class="form-control input-text" placeholder="fourthInput">
                                <input type="text" name="fifthInput" class="form-control input-text" placeholder="fifthInput">
                            </div>
                            <button type="button" class="btn btn-danger navbar-btn" id="clearBtn">Clear All</button>
                            <button type="button" class="btn btn-primary navbar-btn btn-todo" name="todoOne">To Do One</button>
                            <button type="button" class="btn btn-primary navbar-btn btn-todo" name="todoTwo">To Do Two</button>
                            <button type="button" class="btn btn-primary navbar-btn btn-todo" name="todoTre">To Do Tre</button>
                            <button type="button" class="btn btn-info navbar-btn" id="reTryBtn" disabled>RE-TRY</button>
                        </form>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title"><b>Action Result</b></h2>
                    </div>
                    <div class="panel-body">
                        <div id="action-result" class="form-control result-area">
                            
                        </div>
                        <a class="btn btn-success navbar-btn" href="index.php" role="button">OK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="cssnjs/interact.js"></script>
</body>
</html>