// Objet Modal 
var ModalObject = {

    modal: null,
    closeSpan: null,
  
    construct: function(modal, closeSpan) {
  
      ModalObject.modal = modal;
      ModalObject.closeSpan = closeSpan;
  
      // Evènements
      $(ModalObject.closeSpan).click(function() {
  
        ModalObject.modal.style.display = 'none';
  
      });
  
      $(ModalObject.window).click(function(e) {
  
        if (e.target === modal) {
          ModalObject.modal.style.display = 'none';
        }
      });
  
    }
  
  };
  
  ModalObject.construct (
    document.getElementById("myModal"),
    document.getElementsByClassName("close")
  )
  
  
  
        // Event permettant de faire apparaître la modal
        $('#formButton').click(function() {
            $('#myModal').show();
        }); 
  
        