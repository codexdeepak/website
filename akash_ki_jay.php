<!DOCTYPE html>
<html>
<head>
    <title>Akash ki Assignment</title>
</head>
<body>

<form action="akash_ki_jay.php" method="post">
    <table>
        <tr>
            <td><label>UserName</label></td>
            <td><input type="text" name="name" required="required"></td>
            <td ><?php
                if (isset($_POST['sub'])){
                    $str = $_POST['name'];
                    echo "<td style='height: 5px;width: 200px;border: 2px solid black'>$str</td>";
                }

                ?> </td>

            <td><button type="submit" name="sub">SUBMIT</button></td>
        </tr>
    </table>


</form>

</body>
</html>

