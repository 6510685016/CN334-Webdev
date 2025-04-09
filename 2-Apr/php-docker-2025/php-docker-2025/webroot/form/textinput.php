<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="formhandler.php" method="post">
    <label for="firstname">First name: </label>
    <input type="text" name="firstname" id="firstname" size="20" maxlength="30" placeholder="ป้อนชื่อของคุณ">
    <br>

    <label for="lastname">Last name: </label>
    <input type="text" name="lastname" id="lastname" size="20" maxlength="30">
    <br>

    <label for="password">Password: </label>
    <input type="password" name="password" id="password"
           size="20" maxlength="20">
    <br>

    Gender:
    <input type="radio" name="gender" id="male" value="male" checked>
    <label for="male">Male</label>
    <input type="radio" name="gender" id="female" value="female">
    <label for="male">Female</label>
    <br>

    Receive news:
    <input type="checkbox" name="receive[]" id="news" value="news" checked>
    <label for="news">News</label>
    <input type="checkbox" name="receive[]" id="postal" value="postal">
    <label for="postal">Postal</label>
    <br>

    Car:
    <select name="cars[]" id="cars" size="3" multiple>
        <option value="volvo" selected>Volvo</option>
        <option value="saab">Saab</option>
        <option value="mercedes">Mercedes</option>
    </select>
    <br>

    Address:
    <textarea name="address" id="address" cols="30" rows="10"></textarea>

    <input type="hidden" name="form_id" value="1">
    <input type="submit">
    <input type="reset">
</form>


</body>
</html>