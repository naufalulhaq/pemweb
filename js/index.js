function signup()
{
    window.location.replace(window.location.origin + "signup.html");
}

function check()
{
    $.ajax ({
        type: "GET",
        url: "phprestapi.php?fucntion=checkCookie",
        success function (result){
            const res = JSON.parse(result);
            if (res['status']) {
                window.location.replace(window.location.origin + "/dashboard.html");
            }
        }
    })
}

function login()
{
    const username = document.getElementById(username);
    const password = document.getElementById(password);

    $.ajax ({
            type: "POST",
            data: `username= ${username} & password= ${password}`,
            url: "phperstapi.php?function=login",
            success: function (result){
                const res = JSON.parse(result);
                if (res == "success"){
                    window.location.replace(window.location.origin + "/dashboard.html");
                }
                else {
                    document.querySelector("msg").innerHTML = "username/password salah";
                }
            }
        });
}