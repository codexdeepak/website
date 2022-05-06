<?php
if (isset($_POST['submit'])) {
    $info = getimagesize($_FILES['image']['tmp_name']);
    $img = '';
    print_r($info);
    if (isset($info['mime'])) {
        if ($info['mime'] == "image/jpeg") {
            $img = imagecreatefromjpeg($_FILES['image']['tmp_name']);
        } elseif ($info['mime'] == "image/png") {
            $img = imagecreatefrompng($_FILES['image']['tmp_name']);
        } else {
            echo "Only select jpg or png image";
        }
        if (isset($img)) {
            $output_image = time() . '.jpg';
            imagejpeg($img, $output_image, 40);
            echo "Processing done";
           // print_r($output_image);
             echo "<a href=".$output_image." download> click here to download</a>";
           //  echo "<img src=".$output_image.">";
        }
    }

}
    else
    {
        echo "Only select jpg or png image";
}
?>


<!DOCTYPE html>
<html>
<link href="tool.css" rel="stylesheet" type="text/css">
<title>**IMG COMRESSOR** </title>
<body>
<div class="deepak1">
    <div class="topnav">
        <h1 class="logo"><b>**IMG COMPRESSER**</b></h1>
        <a class="active" href="index.html"><b>*Home*</b></a>
        <a>
            <div class="dropdown1">
                <button aria-expanded="false" class="active" class="dropdownMenu3"
                        data-bs-toggle="dropdown" type="button">
                    <b>Compressor</b>
                </button>
                <ul aria-labelledby="dropdownMenu2" class="dropdown-menu">
                    <table>
                        <tr>
                            <td>
                                <li>
                                    <a class="active" href="tool.php">
                                        <button class="Dropdown-item" type="button">Image compressor</button>
                                    </a>
                                </li>
                            </td>
                        </tr>
                    </table>
                </ul>
            </div>
        </a>
        <a>
            <div class="dropdown">
                <button aria-expanded="false" class="active" class="dropdownMenu3"
                        data-bs-toggle="dropdown" type="button">
                    <b>*Converter*</b>
                </button>
                <ul aria-labelledby="dropdownMenu2" class="dropdown-menu">
                    <table>
                        <tr>
                            <td>
                                <li>
                                    <button class="dropdown-item" type="button"><b>Pdf to word</b></button>
                                </li>
                            </td>
                            <td>
                                <li>
                                    <a class="active" href="wordtopdf.html">
                                        <button class="dropdown-item" type="button"><b>Word to Pdf</b></button>
                                    </a>
                                </li>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <li>
                                    <button class="dropdown-item" type="button"><b>Pdf to Powerpoint</b></button>
                                </li>
                            </td>
                            <td>
                                <li>
                                    <button class="dropdown-item" type="button"><b>Excel to pdf</b></button>
                                </li>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <li>
                                    <button class="dropdown-item" type="button"><b>Pdf to excel</b></button>
                                </li>
                            </td>
                            <td>
                                <li>
                                    <button class="dropdown-item" type="button"><b>Powerpoint to pdf</b></button>
                                </li>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <li>
                                    <button class="dropdown-item" type="button"><b>Pdf to jpg</b></button>
                                </li>
                            </td>
                            <td>
                                <li>
                                    <button class="dropdown-item" type="button"><b>Jpg to pdf</b></button>
                                </li>
                            </td>
                        </tr>


                    </table>

                </ul>
            </div>
        </a>
        <a class="active" href="social.html"><b>*SOCIAL MEDIA LINKS*</b></a>
        <a class="active" href="contact.html"><b>*CONTACT US*</b></a>
        <a class="active" href="aboutus.html"><b>*ABOUT US*</b></a>
    </div>
</div>
</body>
</html>
<label class="custom-file-upload">
<form method="post" enctype="multipart/form-data">
    <input type="file" name="image" required/>
    <input type="submit" name="submit"/>
</form>