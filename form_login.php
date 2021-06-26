<!DOCTYPE html>
<html lang="en">
<head>
    <title>home</title>
    <link
href="https://fonts.googleapis.com/css?family=Raleway"
rel="stylesheet">
    <style>#card {
        background: lemonchiffon;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 400px;
        margin: 6rem auto 8.1rem auto;
        width: 500px;
        text-align: left;    
    }
    body{
        background:purple;
    }
    #card-content{
        padding: 10px 10px;
    }
    #card-title{
        text-align: center;    
        font-family: "Raleway Thin", sans-serif;
        letter-spacing: 10px;
        padding-bottom: 10px;
        padding-top: 13px;
    }
    a{
        text-decoration: none;
    }
    label{
        font-family: "Raleway", sans-serif;
        font-size: 11pt;
    }
    .form{
        align-items: left;
        display: flex;
        flex-direction: column;
    }
    .form-border{
        background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
        height: 1px;
        width: 100%;
    }
    .form-content{
        background: #fbfbfb;
        border: none;
        outline: none;
        padding-top: 14px;
    }
    #signup {
    color: #2dbd6e;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 16px;
    text-align: center;
}
#submit-btn {
    background: -webkit-linear-gradient(top, #959592, #000000);
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #24c64f;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 25px;
    transition: 0.25s;
    width: 153px;
}
#submit-btn:hover {
    box-shadow: 0px 1px 18px #24c64f;
}
    </style>
</head>
<body>
    <div id="card">
    <div id= "card-content"><div id="card-tittle">
    <center><h2>LOGIN</h2></center><div class="underline-tittle"></div>
    </div>
    <form action="<?php echo base_url()."index.php/Welcome/aksi_login";?>" method="POST">
        <br>
        username: <input type="text" name="username"><br><br>
        password: <input type="text" name="password"><br><br>
        <input type="submit"><br>
        <input type="reset">
    </form>
    <a href="<?php echo base_url()."index.php/Welcome/daftar";?>">Daftar</a>
</body>
</html>