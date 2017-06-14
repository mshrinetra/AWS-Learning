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
            <h1>AWS Learning Resources</h1><small>by <b>Manvendra Shrinetra</b></small>
        </div>
        <div class="page-header-right">
            <a class="btn btn-primary" href="index.php" role="button">Home</a>
        </div>
    </div>
    <?php
        //Code is provided by AWS and available here; http://docs.aws.amazon.com/amazondynamodb/latest/developerguide/AppendixSampleDataCodePHP.html
    
    // Date now needs to be set, which I guess is a good thing!
        date_default_timezone_set('UTC');
        
        // Find out what the issues are:
        
    ?>
    <div id="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><b>New Dynamo DB Table Creation Status</b></h3>
            </div>
            <div class="panel-body">
                <div class="list-group">
                    <ul>
                    <?php
                        ini_set('display_errors',1);
                        ini_set('display_startup_errors',1);
                        error_reporting(-1);
                        
                        require 'vendor/autoload.php';
                        use Aws\DynamoDb\DynamoDbClient;
                        
                        $client = DynamoDbClient::factory(array(
                            'region' => 'ap-south-1',  // replace with your desired region visit http://docs.aws.amazon.com/general/latest/gr/rande.html to get your regions.
                            'version' => '2012-08-10' // Now needs a version
                        ));
                        
                        $tableNames = array();
                        $tableName = 'ProductCatalog';
                        echo "<li class=\"list-group-item\">Creating table $tableName..." . PHP_EOL . "</li>";
                        $response = $client->createTable(array(
                            'TableName' => $tableName,
                            'AttributeDefinitions' => array(
                                array(
                                    'AttributeName' => 'Id',
                                    'AttributeType' => 'N' 
                                )
                            ),
                            'KeySchema' => array(
                                array(
                                    'AttributeName' => 'Id',
                                    'KeyType' => 'HASH' 
                                )
                            ),
                            'ProvisionedThroughput' => array(
                                'ReadCapacityUnits'    => 5,
                                'WriteCapacityUnits' => 2
                            )
                        ));
                        $tableNames[] = $tableName;
                        
                        $tableName = 'Forum';
                        echo "<li class=\"list-group-item\">Creating table $tableName..." . PHP_EOL . "</li>";
                        
                        $response = $client->createTable(array(
                            'TableName' => $tableName,
                            'AttributeDefinitions' => array(
                                array(
                                    'AttributeName' => 'Name',
                                    'AttributeType' => 'S' 
                                )
                            ),
                            'KeySchema' => array(
                                array(
                                    'AttributeName' => 'Name',
                                    'KeyType' => 'HASH'
                                )
                            ),
                            'ProvisionedThroughput' => array(
                                'ReadCapacityUnits'    => 5,
                                'WriteCapacityUnits' => 2
                            )
                        ));
                        $tableNames[] = $tableName;
                        
                        $tableName = 'Thread';
                        echo "<li class=\"list-group-item\">Creating table $tableName..." . PHP_EOL . "</li>";
                        
                        $response = $client->createTable(array(
                            'TableName' => $tableName,
                            'AttributeDefinitions' => array(
                                array(
                                    'AttributeName' => 'ForumName',
                                    'AttributeType' => 'S'
                                ),
                                array(
                                    'AttributeName' => 'Subject',
                                    'AttributeType' => 'S'
                                )
                            ),
                            'KeySchema' => array(
                                array(
                                    'AttributeName' => 'ForumName',
                                    'KeyType' => 'HASH'
                                ),
                                array(
                                    'AttributeName' => 'Subject',
                                    'KeyType' => 'RANGE'
                                )
                            ),
                            'ProvisionedThroughput' => array(
                                'ReadCapacityUnits'    => 5,
                                'WriteCapacityUnits' => 2
                            )
                        ));
                        $tableNames[] = $tableName;
                        
                        $tableName = 'Reply';
                        echo "<li class=\"list-group-item\">Creating table $tableName..." . PHP_EOL . "</li>";
                        
                        $response = $client->createTable(array(
                            'TableName' => $tableName,
                            'AttributeDefinitions' => array(
                                array(
                                    'AttributeName' => 'Id',
                                    'AttributeType' => 'S' 
                                ),
                                array(
                                    'AttributeName' => 'ReplyDateTime',
                                    'AttributeType' => 'S' 
                                ),
                                array(
                                    'AttributeName' => 'PostedBy',
                                    'AttributeType' => 'S' 
                                )
                            ),
                            'LocalSecondaryIndexes' => array(
                                array(
                                    'IndexName' => 'PostedBy-index',
                                    'KeySchema' => array(
                                        array(
                                            'AttributeName' => 'Id',
                                            'KeyType' => 'HASH'
                                        ),
                                        array(
                                            'AttributeName' => 'PostedBy',
                                            'KeyType' => 'RANGE'
                                        ),
                                    ),
                                    'Projection' => array(
                                        'ProjectionType' => 'KEYS_ONLY',
                                    ),
                                ),
                            ),
                            'KeySchema' => array(
                                array(
                                    'AttributeName' => 'Id',
                                    'KeyType' => 'HASH' 
                                ),
                                array(
                                    'AttributeName' => 'ReplyDateTime',
                                    'KeyType' => 'RANGE'
                                )
                            ),
                            'ProvisionedThroughput' => array(
                                'ReadCapacityUnits'    => 5,
                                'WriteCapacityUnits' => 2
                            )
                        ));
                        $tableNames[] = $tableName;
                        
                        foreach($tableNames as $tableName) {
                            echo "<li class=\"list-group-item\">Waiting for table $tableName to be created." . PHP_EOL . "</li>";
                            $client->waitUntil('TableExists', array('TableName' => $tableName)); // Changed from v2
                            echo "<li class=\"list-group-item\"><span class=\"link-lable\">Table $tableName has been created." . PHP_EOL . "</span></li>";
                        }
                    ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="cssnjs/interact.js"></script>
</body>
</html>