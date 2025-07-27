<!doctype html>

<head>
<style>

    h1{     
        color:"black"; 
        font-family: 'Arial', sans-serif;  
        font-size: 30px; 
        text-align: center;
        margin-top: 20px;


       
        

    }

    h2{
        color: "black";
        font-family: 'Arial', sans-serif;
        font-size: 25px;
        text-align: center;
        margin-top: 10px;
     
    }

    p{
        color: "black";
        font-family: 'Arial', sans-serif;
        font-size: 15px;
        text-align: center;
        margin-top: 5px;
        font-style: italic;
     
        
    }

    div{
        height: 400px;
        width: 40%;
        background-color: lightblue;
        opacity: 0.9;
        border= "2px solid black";
        
    }


    body{
        background-color: skyblue;
        front-family: 'Arial', sans-serif;
        margin: 0;
    
    }
</style>
</head>


<html>
    <body>
    
            
        <title>Bank Management </title>
        <h1> This Is AIUB Bank Management System</h1>
        <h2>Quick Registration form </h2>
        <p>where leaders are created</p>

        <script>
            alert("Welcome to AIUB Bank Management System");
            console.log("Welcome to AIUB Bank Management System");
            document.write("Welcome to AIUB Bank Management System");
            document.body.style.backgroundColor = "lightblue";
            document.body.style.color = "black";
            document.body.style.fontFamily = "'Arial', sans-serif";
            document.body.style.textAlign = "center";
          
            

        </script>
        
        
        <div>
            <table>
            <tr>
                <td>Enter Your Name:</td> <td> <input type="text" name="" id=""></td>
            </tr>

            <tr>
                <td> DOB:</td> <td> <input type="date"></td>
            </tr>

            <tr>
                <td>Gender:</td> 
                 <td><input type="radio"name ="des"> MALE</td>
                 <td><input type="radio" name ="des">FEMALE</td>
                 <td><input type="radio" name="des" >OTHERS</td>
            </tr>

            <tr>
                <td> Marital status:</td>
                   <td><input type="radio" name="des" >married</td>
                   <td><input type="radio" name="des">notmarried</td>
            </tr>


            <tr>
                <td> Account type:</td>
                   <td><input type="radio"  name="des">credit</td> 
                   <td><input type="radio" name="des">debit</td>
            </tr>

            <tr>
                <td>Enter deposit ammount:</td> <td><input type="text"></td>
            </tr>

            <tr>
                <td>Mobile number:</td><td><input type="text"></td>
            </tr>

            <tr>
                <td>Email:</td><td><input type="email"></td>
            </tr>
            <tr>
                <td>Address:</td><td><input type="text"></td>
            </tr>
            <tr>
                <td>Enter password:</td><td><input type="password"></td>
            </tr>
            <tr>
                <td>Confirm password:</td><td><input type="password"></td>
            </tr>
            


            <tr>
                <td><input type="submit" value="Submit"></td>
                <td><input type="reset" value="Reset"></td>
            </tr>


            </table>
        </div>
        




    </body>
</html>