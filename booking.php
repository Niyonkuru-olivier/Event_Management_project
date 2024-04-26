
<?php
$conn = mysqli_connect("localhost","root","","event_project");
if(!$conn){
    die ("connection error");
}else{

        // Retrieve form data
    $fname = $_POST["fname"];
    $sname = $_POST["sname"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $company_name = $_POST["company_name"];
    $job_position = $_POST["job_position"];
    $event = $_POST["event"];
    $ticket_quantity = $_POST["ticket-quantity"];

        
        $sql = "INSERT INTO booking (fname,sname,email,phone_number,company_name,job_position,event,ticket_quantity)
         VALUES ('$fname','$sname','$email','$phone_number','$company_name','$job_position','$event','$ticket_quantity')";
         $run_sql = mysqli_query($conn,$sql);
         if($run_sql){
            header("location: thanks.html");
            die ("inserting data is done well");
         }else{
            die ("inserting data not done please!");
         }
}
?>

