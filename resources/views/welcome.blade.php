<!DOCTYPE html>
<!-- saved from url=(0047)file:///C:/Users/adfc/Desktop/ako/loginfom.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <title>Login</title>
    <style>
      body {
        font-family:sans-serif;
        background-image: url("https://images.unsplash.com/photo-1497864149936-d3163f0c0f4b?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8bG9naW58ZW58MHx8MHx8fDA%3D");
      }
      form {
        background-color: 000000;
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
        margin-top: 100px;
      }
      h1 {
        text-align: center;
        color: #fff;
        margin-bottom: 30px;
      }
      label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: #fff;
      }
      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: none;
        margin-bottom: 20px;
        box-sizing: border-box;
        border: 1px solid #ccc;
      }
      input[type="submit"] {
        background-color: #FF0000;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 20px;
      }
      input[type="submit"]:hover {
        background-color:  #088F8F;
      }
      input[type="button"]{
        background-color:  #FF0000;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 20px;
        float: right;
      }
      input[type="button"]:hover {
         background-color: #088F8F;
       }
       img{
        width: 120%;
        background-repeat: no-repeat;
       }
    </style>
  </head>
  <body>
    <form>
      <h1>Login</h1>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" placeholder="Enter your username">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter your password">
      <input type="submit" value="Login">
      <input type="button" value="Sign up">
    </form>
  
</body></html>