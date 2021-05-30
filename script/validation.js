function validateForm() {
    var oid = document.forms["myForm"]["oid"].value;
    var password = document.forms["myForm"]["password"].value;

    var dashposition = oid.indexOf("-");

    if (oid == "") {
      document.getElementById("oidErr").innerHTML = "oid cannot be empty!";
    return false;
    }

    if (dashposition < 1 || dashposition >= 2 && dashposition >= 7 || dashposition + 2 >= oid.length) {
      document.getElementById("oidErr").innerHTML = "invalid oid format!";
      return false;
    }
    
    else if (password == "") {
        document.getElementById("passErr").innerHTML = "password cannot be empty!";
        return false;
    }
    else if (password.length < 8) {
        document.getElementById("passErr").innerHTML = "password cannot be ";
        return false;
    }


  }



  function validateQuizForm() {
    
    var name = document.forms["quizForm"]["name"].value;
    var courseID = document.forms["quizForm"]["courseID"].value;
    var section = document.forms["quizForm"]["section"].value;
    var type = document.forms["quizForm"]["type"].value;
    var time = document.forms["quizForm"]["time"].value;
  
    if (name == "") {
        document.getElementById("nameErr").innerHTML = "name cannot be empty!";
      return false;
    }
    else if (courseID == "") {
        document.getElementById("courseIDErr").innerHTML = "courseID cannot be empty!";
        return false;
    }
    else if (section == "") {
      document.getElementById("sectionErr").innerHTML = "section cannot be empty!";
      return false;
    }
    else if (type == "") {
      document.getElementById("typeErr").innerHTML = "type cannot be empty!";
      return false;
    }
    else if (time == "") {
      document.getElementById("timeErr").innerHTML = "time cannot be empty!";
      return false;
    }else{
      document.getElementById("success").innerHTML = "Quiz created!!";
      return true;
    }
  

  }




var form = document.forms.namedItem("quizform");

form.addEventListener('submit', function(ev) {
  

  var elems = document.querySelectorAll('input[type="radio"]'),
  res = Array.from(elems).map(v => v.value);
  console.log(res);
  var array = JSON.stringify(res);

  console.log("form data fired");
  var oOutput = document.getElementById('result'),
      fData = new FormData(form);

      fData.append("QuizField", "This is some extra data");

  var xhr = new XMLHttpRequest();
  xhr.open('POST', '../controller/viewAllQuiz.php', true);
  xhr.onload = function(oEvent) {
    if (xhr.status == 200) {
      document.getElementById('result').innerHTML = this.responseText;
    }
  };

  xhr.setRequestHeader( "Content-Type", "application/json" );
  xhr.send(array);
  ev.preventDefault();
}, false);