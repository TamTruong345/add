
<?php
//    include 'connect.php';
//?>


<?php
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname = 'thanhvien';

if(isset($_POST['ok']))
{
    $u=$p=$e=$a="";
if($_POST['users'] == NULL)
{
    echo "Xin vui lòng nhập Username<br />";
}
    else    {
        $u=$_POST['users'];
        }

if($_POST['pass'] != $_POST['re_pass'])
{
    echo "Password và re-password không giống nhau<br />";
}
else    {
    if($_POST['pass'] == NULL){
        echo "Xin vui lòng nhập Password<br />";
    }
else    {
    $p=$_POST['pass'];
    }
     }

if($_POST['email'] == NULL) {
    echo "Xin vui lòng nhập E-Mail<br />";
}
    else    {
        $e=$_POST['email'];
        }

if($_POST['address'] == NULL)   {
    echo "Xin vui lòng nhập Address<br />";
}
    else    {
        $a=$_POST['address'];
        }

if($u & $p & $e & $a)
{

    $conn = mysqli_connect("localhost:3306", "root", "", $dbname) or die("Không thể kết nối cơ sở dữ liệu");
    $sql = "select * from danhsach where users='" . $u . "'";
    $query=$conn->query($sql);      //mysql_query
    if($query->num_rows > 0)
    {
        echo "Username đã tồn tại<br />";
    }
    else{
        $sq ="insert into danhsach(users,pass,email,address) values('".$u."','".$p."','".$e."','".$a."')";
        $quer=$conn->query($sq);

        echo "Thêm mới thành viên thành công";
        }
}
else{
    echo "Thêm mới không thành công";
    }
}

//while ($row = $quer->fetch_array(MYSQLI_ASSOC)) {
//    echo "<p>Tên: " . $row['users'] . "</p>";
//    echo "<p>Email: " . $row['email'] . "</p>";
//    echo "<p>Address: " . $row['address'] . "</p>";
//    echo '<p>-----------------------</p>';
//}

//$conn=mysqli_connect("localhost","root","") or die("can't connect this database");
//mysqli_select_db("thanhvien",$conn);
//$sql="select * from danhsach order by id DESC";
//$query=mysqli_query($sql);
//if(mysqli_num_rows($query) != "")
//{
//$stt=1;
//while($row=mysqli_fetch_array($query))
//{
//    $stt++;
//    <tr>
//    <td>$stt</td>
//     <td>$row['users']</td>
//    <td>$row['email']</td>
//     <td>$row['address']</td>
//     <td><a href='index.php?page=suasv'>Sửa</a></td>
//    <td><a href='index.php?page=xoasv'></a>Xóa</td>
//    </tr>
//}else{
//    echo "<tr><td colspan='6' align='center'>Chưa có thành viên nào</td></tr>";
//}


?>
<form name="adduser" action="themthanhvien.php" method="post">
    <fieldset>
        <legend>Add Member</legend>
        <table border="0px">
            <tr>
                <td>Level:</td><td> <select name='level'>
                        <option value='1'>Superuser</option>
                        <option value='2'>Member</option>
                        <option value=3>Admin </option></td>

                </select><br />
            </tr>

            <tr>
                <td><label>User Name:</td><td></label> <input type="text" name="users"  /><br /></td>
            </tr>
            <tr>
                <td><label>Password:</label></td><td> <input type="password" name="pass" /><br /></td>
            </tr>
            <tr>
                <td><label>Re-Password:</label></td><td> <input type="password" name="re_pass"  /><br /></td>
            </tr>
            <tr>
                <td><label>Email:</label></td><td> <input type="text" name="email" /><br /></td>
            </tr>
            <tr>
                <td><label>Address :</label></td><td> <input type="text" name="address"  /><br /></td>
            </tr>
            <tr>
                <td> <label></label></td><td> <input type="submit" name="ok" value="Add New" /></td>
            </tr>
        </table>
    </fieldset>
</form>