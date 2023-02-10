function regForm() {
   location.href = "../php/form.php";
}

function validate_pwd() {
    var p1 = document.getElementById("pwd").value;
    var p2 = document.getElementById("cpwd").value;
    if (p1 == "" || p2 == "") {
        alert("Password or Confirm Password field is not entered");
        return false;
    }
    if (p1 == p2) {
        return true;
    } 
    else {
        alert("Password and Confirm Password fields are mismatch");
        return false;
    }
}

// function validate_login() {
//     var v_name = document.querySelector('name').value;
//     var v_pwd = document.querySelector('pwd').value;
//     var name = "name";
//     var password = "pwd";
//     if ((v_name == name) && (v_pwd == pwd)) {
//         alert('You are successfully logged in');
//         return true;
//     } else {
//         alert("Login was unsuccessful, please check your username and password");
//         return false;
//     }
// }

// <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
// $(function(){
//   $('a').each(function() {
//     if ($(this).prop('href') == window.location.href) {
//       $(this).addClass('current');
//     }
//   });
// });

