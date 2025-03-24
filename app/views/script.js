$(document).ready(function(){

    $("#registrationBtn").click(function(e) {

        e.preventDefault()

        var formData = new FormData($("#registrationForm")[0]);
        console.log(formData)

        $.ajax({
            url: "../controllers/StudentController.php",
            method: "POST",
            data: formData,
            processData: false, // Prevent jQuery from processing the data
            contentType: false, // Prevent jQuery from setting contentType
            dataType: "json",
            success: function(response) {
                if (response.status === "success") {
                    $(".tset").text("Works")
                }
            },
            error: function() {
                $(".tset").text("Fuck")
            }
        });
    })


    // $("#loginBtn").click(function(e) {
    //     e.preventDefault()

    //     var formData = new FormData($("#loginForm")[0]);
    //     console.log(formData)

    //     $.ajax({
    //         url: "../controllers/LoginProcess.php",
    //         method: "POST",
    //         data: formData,
    //         processData: false,
    //         contentType: false,
    //         dataType: "json",
    //         success: function(response) {
    //             windows.location.href =
    //         },
    //         error: function() {
    //             alert("Failed to process the request.");
    //         }
    //     });
    // })


  });