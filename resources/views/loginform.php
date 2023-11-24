<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <style>
      body {
        font-family:sans-serif;
        background-image: url("https://png.pngtree.com/element_our/png_detail/20181230/vector-gradient-full-color-design-abstract-blur-wallpaper-page-web-illustration-png_302854.jpg");
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
  </body>
</html>