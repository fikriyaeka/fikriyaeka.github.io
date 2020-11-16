
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">   
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PEWANGI </title> 
    <style>
    body 
    {
        background-image: url(home.png);
        background-repeat: no-repeat;
        background-size: 1250px 700px;
    }
      
    .panel
    {
    
    border-radius: 30px;
    box-shadow: 1px 1px 50px #000;
    border-radius: 20px;
    font-size: 17px !important;
    font-family: "Helvetica Neue" ,Helvetica,Arial,sans-serif;
    background: rgba(3,3,3,.8);
    padding: 10px; 
    background-color: lightcyan;
    width:350px;
    height: 550px;
    margin: auto;
}
label {
    color: black;
    font-size: 16px;
    width: 10px;
    font-weight:bold;
}

.form-group input:focus{
  outline: none;
  box-shadow: 3px 3px 10px #333;
  background: rgba(3,3,3,.18);
}
input{
   
    margin: 7px;
    font-size: 17px;
}
.form-group input{
    
    border: 0px;
    color: black;
    opacity: 1;
    font-size: 18px;
    border-bottom: 2px solid #333;
    background: white;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0);
    box-shadow: inset 0 1px 1px rgba(0,0,0,0);
    border-radius: 4px;
    background-size: 40px;
}

.button button{
    width: 290px;
    height: 30px;
    font-size: 20px;
    font-weight:bold;
    cursor: pointer;
    border: none;
    color: white;
    text-align: center;
    padding: 2px 4px;
    background: darkslategray;
    border-radius: 9px;  
}
.button button:hover{
    color: white;
    background-color: lightslategray ;   


</style>
</head>
<body>
<br /><br />
<div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
        <div class="panel" >
        <img src="LOGO1.png" style="border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; width:160px ; display: block; margin: auto";  ><br>
        <div > 
        <table rules="rows">
        <tr>
                <td width=600px align="center" style="background-color: rgba(3,3,3,.1)">Sign Up </td>
                <td width=600px align="center">Login</td>
        <tr/>
        </table>


       <label style="font-size: 10px;">disini bisa di tuls apa aja</label>

                            </div>
                           
                           
                               <form method ="post" action="signup.php">
<br/>

 <div class="form-group input-group" align="center">
                                       
                                        <label>Email</label><br>
                                        <input type="Email" class="form-control" placeholder="" required autofocus autocomplete="off" name="nama"><br>
                                        <label>Full Name</label><br>
                                        <input type="text" class="form-control" placeholder="nama" required autofocus autocomplete="off" name="nama"><br>
                                        <label>Username</label><br>
                                        <input type="text" class="form-control" placeholder="nama" required autofocus autocomplete="off" name="nama"><br>
                                        <label>Password</label><br>
                                        <input type="Password" class="form-control" placeholder="nama" required autofocus autocomplete="off" name="nama"><br>
                                        <label>Verify Password</label><br>
                                        <input type="Password" class="form-control" placeholder="nama" required autofocus autocomplete="off" name="nama">
               
               
               
                        <div class="form-group">
                            <div class="button text-center">
                                <button type="submit" class="btn btn-default navbar-btn" name="submit" value="sign in" onclick="submit()">SIGN UP        
                               
                            </div>
                        </div>

                                    </form>
                            

</body>
</html>
