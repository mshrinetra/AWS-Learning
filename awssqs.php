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
                <h3 class="panel-title"><b>Simple Queue Service</b></h3>
            </div>
            <div class="panel-body">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title"><b>Please Enter</b></h2>
                    </div>
                    <div class="panel-body">
                        <form class="navbar-form" id="input-form" action="processsqs.php" method="post">
                            <div>
                                <input type="text" name="todo" id="todo">
                                <input type="text" name="queueName" class="form-control input-text" placeholder="Queue Name">
                                <input type="text" name="queueURL" class="form-control input-text" placeholder="Queue URL">
                                <textarea rows="5" name="qMsg" class="form-control input-text"  placeholder="Message for Queue" ></textarea>
                            </div>
                            <button type="button" class="btn btn-danger navbar-btn" id="clearBtn">Clear All</button>
                            <button type="button" class="btn btn-primary navbar-btn btn-todo" name="create">Create Queue</button>
                            <button type="button" class="btn btn-primary navbar-btn btn-todo" name="send">Send Msg to Queue</button>
                            <button type="button" class="btn btn-primary navbar-btn btn-todo" name="read">Read from Queue</button>
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