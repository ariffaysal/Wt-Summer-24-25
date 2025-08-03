<!doctype html>

<html>

<head>
    <style>
        div{
            text-align: center;      
            height: 950px;
            width: 60%;
            background-color: lightblue;
            opacity: 0.9;
            border: 2px solid black;
        }
        h2{
            color: red;
            font-family: 'Arial', sans-serif;
            text-align: left;
            font-size: 25px;
            margin-top: 10px;
        }
        


    </style>
    
</head>
<body>
    <div>
        <form onsubmit=" return handlesubmit()">

        <h2> Donor Information </h2>

        <center>
            <table>
                <tr>
                    <td> First Name: </td><td> <input type="text" id="firstname"></td>
                </tr>
                <tr>
                    <td> Last Name:</td><td> <input type="text" id="lastname"></td>
                </tr>

                <tr>
                    <td> company: </td><td> <input type="text" id="company"></td>
                </tr>

                <tr> 
                    <td> Address 1: </td><td> <input type="text" id="address1"></td>
                </tr>

                <tr>
                    <td> Address 2:</td><td> <input type="text" id="address2"></td>
                </tr>

                <tr>
                    <td> City:</td><td> <input type="text" id="city"></td>
                </tr>

                <tr>
                    <td> State: </td>
                        <td>
                            <select>
                                <option value="dhk">Dhaka</option>
                                <option value="ctg">Chittagang</option>
                                <option value="rjh">Rajshahi</option>
                                <option value="kh">Khulna</option>
                                <option value="syl">Sylhet</option>
                            </select>

                        </td>

                    </td>
                </tr>

                <tr>
                    <td> Zipcode:</td> <td> <input type="text"></td>
                </tr>

                <tr>
                    <td>Country: </td>
                    <td>
                            <select>
                                <option value="bd">Bangladesh</option>
                                <option value="in">India</option>
                                <option value="pk">Pakistan</option>
                                <option value="us">USA</option>
                                <option value="uk">UK</option>
                            </select>
                    
                     </td>
                </tr>

                <tr>
                    <td> Phone: </td> <td><input type="text"></td>
                </tr>   
                <tr>
                    <td> Email:</td> <td><input type="email"></td>
                </tr>


                <tr>
                    <td> Amount:</td>
                    <td>
                     <input type="radio" name="des" > None
                     <input type="radio" name="des">$50
                    <input type="radio" name="des">$100
                     <input type="radio" name="des">$200
                     </td>
                </tr>


                <tr>
                    
                <td> Other Amount: </td><td> <input type="text" id="otheramount"></td>
                </tr>

                <tr>
                    <td>To donation clearity: </td> <td> <input type="checkbox"> I am interested</></td>
                </tr>

                <tr>
                    <td> Monthly Credit cardL: </td> <td> <input type="text"> For: <input type="text">months</td>
                </tr>


            </table>
        </center>

        <center>

        <h2> Memorial Donation Information:</h2>
        <table>
                <tr>
                    <td> Name of the person to be honored: </td> <td> <input type="text" id="honorname"></td>
                </tr>
                <tr>
                    <td> Relationship to the person: </td> <td><input type="text" id="relationship"></td>
                </tr>

                <tr>
                    <td> Occasion: </td>  <td><input type="text" id="occasion"></td>
                </tr>

                <tr>
                    <td> Message:</td> <td> <textarea id="message"></textarea></td>
                </tr>


                <tr>
                    <td>Religion:</td>
                    <td>
                        <select>
                            <option value="islam" id="islam">Islam</option>
                            <option value="hindu" id="hindu">Hindu</option>
                            <option value="christian" id="christian">Christian</option>
                            <option value="buddhist" id="buddhist">Buddhist</option>
                            <option value="Other" id="others">Other</option>
                        </select>
                        </td>
                </tr>


            </table>
        

        </table>
        </center>


        <center>


        <table>

        <h2> Additional Information:</h2>
        
    <tr>
        <td><input type="checkbox" id="agreement1"> I would like to gift.....</td>
    </tr>

    <tr>
        <td><input type="checkbox" id="agreement2"> I would like to receive updates on the impact of my donation.</td>
    </tr>

    <tr>
        <td><input type="checkbox" id="agreement3"> I would like to remain anonymous.</td>
    </tr>


    <tr>
        <td>comments: </td>
       <td>  <textarea name="message" id="comments"></textarea> </td>
    </tr>




    <tr>
        <td><input type="checkbox"> Read all terms and conditions</td>
    </tr>

<button type="submit"> Submit </button>
</form>


    <script>

        



    </script>

        


        </table>
        </center>

    </div>
    
</body>

</html>