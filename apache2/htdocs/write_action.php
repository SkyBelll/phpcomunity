<?php
$connect = mysqli_connect("localhost", "root", "rr3312bk", "webdb",3307) or die("fail");

$id = $_POST['name'];                   //Writer
$pw = $_POST['pw'];                     //Password
$title = $_POST['title'];               //Title
$content = $_POST['content'];           //Content
$date = date('Y-m-d H:i:s');            //Date

$URL = './index.php';                   //return URL


$query = "INSERT INTO board (number, title, content, date, views, id, password, good, bad) 
        values(0,'$title', '$content', '$date', 0, '$id', '$pw',0,0)";


$result = $connect->query($query);
if ($result) {
?> <script>
        alert("<?php echo "게시글이 등록되었습니다." ?>");
        location.replace("<?php echo $URL ?>");
    </script>
<?php
} else {
    echo "게시글 등록에 실패하였습니다.";
}

mysqli_close($connect);
?>