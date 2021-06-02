

    <!DOCTYPE HTML>
        <html>
            <head>
                <meta name="viewport", content="width=device-width, initial-scale=1.0">
                <title>Create new account</title>
                <link rel="stylesheet" href="CSS.css">
                <style>
                    html{
                        background-color: rgba(63, 191, 255, .3);
                    }
                   body{
                        background-color: white;
                        border-radius: 50px;
                        padding: 5%;
                    }
                    form{
                       
                        
                        background-color: midnightblue;
                        border-radius: 30px;
                        padding: 3% 5%;
                        margin: 0 auto;
                        box-shadow: 10px 10px 10px teal;
                    }
                    label{
                        background-color: darkgoldenrod;
                    }
                    input, select{
                        width: 250px;
                        height: 30px;
                        margin-bottom: .5em;
                    
                        border-radius: 5px;
                    }
                    button{
                        width: 200px;
                        height: 40px;
                        margin-top: .2em;
                        margin-bottom: .2em;
                        border-radius: 5px;
                        margin-left:18%;
                        background-color: thistle;
                    }
                    button:hover{
                        background-color:green;
                        transition:.4s ease;
                    }
                    .script{
                        width: 300px;
                        font-family: Arial, Helvetica, sans-serif;
                        color: darkgray;
                    }
                    .outer{
                        display: block;
                    }
                    .inner{
                        display: flex;
                    }
                
                </style>
            </head>
            <body>
                <div class="container">
                    <form method="POST" action="server.php" autocomplete="off">
                            <div class="outer">
                                
                                <div class="inner">
                                    <div class="script">College Roll ID:</div>                       
                                    <input type="number" name="roll" placeholder="18124" required>
                                </div> <br/><br/>
                                <div class="inner">
                                    <div class="script">Branch you completed your degree in:</div>
                                    <select name="branch" required>
                                    <option value="CS">Computer Science</option>
                                    <option value="EC">Electronics and Communication</option>
                                    <option value="IT">Information Technology</option>
                                    </select>
                                </div> <br/><br/>
                                <div class="inner">
                                    <div class="script">Current Job Status:</div>                 
                                    <select name="jfield" required>
                                    <option value="MNC employee">MNC</option>
                                    <option value="Government employee">Govermnet Sector</option>
                                    <option value="Freelancer">Freelancing</option>
                                    <option value="Jobless">Work free</option>
                                    </select>
                                </div> <br/><br/>
        
              
                                <div class="inner">
                                    <div class="script">Company(If currently employed):</div> 
                                    <input type="text" name="company" placeholder="Google/Adobe">
                                </div>
                                <br/><br/><br/>
                                <button type="submit" name="submit">Submit</button>
                            </div>
                    </form>
                </div>
        
                   
            </body>
        </html>

