/*
$("#save").click(function(){
    $("#save").attr("data-dismiss","modal");
        $('#exampleModal').modal('hide');
        $('#testModal').modal('show'); 
});
      
*/

$('#registertxt').click(function(e){
    e.preventDefault(); 

        $('#loginModal')
            .modal('hide')
            .on('hidden.bs.modal', function (e) {
                  $('#registerModal').modal('show');

                  $(this).off('hidden.bs.modal'); // Remove the 'on' event binding
        });

});

 /*
      $('form').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'index.php',
            data: $('form').serialize(),
            success: function () {
              alert('form was submitted');
            }
          });

        });
    
  */

$('#registerCustomer').on('submit',function(e) {
  $.ajax({
          type: "post",
          url: "insert_customer.php",
          data: $('#registerCustomer').serialize(),

         success: function(){
             alert('Data Save');
         }
    });
 });
 
//Login Ajax

$('#loginCustomer').submit(function(e) {
    e.preventDefault();
    $.ajax({
       type: "POST",
       url: 'user-login.php',
       data: $(this).serialize(),
       success: function(data)
       {
     
            window.location = 'user-login.php';

       }
   });
 });

//jax login new

$('#login_button').click(function(e) {
    var username=$('#username').val();
    var password=$('#password').val();

    if(username !='' && password !=''){
        $.ajax({

            url: "action.php",
            method: "POST",
            data: {username:username, password:password},
            success: function(data){

                if(data =='No'){
                    alert("Wrong Data");
                }
                else{
                  $('#loginModal').hide();
                  location.reload();
                   alert("Login successful")
                   window.location = 'user-dashboard.php';
                }
                
            }

        });
    }

    else{
      alert('Username and password are required!');
    }

});


/*
$("form").on('submit',function(e){
        alert("Form submitted");

});

*/


$("#repeatpass").focusout(function(){

    var pass=$("#pass").val();
    var repeatpass=$("#repeatpass").val();

    if(pass!=repeatpass){
      alert("Password did not match!");
    }
    

});


