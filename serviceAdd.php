
<?php
                $conn = mysqli_connect("localhost", "root", "", "autosprzedaz");

                if($conn === false){
                    die("ERROR: Brak połączenia." . mysqli_connect_error());
                }

                $header = $_REQUEST['header'];
                $text = $_REQUEST['text'];
                if (empty($header) || empty($text)){
                } else {
                    $sql = "INSERT INTO services (header, text) VALUES ('$header', '$text')";
                    mysqli_query($conn, $sql);
                }

                mysqli_close($conn);
                header("Location: service.php");
                die();
?>