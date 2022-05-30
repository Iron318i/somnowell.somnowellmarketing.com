+function ($) {
    $('body').append('<div id="toTop" class="btn">&nbsp</div>');
    $(window).scroll(function () {
        if ($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    $('#toTop').click(function () {
        $("html, body").animate({scrollTop: 0}, 600);
        return false;
    });
    $('.wpcf7').click(function () {
        $(".wpcf7-mail-sent-ok").hide();
    });

    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    $(document).ready(function () {

        $("#btnSuitabilityReset").click(function () {
            $('.form-check-input').each(function () { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"
            });
            $(".scoring").html("Your suitability is");
        });

        $("#btnSuitabilityCalculate").click(function () {
            if ($(".somnowell-suitability-test input:checkbox:checked").length) {
                //alert('yahho1');
                $(".scoring").html("Your suitability is UNSURE according to the answers you provided. We recommend you book a consultation with a Somnowell Practitioner to find out if you are suitable.");
            } else if ($('input[name=q11]:checked').val() == 'n' || $('input[name=q11sup1]:checked').val() == 'y' || $('input[name=q11sup2]:checked').val() == 'y' || $('input[name=q12]:checked').val() == 'n' || $('input[name=q13]:checked').val() == 'n' || $('input[name=q14]:checked').val() == 'n' || $('input[name=q15]:checked').val() == 'n') {
                //alert('yahho2');
                $(".scoring").html("Your suitability is UNSURE according to the answers you provided. We recommend you book a consultation with a Somnowell Practitioner to find out if you are suitable.");
            } else {
                $(".scoring").html("Your suitability is OK according to the answers you provided. We recommend you book a consultation with a Somnowell Practitioner.");
            }
        });

        $("#btnSleepinessReset").click(function () {
            $("#form-epworth-test")[0].reset();
        });

        $("#btnSleepinessCalculate").click(function () {
            $sum = 0;
            $notAll = false;

            $('#form-epworth-test .form-select').each(function () { //loop through each checkbox
                $answer = $(this).children("option:selected").val();
                if ($answer != 'choose_answer') {
                    $sum += parseInt($answer);
                } else {
                    $notAll = true;
                }
            });
            if ($notAll) {
                $('#epworthResault').text('(please answer all the questions)');
            } else {
                $('#epworthResault').text(':'.$sum);
            }
        });

        var timer;
        $(".sidebar .nav > .menu-item").mouseenter(function () {
            var that = this;
            timer = setTimeout(function () {
                $(that).children(".sub-menu").slideDown();
            }, 500);
        }).mouseleave(function () {
            clearTimeout(timer);
        });

        $("#main-menu .dropdown > a").one("click", false);

        if ($('#regionsDropdown').length) {
            const tpl = '<select id="regionsSelect" class="form-select"><option value="all" selected>All Regions</option>{{contents}}</select>';
            let contents = '';
            const elHeaders = document.querySelectorAll('.region h3');
            elHeaders.forEach((el, index) => {
                contents += `<option value="${el.textContent.replace(/ /ig, "-").toLowerCase()}">${el.textContent}</option>`;
            });
            $('#regionsDropdown').append(tpl.replace('{{contents}}', contents));

            $('#regionsSelect').on('change', function () {
                if (this.value == "all") {
                    $('.region').show();
                } else {
                    $('.region').hide();
                    $('#' + this.value).show();
                }
            });
        }
    });

}(jQuery);

