
<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="data2";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $order_date = $_POST['order_date'];
	 $company= $_POST['company'];
	 $owner = $_POST['owner'];
	 $item = $_POST['item'];
	 $quantity = $_POST['quantity'];
	 $weight= $_POST['weight'];
	 $request = $_POST['request'];
	 $track_id = $_POST['track_id'];
	 $shipment_size = $_POST['shipment_size'];
	 $specification = $_POST['specification'];
	 $checklist_quantity = $_POST['check_list_quantity'];

	 $sql_query = "INSERT INTO login_details (order_date,company,owner,item,quantity,weight,request,track_id,shipment_size,specification,check_list_quantity)
	 VALUES ('$order_date','$company','$owner','$item','$quantity','$weight','$request','$track_id','$shipment_size','$specification','$check_list_quantity')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>