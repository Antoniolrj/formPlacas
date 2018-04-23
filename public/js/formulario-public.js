(function( $ ) {
    


function insertaProvincias(){
	var provincias = '';
	var xhr= new XMLHttpRequest();
	xhr.open('GET', 'http://wordpress.alrj/wp-content/plugins/01_formulario_placas/public/js/provincias.json', false)
	xhr.send();
	var datos = JSON.parse(xhr.responseText)
	for(var i = 0; i<datos.length; i++) {
		var sintilde = datos[i].nm.normalize('NFD')
     .replace(/([aeio])\u0301|(u)[\u0301\u0308]/gi,"$1$2")
     .normalize();;

		$('<option value="'+datos[i].nm+'">'+sintilde+'</option>').appendTo("#lista-provincias")
	}
}

$.fn.upform = function() {
  var $this = $(this);
  var container = $this.find(".upform-main");

  $(document).ready(function() {
    $(container).find(".input-block").first().click();
  });


  $(container)
    .find(".input-block")
    .not(".input-block input")
    .on("click", function() {
    rescroll(this);
  });


  $(container).find('.input-block input[type="radio"]').change(function(e) {
    moveNext(this);
  });

  $(window).on("scroll", function() {
    $(container).find(".input-block").each(function() {
      var etop = $(this).offset().top;
      var diff = etop - $(window).scrollTop();

      if (diff > 100 && diff < 300) {
        reinitState(this);
      }
    });
  });

  function reinitState(e) {
    $(container).find(".input-block").removeClass("active");

    $(container).find(".input-block input").each(function() {
      $(this).blur();
    });
    $(e).addClass("active");
    /*$(e).find('input').focus();*/
  }

  function rescroll(e) {
    $(window).scrollTo($(e), 200, {
      offset: { left: 100, top: -200 },
      queue: false
    });
  }

  function reinit(e) {
    reinitState(e);
    rescroll(e);
  }

  function moveNext(e) {
    $(e).parent().parent().next().click();
  }

  function movePrev(e) {
    $(e).parent().parent().prev().click();
  }
};

$(".upform").upform();
$.fn.upform = function() {
  var $this = $(this);
  var container = $this.find(".upform-main");

  $(document).ready(function() {
    $(container).find(".input-block").first().click();
  });

  $(container)
    .find(".input-block")
    .not(".input-block input")
    .on("click", function() {
      rescroll(this);
    });


  $(container).find('.input-block input[type="radio"]').change(function(e) {
    moveNext(this);
  });

  $(window).on("scroll", function() {
    $(container).find(".input-block").each(function() {
      var etop = $(this).offset().top;
      var diff = etop - $(window).scrollTop();

      if (diff > 100 && diff < 300) {
        reinitState(this);
      }
    });
  });

  function reinitState(e) {
    $(container).find(".input-block").removeClass("active");

    $(container).find(".input-block input").each(function() {
      $(this).blur();
    });
    $(e).addClass("active");
    /*$(e).find('input').focus();*/
  }

  function rescroll(e) {
    $(window).scrollTo($(e), 200, {
      offset: { left: 100, top: -200 },
      queue: false
    });
  }

  function reinit(e) {
    reinitState(e);
    rescroll(e);
  }

  function moveNext(e) {
    $(e).parent().parent().next().click();
  }

  function movePrev(e) {
    $(e).parent().parent().prev().click();
  }
};

$(".upform").upform();



$('#vivienda').click(function(){
  $('#vivienda-unifamiliar').removeClass('hidden')
  $('#localizacion').removeClass('hidden')
  $('#comunidad-vecinos').addClass('hidden')
  $('#negocio-empresa').addClass('hidden')
  $('html, body').animate({
        scrollTop: $("#next1").offset().top
    }, 1500);

})


$('#comunidad').click(function(){
  $('#comunidad-vecinos').removeClass('hidden')
  $('#localizacion').removeClass('hidden')
  $('#vivienda-unifamiliar').addClass('hidden')
  $('#negocio-empresa').addClass('hidden')
  $('html, body').animate({
        scrollTop: $("#next2").offset().top
    }, 1500);
})


$('#negocio').click(function(){
  $('#negocio-empresa').removeClass('hidden')
  $('#localizacion').removeClass('hidden')
  $('#vivienda-unifamiliar').addClass('hidden')
  $('#comunidad-vecinos').addClass('hidden')
  $('html, body').animate({
        scrollTop: $("#next3").offset().top
    }, 1500);
})


function modal (){
    $( "#dialog" ).dialog({
    resizable: false,
    draggable: false,
    height: 'auto',
    width: 1000,
    autoOpen: true,
    modal: true,
    open: function(){
      $('.ui-widget-overlay').addClass('miclase');
    }
  }); 
}





jQuery.extend(jQuery.validator.messages, {
  required: "Este campo es obligatorio.",
  remote: "Por favor, rellena este campo.",
  email: "Por favor, escribe una dirección de correo válida",
  url: "Por favor, escribe una URL válida.",
  date: "Por favor, escribe una fecha válida.",
  dateISO: "Por favor, escribe una fecha (ISO) válida.",
  number: "Por favor, escribe un número entero válido.",
  digits: "Por favor, escribe sólo dígitos.",
  creditcard: "Por favor, escribe un número de tarjeta válido.",
  equalTo: "Por favor, escribe el mismo valor de nuevo.",
  accept: "Por favor, escribe un valor con una extensión aceptada.",
  maxlength: jQuery.validator.format("Por favor, no escribas más de {0} caracteres."),
  minlength: jQuery.validator.format("Por favor, no escribas menos de {0} caracteres."),
  rangelength: jQuery.validator.format("Por favor, escribe un valor entre {0} y {1} caracteres."),
  range: jQuery.validator.format("Por favor, escribe un valor entre {0} y {1}."),
  max: jQuery.validator.format("Por favor, escribe un valor menor o igual a {0}."),
  min: jQuery.validator.format("Por favor, escribe un valor mayor o igual a {0}.")
});

$("#formulario").validate({
  submitHandler: function(){
    modal()
  }
});


/*json*/


insertaProvincias();


$('#validar').click(function(){
    $('#formulario input[type="radio"]:checked').each(function(){
        var atributo = ($(this).attr('name'))
        atributo = '#' +atributo
        $(atributo ).val($(this).val());
    })
    
    $('#formulario input[type="text"]').each(function(){
        var atributo2 = ($(this).attr('name'))
        atributo2 = '#' +atributo2
        $(atributo2 ).val($(this).val());
    })
        
})





                     
})( jQuery );
