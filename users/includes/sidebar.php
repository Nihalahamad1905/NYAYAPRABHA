<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion"><br>
              
              	  <p><a href="profile.html"><img src="https://w7.pngwing.com/pngs/4/736/png-transparent-female-avatar-girl-face-woman-user-flat-classy-users-icon.png" class="img-circle" width="70" style="margin-left:70px; margin-bottom:10px"></a></p>
                   <?php $query=mysqli_query($bd, "select fullName from users where userEmail='".$_SESSION['login']."'");
 while($row=mysqli_fetch_array($query)) 
 {
 ?> 
              	  <h5 class="centered"><?php echo htmlentities($row['fullName']);?></h5>
                  <?php } ?>
              	  	
                  <li class="mt">
                      <a href="dashboard.php">
                      <i class="fa fa-th-large" aria-hidden="true"></i>
                          <span>Dashboard</span>
                      </a>
 </li>
                  <li class="sub-menu">
                      <a href="profile.php" >
                      <i class="fa fa-user" aria-hidden="true"></i>
                          <span>Profile</span>
                      </a>
                    </li>
                  <li class="sub-menu">
                      <a href="change-password.php" >
                      <i class="fa fa-key" aria-hidden="true"></i>
                          <span>Change Passward</span>
                      </a>
                    </li>
                  <li class="sub-menu">
                      <a href="register-complaint.php" >
                      <i class="fa fa-pencil-square" aria-hidden="true"></i>
                          <span>Lodge Complaint</span>
                      </a>
                    </li>
                  
                  <li class="sub-menu">
                      <a href="complaint-history.php" >
                      <i class="fa fa-book" aria-hidden="true"></i>
                          <span>Complaint History</span>
                      </a>
                      
                  </li>
                 
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>