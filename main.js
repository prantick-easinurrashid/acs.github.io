$(function () {

    //    loading animation

    setTimeout(function () {
        $('body').addClass('loaded');
    }, 1000);


    //    aos initialization 

    AOS.init();

    
    //    scroll to top button
    //    When the user scrolls down 20px from the top of the document, show the button

    mybutton = document.getElementById("myBtn");
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    //    Initialize book a table form validation on the registration form.

    $("form[name='createprofile']").validate({

        rules: {
            name: {
                required: true,
                minlength: 4
            },
            email: {
                required: true,
                email: true,
                minlength: 4
            },
            phone: {
                required: true,
                minlength: 11
            },
            id: {
                required: true,
                minlength: 4
            },
            dept: {
                required: true,
                minlength: 2
            },
            club: {
                required: true,
                minlength: 1
            },
            semester: {
                required: true,
            },
            profession: {
                required: true,
            },
            password: {
                required: true,
                minlength: 6
            },
        },

        messages: {
            name: "Please enter at least 4 chars",
            phone: "Please enter at least 11 chars",
            id: "Please enter at least 6 chars",
            dept: "Please enter at least 2 chars",
            club: "Please enter at least 4 chars",
            email: "Please enter a valid email",
            semester: "Please select an option",
            profession: "Please select an option",
            password: "Please enter at least 6 chars",
        },

        submitHandler: function (form) {
            form.submit();
        }
    });


    //    Initialize send message form validation on the registration form.

    $("form[name='sendmessage']").validate({

        rules: {
            name: {
                required: true,
                minlength: 4
            },
            email: {
                required: true,
                email: true,
                minlength: 4
            },
            subject: {
                required: true,
                minlength: 5
            },
        },

        messages: {
            name: "Please enter at least 4 chars",
            email: "Please enter a valid email",
            subject: "Please enter at least 5 chars"
        },

        submitHandler: function (form) {
            form.submit();
        }
    });
});