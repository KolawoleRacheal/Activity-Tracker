
<?php
 session_start();
    require_once "partials/nav.php";
    require_once "../classes/User.php";

    $user = new User;
    $users = $user->fetch_user();

    // echo "<pre>";
    // print_r($users);
    // echo "</pre>";
    
?>
<?php 

                            if(isset($_SESSION['admin_feedback'])){
                                echo "<div class='alert alert-success'>".$_SESSION['admin_feedback']."</div>";
                                unset($_SESSION['admin_feedback']);
                            }
                            
                            ?> 
                              <main class="content px-3 py-4">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h3 class="fw-bold fs-4 mb-3" style="text-align: center;">Admin Dashboard</h3>
                        <h3 class="fw-bold fs-4 my-3" style="text-align: center;">Users Goals and Progress
                        </h3>
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-striped">
                                      <thead>
                                            <tr>
                                               <th scope="col">S/N</th>
                                               <th scope="col">fname</th>
                                               <th scope="col">lname</th>
                                               <th scope="col">DOB</th>
                                               <th scope="col"> Email</th>
                                               <th scope="col">Gender</th>
                                               <th scope="col">Action</th>
                                            
                                              </tr>
                                      </thead>
                                    <tbody>
                                    <?php 
                                            if(is_array($users)){
                                             $counter=1;
                                            foreach($users as $user){
                                             ?>
                                               <tr>
                                                 <th scope="row"> <?php echo $counter; ?> </th>
                                                 <td> <?php echo $user['user_fname']; ?> </td>
                                                 <td> <?php echo $user['user_lname']; ?> </td>
                                                 <td> <?php echo $user['user_dob']; ?></td>
                                                 <td> <?php echo $user['user_email']; ?></td>
                                                 <td> <?php echo $user['user_gender']; ?></td>
                                                 <td><a onclick="return confirm('Are you sure you want to delete user?')" href="delete_user.php?id=<?php echo $user['user_id']; ?>" class="btn btn-sm btn-danger"> Delete </a> 
                                                 <a href="" class="btn btn-sm btn-success">Edit</a></td>
                                                 
                                                 
                                              </tr>

                                         <?php 
                                       $counter++;
                                             } 
                                        }
                                      ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
                        <?php   require_once "partials/footer.php"; ?>
      