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
        $noLink = "ajaxTempalate.php";
        $newDynamoDbLink = "createNewDynamoDb.php";
        // $isDynamoDb = False;
        // $dynamoDbLable = "";
        // if($isDynamoDb)
        // {
        //     $dynamoDbLable = "Database Exists! Name: myDynamoDb";
        //     $newDynamoDbLink = "#";
        // }

        $addDataLink = "addDataToDynamoDb.php"
    ?>
    <div id="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><b>Select an option</b></h3>
            </div>
            <div class="panel-body">
                <div class="list-group">
                    <a href="<?php echo $newDynamoDbLink ?>" class="list-group-item">Create New Dynamo DB Database and Tables</a>
                    <a href="<?php echo $addDataLink ?>" class="list-group-item">Insert records to Dynamo DB Tables</a>
                    <a href="awssqs.php" class="list-group-item">Work with SQS</a>
                    <a href="<?php echo $noLink ?>" class="list-group-item">Vestibulum at eros</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="cssnjs/interact.js"></script>
</body>
</html>