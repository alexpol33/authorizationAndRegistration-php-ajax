/*
Авторизация
 */

$('.login-btn').click(function (e) {

    $(`input`).removeClass('error');

    e.preventDefault();

    let login = $('input[name="login"]').val(),
        password = $('input[name="password"]').val();

    $.ajax('vendor/signin.php',{
        type: 'POST',
        dataType: 'json',
        data: {
            login: login,
            password: password
        },
        success: function (data) {

            console.log(data);


            if(data.status){
                document.location.href = '/profile.php';
            } else if(!data.status){

                if(data.type === 1){
                    data.fields.forEach(function (field){
                        $(`input[name='${field}']`).addClass('error');
                    })

                }

                $('.msg').removeClass('none').text(data.message);
            }

        }
    })
})

$('.register-btn').click(function (e) {

    $(`input`).removeClass('error');

    e.preventDefault();

    let login = $('input[name="login"]').val(),
        full_name = $('input[name="full_name"]').val(),
        email = $('input[name="email"]').val(),
        password_confirm = $('input[name="password_confirm"]').val(),
        password = $('input[name="password"]').val();

    let formData = new FormData();
    formData.append('full_name', full_name);
    formData.append('login', login);
    formData.append('password', password);
    formData.append('password_confirm', password_confirm);
    formData.append('email', email);


    $.ajax('vendor/signup.php',{
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success: function (data) {


            if(data.status){
                document.location.href = '/index.php';
            } else if(!data.status){

                if(data.type === 1){
                    data.fields.forEach(function (field){
                        $(`input[name='${field}']`).addClass('error');
                    })

                }

                $('.msg').removeClass('none').text(data.message);
            }

        }
    })
})