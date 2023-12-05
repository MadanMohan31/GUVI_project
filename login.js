src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"

  function submitData(){
    $(document).ready(function(){
      var data = {
        email: $("#email").val(),
        password: $("#password").val(),
        action: $("#action").val(),
      };

      $.ajax({
        url: '../php/login.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Login Successful"){
            window.location.reload();
          }
        }
      });
    });
  }
