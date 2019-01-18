$('document').ready(function(){
      /*
      $("#save").click(function(){
            $("#save").attr("data-dismiss","modal");
            $('#exampleModal').modal('hide');
            $('#testModal').modal('show'); 
      });
      
      */

      $('#save').click(function(e){
          e.preventDefault();

          $('#exampleModal')
              .modal('hide')
              .on('hidden.bs.modal', function (e) {
                  $('#testModal').modal('show');

                  $(this).off('hidden.bs.modal'); // Remove the 'on' event binding
              });

      });

    });