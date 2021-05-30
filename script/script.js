


function show_result(string){

   if (string.length == 0) {
       return;
   }
 
    load_users(string);

}

function show_Quiz(string) {

    if (string.length == 0) {
        return;
    }
    load_Quiz(string);
}



function load_Quiz(string) {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('result').innerHTML = this.responseText;
        }
    }

    xhr.open('GET','../controller/viewAllQuiz.php?q='+string,true);
    xhr.send();
}



function load_users(string) {
    
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
         
        if (this.readyState== 4 && this.status == 200) {
            document.getElementById('result').innerHTML = this.responseText;
        }
    }
        //since it is asyncronous
    xhr.open('GET','../controller/viewTeacher.php?q='+string, true);
    //send request
    xhr.send();
}



document.getElementById('allquiz').addEventListener('click',show_all_Quiz);


function show_all_Quiz(e) {
  
    e.preventDefault();
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function(){
        
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('result').innerHTML = this.responseText;
        }
    }

    xhr.open('GET','../controller/viewAllQuiz.php?data=all',true);

    xhr.send();
}





document.getElementById('viewall').addEventListener('click',showall);

function showall(e) {
    
    e.preventDefault();
        var xhr = new XMLHttpRequest();
    
        xhr.onreadystatechange = function(){
            
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('result').innerHTML = this.responseText;
            }
        }
    
        xhr.open('GET','../controller/viewTeacher.php?data=all',true);
    
        xhr.send();
}








