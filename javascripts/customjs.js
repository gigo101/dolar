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
 

/*
$("form").on('submit',function(e){
        alert("Form submitted");

});

*/


