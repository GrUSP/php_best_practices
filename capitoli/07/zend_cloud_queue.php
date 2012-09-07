<?php

$queues = Zend_Cloud_QueueService_Factory::getAdapter(array(
    Zend_Cloud_QueueService_Factory::QUEUE_ADAPTER_KEY  => 'Zend_Cloud_QueueService_Adapter_Sqs',
    Zend_Cloud_QueueService_Adapter_Sqs::AWS_ACCESS_KEY => 'chiave di accesso',
    Zend_Cloud_QueueService_Adapter_Sqs::AWS_SECRET_KEY => 'chiave segreta',
));

$queueId1 = $queues->createQueue('test1');
$queueId2 = $queues->createQueue('test1');

$names = $queues->listQueues();
foreach ($names as $name) {
    echo "Coda messaggi: $name\n";
}

$queues->deleteQueue('test1');
$queues->deleteQueue('test2');

$queues->storeQueueMetadata($queueId, array(
    'Scopo' => 'Operazioni',
    'Admin' => 'Enrico',
));

$metadata = $queues->fetchQueueMetadata($queueId);
foreach ($metadata as $key => $value) {
   echo "Metadata $key: $value\n";
}

$queues->sendMessage($queueId, "Hello world!");

$messages = $queues->receiveMessages($queueId);

if (count($messages)) {
    foreach ($messages as $message) {
        echo "Messaggio: " . $message->getBody();
        break;
    }
}
