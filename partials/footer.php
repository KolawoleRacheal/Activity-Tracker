
<footer class="bg-primary">
        <section>
            <div class="row p-3">
                <div class="col-md-4 p-3">
                  <h4 class="text-white mb-3">What we do</h4>
                    <p>
                        Rayfit is a fitness app that uses advanced tech to track your progress,
                         give personalized insights, and keep you motivated on your health journey.

                    </p>
                </div>
                <div class="col-md-4 p-3">
                  <h4 class="text-white mb-3" style="padding-left: 30px;">Company</h4>
                  <ul class="navbar-nav" style="padding-left: 30px;">
                      <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                     </ul>
                  

                </div>
                <div class="col-lg-3 col-md-4 p-3">
                  <h4 class="text-white mb-3">Newsletter</h4>
                  <p>Kindly subscribe to our Newsletter.</p>
                  <div class="position-relative mx-auto" style="max-width: 400px;">
                      <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                      <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                  </div>
              </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1 style="text-align:center;" ><i class='bx bxl-facebook-circle'></i><i class='bx bxl-instagram'>
                    </i><i class='bx bxl-twitter'></i><i class='bx bxl-whatsapp' ></i></h1>
                    <h6 style="text-align: center;"> Rayfit &copy;2024 All right reserved.</h6>
                </div>
            </div>  
        </section>
    </footer>
</div>
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#activity">
  Launch static backdrop modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="activity" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="activityLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="activityLabel">Track your activities here at Rayfit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="mb-3">
            <label for="status">Status</label>
            <input type="text" name="status" id="status" class="form-control">
          </div>
          <div class="mb-3 form-control">
            <select name="activities" id="activities">
              <option value="Activity">Activity</option>
              <option value="exercise">Exercise</option>
              <option value="water">Water</option>
              <option value="sleep">Sleep</option>
              <option value="meal">Meal</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="duration" class="form-label">Duration (in minutes):</label>
            <input type="number" id="duration" name="duration" class="form-control">
          </div>                          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Track</button>
        <button type="button" class="btn btn-primary">  <a href="index.php"></a>Back</button>
      </div>
    </div>
  </div>
</div>
  
 

<!-- Bootstrap JavaScript -->
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="jquery.js"></script>
<script src="script.js"></script>


</body>
</html>
