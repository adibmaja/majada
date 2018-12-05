  <!doctype html>

<html>
    <head> 
        <meta charset="UTF-8">
        <title> Mark-sheet </title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
       <div class="container">
            <div class="row header">
                <header style="text-align:center">
                    <div class="col-md-2"><img src="images/logo.png" alt="BCC Logo" style="padding-top:30px;"></div>
                    <div class="col-md-8">
                        <h3>Bangladesh Computer Council  </h3>
                        <h4>Laravel CRUD Insert </h4>
                    </div>
                     <div class="col-md-2">&nbsp;</div>
                </header>
            </div>
            <div class="row">
                <div class="col-md-12 mainMenu">&nbsp;</div>
            </div>
            <div id="php_code">
                
             
            </div>
            <div class="row mainbody">
                <section>
                    <div>
                        <form action="" method="post" enctype="multipart/form-data">
                       
                            <div class="div margin10">
                             <div class="margin10">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                       <h3 align="center">Insert Student-details </h3>
                                   </div>
                                   <div class="panel-body">
                                        <div class="row form-group">
                                            <label for="name" class="col-md-2 col-form-label">Student Name:</label>
                                        
                                             <div class="col-md-10">
                                                <input type="text"  class="form-control" id="class" name="student_name">  
                                                 
                                            </div>
                                        </div>
                                    <div class="row form-group">
                                            <label for="name" class="col-md-2 col-form-label">Student Email:</label>
                                        
                                             <div class="col-md-10">
                                                <input type="text"  class="form-control" id="group" name="student_email">  
                                                 
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label for="name" class="col-md-2 col-form-label">Student Password:</label>
                                        
                                             <div class="col-md-10">
                                                <input type="password"  class="form-control" id="roll" name="password">  
                                                 
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                                <label for="password" class="col-sm-2 col-form-label">Retype Password:</label>
                                              <div class="col-sm-10">
                                                   <input type="password"  class="form-control" id="name" name="name" >
                                                   
                                              </div>
                                         </div>
                                            <div class="form-group row">
                                              <label for="bangla" class="col-sm-2 col-form-label">Date of birth:</label>
                                               <div class="col-sm-10">
                                                <input type="text"  class="form-control" id="bangla" name="dob">
                                                         
                                                    </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="english" class="col-sm-2 col-form-label">Phone:</label>
                                               <div class="col-sm-10">
                                                      <input type="number"  class="form-control" id="phone" name="phone">
                                                         
                                                    </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="bangla" class="col-sm-2 col-form-label">Image:</label>
                                                   <div class="col-sm-10">
                                                      <input type="file"  class="form-control" id="ict" name="image">
                                                         
                                                    </div>
                                              </div>
                                              <div class="form-group row">
                                              <label for="bangla" class="col-sm-2 col-form-label">Male</label>
                                                   <div class="col-sm-10">
                                                      <input type="radio"  class="form-control" id="civics" name="gender" value="0">
                                                         
                                                    </div>
                                              </div>
                                              <div class="form-group row">
                                              <label for="bangla" class="col-sm-2 col-form-label">Female History</label>
                                                   <div class="col-sm-10">
                                                      <input type="radio"  class="form-control" id="history" name="gender" value="0">
                                                         
                                                    </div>
                                              </div>
                                              <div class="form-group row">
                                              <label for="bangla" class="col-sm-2 col-form-label">Select a group</label>
                                                   <div class="col-sm-10">
                                                       <select name="group">
                                                            <option value="">Select a group</option>
                                                            <option value="1">Science</option>
                                                            <option value="2">Arts</option>
                                                       </select><br><br>
                                                                                                         
                                                    </div>
                                              </div>
                                               <div class="form-group row">
                                                   <label class="col-sm-12 col-form-label"> <u>Subjects </u> </label>
                                               </div>
                                               <div class="form-group row">
                                              <label for="bangla" class="col-sm-2 col-form-label"> english :</label>
                                                   <div class="col-sm-10">
                                                      <input type="checkbox" name="subject[]" value="english">
                                                         
                                                    </div>
                                              </div>
                                               <div class="form-group row">
                                              <label for="bangla" class="col-sm-2 col-form-label">math :</label>
                                                   <div class="col-sm-10">
                                                      <input type="checkbox" name="subject[]" value="math">
                                                    </div>
                                              </div>

                                             <div class="form-group row">
                                                   <label for="photo" class="col-sm-2 col-form-label"> bangla : </label>
                                                   <div class="col-sm-5">
                                                     <input type="checkbox" name="subject[]" value="bangla">
                                                         
                                                   </div>
                                              </div>
                                               <div class="form-group row">
                                                   <label for="photo" class="col-sm-2 col-form-label"> sports : </label>
                                                   <div class="col-sm-5">
                                                     <input type="checkbox" name="subject[]" value="sports">
                                                         
                                                   </div>
                                              </div>
                                         
                                          <div class="form-group">
                                               <div class="col-sm-offset-4 col-sm-8">
                                                    <button type="submit" class="btn btn-primary" name="submit">
                                                    <i class="glyphicon glyphicon-plus">
                                                    </i> Submit</button>

                                                </div>
                                           </div>
                                        </div>
                                   </div>
                                </div>
                             </div>
                        
                        </form>
                            
                        
                        
                    </div>
                </section>
            </div>
            <div class="footer row">
                <footer>
                    <div class="col-md-12"><h2>Bangladesh Computer Council</h2> 
                                              <h4> ICT Tower, Agargaon<br/>
                                               Dhaka-1207.</h4>
                                               <p>&copy; Copyright @ <a href="#">Bangladesh Computer Council</a></p>
                    
                    </div>
                     
                </footer>
             </div>
        </div>
    </body>
</html>