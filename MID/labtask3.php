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
    
            
        <title>Student</title>
        <h1> This Is AIUB Student System</h1>

        <script>
            alert("Welcome to AIUB Bank Management System");
            console.log("Welcome to AIUB Bank Management System");

            document.write("Welcome to AIUB Bank Management System");
            document.body.style.backgroundColor = "lightblue";
            document.body.style.color = "black";
            document.body.style.fontFamily = "'Arial', sans-serif";
            document.body.style.textAlign = "center";





            //////////////////////////  txt file   picture

                 console.log(" Students Information");
                var name = "Arif";
                var age = 23;
                var isStudent = true;
                console.log("Name:", name);
                console.log("Age:", age);
                console.log("Is Student?", isStudent);
                console.log("\n IF / ELSE");

              if (age >= 18) {
                console.log(name + " is an adult.");
                 } else {
                  console.log(name + " is a minor.");
                 }

                           


                console.log("\n Mathmetical Operations");
                var a = 10;
                var b = 3;
                console.log("Addition:", a + b);
                console.log("Subtraction:", a - b);
                console.log("Multiplication:", a * b);
                console.log("Division:", a / b);
                console.log("Remainder:", a % b);
              
            
                 console.log("\n LOOPS");
                for (var i = 1; i <= 5; i++) {
               console.log("Loop Count is: " + i);
                }



                 console.log("\n FUNCTIONS");

    function greetUser(userName) {
      console.log("Hello, " + userName + "!");
    }

    greetUser("Arif");
    greetUser("AIUB Student");



    function showMessage() {
      alert("Information was saved successfully!");
      console.log("Button was clicked.");
      
    }

     function showMessage2() {

            let msg= "Information was saved successfully!";
            msg += "\nName: " + name;
            msg += "\nAge: " + age; 
            msg += "\nIs Student? " + isStudent;
            msg += "\nStudent is :" + age;
            alert(msg);


      //console.log("Button was clicked.");
      
    }


        </script>
        
        
        <div>
            <table>
              


            

           


            <br> <br>


<p style="center">Information given throw console</p>
              <button onclick="showMessage()">Submit</button>

            <button style="clicked" onclick="showMessage2()"> showinfo</button>
 <h5>Thank you for registering with us!</h5>
 
            </table>
        </div>
        




    </body>
</html>