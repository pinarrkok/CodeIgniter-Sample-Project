<!doctype html>
<html lang="tr">

<head>
    <title>Form</title>
</head>

<body>

<form action="<?php echo base_url(); ?>formIslem/kaydet" method="post">
    <input type="text" name="name">
    <input type="email" name="email">
    <button type="submit">Gönder</button>
</form>
</body>
</html>    