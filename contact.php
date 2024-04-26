
<?php
$conn = mysqli_connect("localhost","root","","event_project");
if(!$conn){
    die ("connection error");
}else{

        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        
        $sql = "INSERT INTO contact (name,email,message)
         VALUES ('$name','$email','$message')";
         $run_sql = mysqli_query($conn,$sql);
         if($run_sql){
            header("location: message_contact.html");
            die ("inserting data is done well");
         }else{
            die ("inserting data not done please!");
         }
}
?>
