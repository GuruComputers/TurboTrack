<?php
try {
  // open connection to MongoDB server
  $conn = new Mongo('localhost');

  // access database
  $db = $conn->noderest;

  // access collection
  $collection = $db->truckers;

  // execute query
  // retrieve all documents
  $cursor = $collection->find();

  // iterate through the result set
  // print each document
  echo $cursor->count() . ' trucker(s) found. <br/>';  
  foreach ($cursor as $obj) {
    echo 'Name: ' . $obj['name'] . '<br/>';
    echo 'Mileage: ' . $obj['TruckOdometer'] . '<br/>';
    echo '<br/>';
  }

  // disconnect from server
  $conn->close();
} catch (MongoConnectionException $e) {
  die('Error connecting to MongoDB server');
} catch (MongoException $e) {
  die('Error: ' . $e->getMessage());
}
?>