<!DOCTYPE html>
<html>
    <head> 
        <style>
            table{
                background-color: rgb(3, 126, 241);
                margin-left: auto;
                margin-right: auto;
            }
            
        </style>
        <title> Fresher's World! </title>
    </head>
    <body>
        <marquee onmouseover="this.stop()" onmouseout="this.start()" > <h2 style="color: red;"> WELCOME TO FRESHER'S WORLD </h2> </marquee>
        <table> <caption> <h3> Registration Form </h3> </caption>
            <form method="POST" action="action.php" >
                <tr>
                    <td> Name </td>
                    <td><input type="text" name="name"> </td>
                </tr>
                <tr>
                    <td> Age  </td>
                    <td> <select name="age" id="age>">
                        <?php
                        for($i=18;$i<=25;$i++){
                            echo "<option>".$i."</option>";
                        }
                        ?>
                    </select></td>
                </tr>
                <tr>
                    <td> Password </td>
                    <td> <input type="password"> </td>
                </tr>
                <tr>
                    <td> Re-Enter Password </td>
                    <td> <input type="password"> </td>
                </tr>
                <tr>
                    <td>Security Question</td>
                    <td> <input type="radio" name="sec" value="Pet's name"> What is your pet's name? <br>
                        <input type="radio" name="sec" value="Best Friend"> Who is your best friend? <br>
                        <input type="radio" name="sec" value="Favourite Color" > What's your favourite color? <br>
                        <input type="radio" name="sec" value="Favourite Teacher"> Who is your favourite teacher? <br>

                        </td>
                </tr>
                <tr>  
                    <td>Answer of your security question</td>
                    <td> <input type="text"> </td>

                </tr>
                <tr>
                    <td>E-mail</td>
                    <td> <input type="email"  name="mail"> </td>
                </tr>
                <tr>
                    <td>Languages known</td>
                    <td>
                       <input type="checkbox" name="lang[]" value="Malayalam">  Malayalam 
                         <input type="checkbox" name="lang[]" value="English" > English
                        <input type="checkbox" name="lang[]" value="HIndi"> Hindi 
                        
                    </td>
                </tr>
                <tr>
                    <td> Phone No.</td>
                    <td>
                        <table border="1px solid black">
                            <tr>
                                <th> Home </th>
                                <th> Office</th>
                             </tr>
                             <tr>
                                <td> <input type="number" name="num"> </td>
                                <td> <input type="number"> </td>
                             </tr>
                            
   
                            
                        </table>
                    </td>
                </tr>
                <tr>
                    <td> Upload CV</td>
                    <td> <input type="file"> </td>
                </tr>
                <tr>
                    <td> <input type="reset"> </td>
                    <td> <input type="submit"> </td>
                </tr>
            </form>
        </table>
    </body>
    

</html>
