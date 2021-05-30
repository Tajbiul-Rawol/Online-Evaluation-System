<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:200px;" id="mySidebar"><br>
  <hr>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="teacherHome.php" style="color:black" class="dropdown-container"><i class="fa fa-dashboard fa-fw"></i>  DashBoard</a>
    <br>
    <br>
    <div>
      <button class="dropdown-btn"><i class="fa fa-users fa-fw"></i> Quiz
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
        <a class="dropdown-btn  dropdown-link" href="../view/addQuiz.php" style="color:black;"><i class="fas fa-plus fa-fw"></i> &nbsp;Add </a><br>
        <a class="dropdown-btn  dropdown-link" href="#" style="color:black;"><i class="fas fa-eye"></i> &nbsp;View All </a><br>
        <a class="dropdown-btn" href="#" style="color:black;">Search</a><br>
      </div>
    </div>

    <div>
      <button class="dropdown-btn"><i class="fa fa-users fa-fw"></i> Student
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
        <a class="dropdown-btn  dropdown-link" href="../view/addStudent.php" style="color:black;"><i class="fas fa-plus fa-fw"></i> &nbsp;Add</a><br>
        <a class="dropdown-btn  dropdown-link" href="#" style="color:black;"><i class="fas fa-eye"></i> &nbsp;View All</a><br>
        <a class="dropdown-btn" href="#" style="color:black;">Search</a><br>
      </div>
    </div>

    <br>
    <div>
      <button class="dropdown-btn" style="color:black;"><i class="fa fa-users fa-fw" ></i> Course
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
        <a class="dropdown-btn" style="color:black;" href="#">View All</a><br>
        <a class="dropdown-btn" style="color:black;" href="#">Search</a><br>
      </div>

    </div>


  </div>
  </div>
</nav>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:200px;margin-top:43px;">