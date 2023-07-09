<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4.3</title>
    <style>
        /* Add any desired styling for the footer */
        footer {
        background-color: #9148e4;
        padding: 20px;
        text-align: center;
        }
        </style>
</head>
<h3><a href="Index.html">Home</a></h3>
<body>
    <h1>4.3เปลี่ยนตัวอักษรเป็นพิมพ์ใหญ่ทั้งหมด และ เปลี่ยนตัวอักษรเป็นพิมพ์เล็กทั้งหมด</h1>
<?PHP
$Text="NitTaya SansriChai";
?>
<h3>
Main Text : <?PHP echo $Text;?>
</h3>
<h3>
    Upper Text:<?PHP echo strtoupper($Text);?>
</h3>

<h3>
    Lower Text:<?PHP echo strtolower($Text);?>
</h3>
<h3><a href="Index.html">Home</a></h3>
</body>
<footer>Copyright&copy by Thonburi University</footer>
</html>