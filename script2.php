<?php
    /*
    Code is visible because you need to have MySQL and 
    some web server solution like XAMPP for it to work. I wanted
    to remove the complexity needed for the viewers see the content,
    therefore, I opted not to include this within the project.
    However, I will have a good SQL project done for viewers to 
    see to prove I can do SQL. 
    */
    $cname = $_POST['cname'];
    $subject = $_POST['subj'];

    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error) {
        die('Connection Failed: ' .$conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO support_table(cname, subj");
        $stmt->bind_param("ss",$cname,$subj);
        $stmt->execute();
        echo "Support form sent.";
        $stmt->close();
        $conn->close();
    }
?>