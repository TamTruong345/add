<?php

$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname = 'thanhvien';

$conn=mysqli_connect("localhost:3306","root","") or die("can't connect this database");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

//mysqli_select_db("thanhvien",$conn);
if(isset($_POST['ok']))
{
$u=$p=$e=$a="";
if($_POST['users'] == NULL){
echo "Xin vui lòng nhập Username<br />";
}else{
$u=$_POST['user'];
}

if($_POST['pass'] != $_POST['re_pass']){
echo "Password và re-password không giống nhau<br />";
}else{
if($_POST['password'] == NULL){
echo "Xin vui lòng nhập Password<br />";
}else{
$p=$_POST['pass'];
}
}

if($_POST['email'] == NULL){
echo "Xin vui lòng nhập E-Mail<br />";
}else{
$ue=$_POST['email'];
}

if($_POST['address'] == NULL){
echo "Xin vui lòng nhập Address<br />";
}else{
$a=$_POST['address'];
}

if($u & $p & $e & $a){
$sql="update danhsach set users='".$u."', pass='".$p."', email='".$e."', address='".$a."' where id='".$id."'";
    $query=$conn->query($sql);                         //mysql_query($sql);
header("location:list_user.php");
exit();
}
}
$id=$_GET['id'];
$sql="select * from danhsach where id='".$id."'";
$query=$conn->query($sql);
$row=mysqli_fetch_array($query);
?>
<!--<form name="adduser" action="edit.php?id=--><?php //echo $row['id']; ?><!--" method="post">-->
<!--    <fieldset>-->
<!--        <legend>Member Register</legend>-->
<!--        <label>User Name:</label> <input type="text" name="users" value="--><?php //echo $row['users']; ?><!--"  /><br />-->
<!--        <label>Password:</label> <input type="password" name="pass" value="--><?php //echo $row['pass']; ?><!--" /><br />-->
<!--        <label>Re-Password:</label> <input type="password" name="re_pass" value="--><?php //echo $row['pass']; ?><!--"  /><br />-->
<!--        <label>E-Mail:</label> <input type="text" name="email" value="--><?php //echo $row['email']; ?><!--" /><br />-->
<!--        <label>Address :</label> <input type="text" name="address" value="--><?php //echo $row['address']; ?><!--" /><br />-->
<!--        <label></label> <input type="submit" name="ok" value="Update" />-->
<!--    </fieldset>-->
<!--</form>-->

<form name="adduser" action="themthanhvien.php" method="post">
    <fieldset>
        <legend>Member Register</legend>
        <table border="0px">
            <tr>
                <td><label>User Name:</td><td></label> <input type="text" name="users" value="<?php echo $row['users']; ?>"  /><br /></td>
            </tr>
            <tr>
                <td><label>Password:</label></td><td> <input type="password" name="pass" value="<?php echo $row['pass']; ?>"/><br /></td>
            </tr>
            <tr>
                <td><label>Re-Password:</label></td><td> <input type="password" name="re_pass" value="<?php echo $row['pass']; ?>"  /><br /></td>
            </tr>
            <tr>
                <td><label>E-Mail:</label></td><td> <input type="text" name="email" /><br value="<?php echo $row['email']; ?>"/></td>
            </tr>
            <tr>
                <td><label>Address :</label></td><td> <input type="text" name="address"  value="<?php echo $row['email']; ?>"/><br /></td>
            </tr>
            <tr>
                <td> <label></label></td><td> <input type="submit" name="ok" value="Add New" /></td>
            </tr>
        </table>
    </fieldset>
</form>