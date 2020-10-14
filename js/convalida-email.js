$(function() {
  $("#invia-email").validate( {
    rules: {
      "nome": {
        require: true;
      },
      "email": {
        require: true,
        email: true;
      },
      "oggetto": {
        require: true;
      },
      "messaggio": {
        require: true;
      }
    },
    messages: {
      "nome": {
        require: "Devi inserire il nome",
      },
      "email": {
        require: "Devi inserire l'email",
        email: "Deve essere un'email"
      },
      "oggetto": {
        require: "Devi inserire un oggetto",
      },
      "messaggio": {
        require: "Devi inserire un messaggio",
      }
    },
    submitHandler : function (form) {
      form.submit();
    }
  })
});
