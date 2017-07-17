<?php
/**
 * Created by PhpStorm.
 * User: tamtv
 * Date: 7/17/17
 * Time: 8:40 AM
 */
?>

<div id="left">
    <fieldset>
        <legend>Thông tin sinh viên</legend>
        <table width="600px" border="1px">
            <tr>
                <td style="font-weight: bold;">Mã Sinh Viên</td>
                <td style="font-weight: bold;">Tên Sinh Viên</td>
                <td style="font-weight: bold;">Giới Tính</td>
                <td style="font-weight: bold;">Lớp</td>
                <td style="font-weight: bold;">Địa Chỉ</td>
                <td style="font-weight: bold;">Sửa</td>
                <td style="font-weight: bold;">Xóa</td>
            </tr>
<!--            --><?php
//                $sql = mysqli_query(" SELECT * FROM sinh_vien");
//                if (mysqli_num_rows($sql)>0) {
//                    while ($row = mysqli_fetch_array($sql)) {
//                        $masv = $row['masv'];
//                        $tensv = $row['tensv'];
//                        $gioitinh = $row['gioitinhsv'];
//                        $diachi = $row['diachisv'];
//
//                        echo "<tr>
//                        <td>$masv</td>
//                          <td>$tensv</td>
//                          <td>$gioitinh</td>
//                          <td>$diachi</td>
//                          <td><a href=\"index.php?page=suasv\">Sửa</a>
//                          <td><a href=\"index.php?page=xoasv\">Xóa</a>
//                      </tr>";
//                    }
//                }
//
//            ?>
            <tr>
                <td>01</td>
                <td>Nguyễn Văn Thái</td>
                <td>Nam</td>
                <td>12A1</td>
                <td>Hà Nội</td>
                <td><a href="index.php?page=suasv">Sửa</a> </td>
                <td><a href="index.php?page=xoasv">Xóa</a> </td>
            </tr>
        </table>
    </fieldset>
</div>
