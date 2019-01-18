$('document').ready(function(){
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

    });