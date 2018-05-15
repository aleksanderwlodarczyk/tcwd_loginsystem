$(document).on('submit', 'form.js-register, form.js-login', function(event){
    event.preventDefault();

    var _form = $(this);
    var _error = $('.js-error', _form);
    var dataObject = {
        email: $("input[name='input_email']", _form).val(),
        password: $("input[name='input_password']", _form).val()
    };

    if(dataObject.email.length < 6){
        _error.text("This email is too short");
        _error.css("visibility", "visible");
        return false;
    }
    if(dataObject.password.length <= 6){
        _error.text("This password is too short");
        _error.css("visibility", "visible");
        return false;
    }
    console.log(dataObject);
    
    _error.css("visibility", "hidden");
    //ajax stuff here

    $.ajax({
        type: 'POST',
        url: (_form.hasClass('js-login')) ? "ajax/login.php" : "ajax/register.php",
        data: dataObject,
        dataType: 'json',
        async: true,
    })
    .done(function ajaxDone(data) {
        //Whatever the data is
        console.log(data);
        if(data.redirect !== undefined){
            //window.location = data.redirect;
        }
        if(data.error !== undefined){
            _error.text(data.error);
            _error.css("visibility", "visible");
        }
        alert(data.test);
    })
    .fail(function ajaxFailed(e) {
        //when failed
        console.log(e);
    })
    .always(function ajaxAlwaysDoThis(data) {
        //do it always
        console.log('Always');
    })
    //alert('form was submitted');
    return false;
});
//
