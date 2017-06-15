<?php
    $processedResult = "";
    // TEST POST HERE
    if(isset($_POST)){
        //CALL PHP FUNCTION TO PROCESS
        date_default_timezone_set('UTC');

        ini_set('display_errors',1);
        ini_set('display_startup_errors',1);
        error_reporting(-1);
        
        require '/var/www/html/vendor/autoload.php';
        use Aws\Sqs\SqsClient;

        $client = SqsClient::factory(array(
            'region' => 'ap-south-1',  // replace with your desired region
            'version' => '2012-08-10' // Now needs a version
        ));

        switch $_POST["todo"]
        {
            case "create":
            {
                //-----------CREATE WITH DEFAULT ATTRIBUTE
                $result = $client->createQueue(array('QueueName' => $_POST["queueName"]));

                //----------TO CREATE WITH ATTRIBUTE
                // $result = $client->createQueue(array(
                //     'QueueName'  => 'my-queue',
                //     'Attributes' => array(
                //         'DelaySeconds'       => 5,
                //         'MaximumMessageSize' => 4096, // 4 KB
                //     ),
                // ));

                //----------SET ATTRIBUTE LATER
                // $result = $client->setQueueAttributes(array(
                //     'QueueUrl'   => $queueUrl,
                //     'Attributes' => array(
                //         'VisibilityTimeout' => 2 * 60 * 60, // 2 min
                //     ),
                // ));

                $queueUrl = $result->get('QueueUrl');
                echo $queueUrl;
                break;
            }
            case "send":
            {
                $client->sendMessage(array(
                    'QueueUrl'    => $_POST["queueURL"],
                    'MessageBody' => $_POST["qMsg"],
                ));

                //-----------TO SET DEFAULT DELAY SET ATTRIBUTE
                //'DelaySeconds' => 30,
                echo "Message Sent To Queue"
                break ;
            }
            case "read":
            {
                $result = $client->receiveMessage(array(
                    'QueueUrl'        => $_POST["queueURL"],
                    'WaitTimeSeconds' => 10, //------OPTIONAL
                ));

                foreach ($result->getPath('Messages/*/Body') as $messageBody) {
                    // Do something with the message
                    echo $messageBody;
                }
                break;
            }
            default:
                echo false;
                break;
        }
    }else{
        //header('ajaxTempalate.php');
        echo false;
    }
?>