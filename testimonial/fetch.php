<?php
 
// connect with database
$conn = new PDO("mysql:host=localhost;dbname=test", "root", "");
 
// fetch all testimonials
$sql = "SELECT * FROM testimonials ORDER BY id DESC";
$statement = $conn->prepare($sql);
$statement->execute();
$data = $statement->fetchAll();
 
// create new field for full comment text
// because we will be displaying less text and display 'show more' button
for ($a = 0; $a < count($data); $a++)
{
    $data[$a]["comment_full"] = $data[$a]["comment"];
    $data[$a]["comment"] = substr($data[$a]["comment"], 0, 50);
}
 
// send the response back to client
echo json_encode([
    "status" => "success",
    "message" => "Testimonial has been fetched.",
    "data" => $data
]);
exit();
 
?>