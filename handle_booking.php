

<?php
$conn = mysqli_connect("localhost","root","","event_project");
if(!$conn){
    die ("connection error");
}else{

        $ticket_quantity = $_POST["ticket_quantity"];
        $event_id = $_POST["event_id"];
       
        
        $sql = "INSERT INTO handle_booking (ticket_quantity,event_id)
         VALUES ('$ticket_quantity','$event_id')";
         $run_sql = mysqli_query($conn,$sql);
         if($run_sql){
            header("location: event_message.html");
            die ("inserting data is done well");
         }else{
            die ("inserting data not done please!");
         }
}
?>

