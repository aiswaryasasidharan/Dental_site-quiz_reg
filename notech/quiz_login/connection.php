 <?php  
 $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'registration';

    if(isset($_POST['submit']))
    {
    $name=$_POST['name'];    
$address=$_POST['address'];
$contact=$_POST['contact'];
$gender=$_POST['gender'];
$number=$_POST['number'];
$options=$_POST['options'];
$appropriate=$_POST['appropriate'];
    }

        $conn = new mysqli($servername,$username,$password,$dbname);

        if($conn->connect_error)
        {
            die("Connection Failed" . $conn->connect_error);
        }

    $sql = "INSERT INTO users (Id, Name, Address, Contact, Gender,Number, Options,Appropriate )  VALUES ('','$name','$address','$contact','$gender','$number','$options','$appropriate')";

        if($conn->query($sql) === TRUE)
        {
            echo "";
        }
        else
        {
            echo "ERROR".$sql."<br>".$conn->error;
        }

    $conn->close();
?>