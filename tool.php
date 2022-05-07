<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- CSS only -->
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" rel="stylesheet">

    <!-- JavaScript Bundle with Popper -->
    <script crossorigin="anonymous" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="tool.css" rel="stylesheet" type="text/css">

    <title>Social media</title>
</head>
<body>
<div class="com">
    <h2> IMAGE COMPRESSOR</h2>
    <table style="margin-left: 15%; font-size: xx-large">
        <tr>
            <div >
                <th ><a href="index.html" style="text-decoration: none"> Home</a></th>
            </div>
        </tr>
    </table>
</div>




<div class="comp">
    <div class="pp">
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
                imagejpeg($img, $output_image, 60);
                echo "Processing done";
                echo "<a href=".$output_image." download> click here to download</a>";
            }
        }

    }
    else
    {
        echo "Only select jpg or png image";
    }
    ?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="image" required/>
    <input type="submit" name="submit"/>
</form>
    </div>
</div>

</body>
</html>
