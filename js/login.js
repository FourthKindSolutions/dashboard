$("#frmAcceso").on('submit',function(e)
{
	e.preventDefault();
  user=$("#email").val().toLowerCase();
  pass=$("#password").val();
  //console.log(user);
  //console.log(pass);
  if (user && pass) {
      $.post( "./ajax/acciones.php?op=login",{"email":user,"password":pass},function(data){})
      .done(function(data) {
        var respuesta = JSON.parse(data);
        if (respuesta == 1) {
          // similar behavior as clicking on a link
          window.location.href = "http://localhost/cnsCooperativa/dashboard.php";
        }
        else{
            swal({
            title: "Error",
            text: "Datos incorrectos",
            icon: "error",
            button: "Aceptar",
          });
        }
        //console.log(respuesta);
      })
      .fail(function(data) {
        swal({
          title: "Error",
          text: data,
          icon: "error",
          button: "Aceptar",
        });
      })
    }
  else{
    swal({
      title: "Error",
      text: "El dominio no esta permitido",
      icon: "error",
      button: "Aceptar",
    });
  }
})