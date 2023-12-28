<head>
   <script src="https://cdn.tailwindcss.com"></script>
</head>

<div class="span3 rounded-lg">
					<div class="sidebar rounded-lg">
					<aside class="flex h-screen w-64 flex-col overflow-y-auto border-r bg-white px-6 py-5 rounded-xl">
 

  <!--Manage Complaint-->
<div class="mt-6 flex flex-1 flex-col justify-between">
    <nav class="-mx-3 space-y-6 ">
      <div class="space-y-3 ">
        <label class="px-3 text-xs font-semibold uppercase text-gray-900">
          Manage Complaints
        </label>
        <a
          class="flex transform items-center rounded-lg px-3 py-2 text-gray-600 transition-colors duration-300 hover:bg-gray-100 hover:text-gray-700"
          href="notprocess-complaint.php"
        >
          <img width="20" height="20" src="https://img.icons8.com/ios-filled/20/complaint.png" alt="complaint"/>
          <span class="mx-2 text-sm font-medium">New Complaints</span><?php
          
          $rt = mysqli_query($bd, "SELECT * FROM tblcomplaints where status is null");
          $num1 = mysqli_num_rows($rt);
          ?><b class="label orange pull-right"><?php echo htmlentities($num1); ?></b>
          <?php  ?>
        </a>
        <a
          class="flex transform items-center rounded-lg px-3 py-2 text-gray-600 transition-colors duration-300 hover:bg-gray-100 hover:text-gray-700"
          href="inprocess-complaint.php"
        >
          <img width="20" height="20" src="https://img.icons8.com/ios-filled/50/clock--v3.png" alt="clock--v3"/>
          <span class="mx-2 text-sm font-medium">Pending Complaints</span><?php 
          $status="in Process";                   
        $rt = mysqli_query($bd, "SELECT * FROM tblcomplaints where status='$status'");
        $num1 = mysqli_num_rows($rt);
        {?><b class="label orange pull-right"><?php echo htmlentities($num1); ?></b>
        <?php } ?>
        </a>
        <a
          class="flex transform items-center rounded-lg px-3 py-2 text-gray-600 transition-colors duration-300 hover:bg-gray-100 hover:text-gray-700"
          href="closed-complaint.php"
        >
          <img width="20" height="20" src="https://img.icons8.com/material-outlined/24/admin-settings-male.png" alt="admin-settings-male"/>
          <span class="mx-2 text-sm font-medium">Closed Complaints</span><?php 
          $status="closed";                   
        $rt = mysqli_query($bd, "SELECT * FROM tblcomplaints where status='$status'");
        $num1 = mysqli_num_rows($rt);
        {?><b class="label green pull-right"><?php echo htmlentities($num1); ?></b>
        <?php } ?>
        </a>
      </div>
  
  <!--Cateogrty-->
  <div class="mt-6 flex flex-1 flex-col justify-between">
    <nav class="-mx-1 space-y-6 ">
      <div class="space-y-3 ">
        <label class="px-3 text-xs font-semibold uppercase text-gray-900">
          Caterogy
        </label>
        <a
          class="flex transform items-center rounded-lg px-3 py-2 text-gray-600 transition-colors duration-300 hover:bg-gray-100 hover:text-gray-700"
          href="category.php"
        >
          <img width="15" height="15" src="https://img.icons8.com/ios-filled/20/opened-folder.png" alt="opened-folder"/>
          <span class="mx-2 text-sm font-medium">Add Category</span>
        </a>
        <a
          class="flex transform items-center rounded-lg px-3 py-2 text-gray-600 transition-colors duration-300 hover:bg-gray-100 hover:text-gray-700"
          href="subcategory.php"
        >
          <img width="15" height="15" src="https://img.icons8.com/ios-filled/20/opened-folder.png" alt="opened-folder"/>
          <span class="mx-2 text-sm font-medium">Add Sub Category</span>
        </a>
        <a
          class="flex transform items-center rounded-lg px-3 py-2 text-gray-600 transition-colors duration-300 hover:bg-gray-100 hover:text-gray-700"
          href="state.php"
        >
          <img width="20" height="20" src="https://img.icons8.com/material/15/region-code.png" alt="region-code"/>
          <span class="mx-2 text-sm font-medium">Add State</span>
        </a>
      </div>
      <div class="space-y-3 ">
        <label class="px-3 text-xs font-semibold uppercase text-gray-900">
          User Acces Points
        </label>
        <a
          class="flex transform items-center rounded-lg px-3 py-2 text-gray-600 transition-colors duration-300 hover:bg-gray-100 hover:text-gray-700"
          href="user-logs.php"
        >
          <img width="20" height="20" src="https://img.icons8.com/ios-filled/50/user.png" alt="user"/>
          <span class="mx-2 text-sm font-medium">User Loing Log</span>
        </a>
        <a
          class="flex transform items-center rounded-lg px-3 py-2 text-gray-600 transition-colors duration-300 hover:bg-gray-100 hover:text-gray-700"
          href="manage-users.php"
        >
          <img width="20" height="20" src="https://img.icons8.com/ios-filled/20/conference-call.png" alt="conference-call"/>
          <span class="mx-2 text-sm font-medium">Manage Users</span>
        </a>
        
      </div>
    </nav>
    <div class="mt-6">
      <div class="rounded-lg bg-gray-300 p-3 ">
        <h2 class="text-sm font-medium text-gray-800">
         Women Saferty First !
        </h2>
       
        <img
          class="mt-2 h-32 w-full rounded-lg object-cover"
          src="https://images.app.goo.gl/ZqZYQQ2qzNMrLfbE8"
          alt="Feature"
        />
      </div>
      <div class="mt-6 flex items-center justify-between">
        <a href="#" class="flex items-center gap-x-2">
          <img
            class="h-7 w-7 rounded-full object-cover"
            src="https://img.icons8.com/glyph-neue/64/administrator-male.png"
            alt="avatar"
          />
          <span class="text-sm font-medium text-gray-700">Admin</span>
        </a>
        <a
          href="logout.php"
          class="rotate-180 text-gray-800 transition-colors duration-200 hover:text-gray-900"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="h-5 w-5"
          >
            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
            <polyline points="10 17 15 12 10 7"></polyline>
            <line x1="15" y1="12" x2="3" y2="12"></line>
          </svg>
        </a>
      </div>
    </div>
  </div>
</aside>

					</div><!--/.sidebar-->
				</div><!--/.span3-->
