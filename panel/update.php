<?php
try {
  // open connection to MongoDB server
  $conn = new Mongo('localhost');

  // access trucker database
  $db = $conn->noderest;

  // access trucker collection
  $collection = $db->truckers;

  // execute query
  // retrieve all documents
  $cursor = $collection->find();

  // iterate through the result set
  // print each document
  //echo $cursor->count() . ' trucker(s) found. <br/>';  
   foreach ($cursor as $obj) {
  //  echo 'Name: ' . $obj['name'] . '<br/>';
  //  echo 'Mileage: ' . $obj['TruckOdometer'] . '<br/>';
  //  echo '<br/>';
    $id = $obj['steamid'];
    $name = $obj['name'];
    $mileage = round($obj['TruckOdometer']);
    $companyMileage = $companyMileage + $obj['TruckOdometer'];
  }

  // access database
  $db2 = $conn->vtcstats;

  // access collection
  $collection2 = $db2->mileage;

  // retrieve existing document 
  $criteria = array(
    'name' => 'Company',
  );
  $doc = $collection2->findOne($criteria);
  
  // update document with new values
  // save back to collection
  $doc['TotalDistance'] = $companyMileage;
  $collection2->save($doc);
  
  // disconnect from server
  $conn->close();
} catch (MongoConnectionException $e) {
  die('Error connecting to MongoDB server');
} catch (MongoException $e) {
  die('Error: ' . $e->getMessage());
}
?>