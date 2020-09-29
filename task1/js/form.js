$(document).ready(function () {
    var form_count = 0, form_count_form, next_form, total_forms;
    total_forms = $(".contactForm").length;

    $(".next").click(function () {
        form_count_form = $(this).parent();
        next_form = $(this).parent().next();
        next_form.show();
        form_count_form.hide();
        setProgressBar(++form_count);
    });

    $(".previous").click(function () {
        form_count_form = $(this).parent();
        next_form = $(this).parent().prev();
        next_form.show();
        form_count_form.hide();
        setProgressBar(--form_count);
        $('.alert-success').addClass("hide");
        $('.alert-danger').addClass("hide");
    });

    setProgressBar(form_count);

    function setProgressBar(curStep) {
        var percent = parseFloat(100 / total_forms) * curStep;
        percent = percent.toFixed();
        $(".progress-bar").css("width", percent + "%").html(percent + "%");
    }

    $(".step1Btn").click(function (event) {
        $('.step2Btn').addClass('hide');
        var error_message = '';
        if (!$("#first_name").val()) {
            error_message += "Please fill first name<br>";
        }
        if (!$("#last_name").val()) {
            error_message += "Please fill last name<br>";
        }
        if (!$("#email").val()) {
            error_message += "Please fill email address<br>";
        }
        if (error_message) {
            $('.alert-danger').removeClass('hide').html(error_message);
            return false;
        } else {
            $('.step2Btn').removeClass('hide');
            return false;
        }
    });

    $(".step2Btn").click(function (event) {
        $('.step3Btn').addClass('hide');
        var error_message = '';
        if (!$("#daterange").val()) {
            error_message += "Please fill date preferences";
        }
        if (error_message) {
            $('.alert-danger').removeClass('hide').html(error_message);
            return false;
        } else {
            $('.alert-success').removeClass('hide').html(successMsg());
            $('.step3Btn').removeClass('hide');
            return false;
        }
    });

    $(".step3Btn").click(function (event) {
        $('.alert-success').removeClass('hide').html(successMsg());
        $('.finalSubmitBtn').removeClass('hide');
        $(".progress-bar").css("background-color","#5cb85c");
        return false;
    });

    $(".finaBackBtn").click(function (event) {
        $('.alert-success').removeClass('hide').html(successMsg());
        $(".progress-bar").css("background-color","#337ab7");
    });

    function successMsg() {
        var success_message = '';
        success_message += "Your Name: " + $("#first_name").val() + " " + $("#last_name").val() + ".<br>";
        success_message += "Email: " + $("#email").val() + ".<br>";
        success_message += "Date Preferences: " + $("#daterange").val() + ".<br>";
        return success_message;
    }

    $('input[name="daterange"]').daterangepicker(
    {
        locale: {
            format: 'YYYY-MM-DD'
        }
    });
});