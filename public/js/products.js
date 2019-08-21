
window.onload = function(){
  //cambia orden productos
  document.addEventListener("DOMContentLoaded", function(event) {
    /* Empieza */

    let selectOrder = document.getElementById('selectOrder');
    selectOrder.addEventListener('change', function(e){
      window.location.href = window.location.pathname+'?orderBy='+e.target.value;
    })
    /* Termina */
  });


  var perros = document.querySelector('#perros');
  perros.addEventListener("hover", function() {

  })
    
  }
};
