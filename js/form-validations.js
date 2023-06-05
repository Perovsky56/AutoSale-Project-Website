$(function() {
    $("form[name='contacting']").validate({
      rules: {
        firstname: "required",
        topic: "required",
        email: {
          required: true,
          email: true
        },
        text: {
            required: true,
            maxlength: 500,
            minlength: 3
        }
      },
      messages: {
        firstname: "Podaj imię.",
        topic: "Podaj temat.",
        email: "Podaj poprawny adres e-mail.",
        text: "Treść musi zawierać conajmniej 3 znaki.<br>"
      },
      submitHandler: function(form) {
        form.submit();
      }
    });

    $("form[name='newslettering']").validate({
        rules: {
          email: {
            required: true,
            email: true
          }
        },
        messages: {
          email: "e-mail niepoprawny"
        },
        submitHandler: function(form) {
          form.submit();
        }
      });

    $("#serviceAdd").validate({
        rules: {
          header: "required",
          text: "required"
        },
        messages: {
          header: "tytul niepoprawny",
          text: "popraw sie"
        },
        submitHandler: function(form) {
          form.submit();
        }
      });
  });