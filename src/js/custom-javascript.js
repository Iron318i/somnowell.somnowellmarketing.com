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

    $(document).ready(function () {
        $("#subscore").click(function () {

            var count = 0;
            if ($('input[name=q1]:checked').val() == 'F') {
                count++;
                $('#q1r').css('color', 'black');
            } else {
                $('#q1r').css('color', 'red');
            }

            if ($('input[name=q2]:checked').val() == 'T') {
                count++;
                $('#q2r').css('color', 'black');
            } else {
                $('#q2r').css('color', 'red');
            }

            if ($('input[name=q3]:checked').val() == 'F') {
                count++;
                $('#q3r').css('color', 'black');
            } else {
                $('#q3r').css('color', 'red');
            }

            if ($('input[name=q4]:checked').val() == 'F') {
                count++;
                $('#q4r').css('color', 'black');
            } else {
                $('#q4r').css('color', 'red');
            }


            if ($('input[name=q7]:checked').val() == 'T') {
                count++;
                $('#q7r').css('color', 'black');
            } else {
                $('#q7r').css('color', 'red');
            }

            if ($('input[name=q10]:checked').val() == 'T') {
                count++;
                $('#q10r').css('color', 'black');
            } else {
                $('#q10r').css('color', 'red');
            }

            if ($('input[name=q11]:checked').val() == 'T') {
                count++;
                $('#q11r').css('color', 'black');
            } else {
                $('#q11r').css('color', 'red');
            }

            if ($('input[name=q12]:checked').val() == 'T') {
                count++;
                $('#q12r').css('color', 'black');
            } else {
                $('#q12r').css('color', 'red');
            }

            if ($('input[name=q13]:checked').val() == 'F') {
                count++;
                $('#q13r').css('color', 'black');
            } else {
                $('#q13r').css('color', 'red');
            }

            if ($('input[name=q14]:checked').val() == 'T') {
                count++;
                $('#q14r').css('color', 'black');
            } else {
                $('#q14r').css('color', 'red');
            }

            if ($('input[name=q15]:checked').val() == 'F') {
                count++;
                $('#q15r').css('color', 'black');
            } else {
                $('#q15r').css('color', 'red');
            }


            if ($('input[name=q16]:checked').val() == 'F') {
                count++;
                $('#q16r').css('color', 'black');
            } else {
                $('#q16r').css('color', 'red');
            }

            if ($('input[name=q17]:checked').val() == 'T') {
                count++;
                $('#q17r').css('color', 'black');
            } else {
                $('#q17r').css('color', 'red');
            }

            if ($('input[name=q18]:checked').val() == 'T') {
                count++;
                $('#q18r').css('color', 'black');
            } else {
                $('#q18r').css('color', 'red');
            }

            if ($('input[name=q19a]:checked').val() == 'T' && $('input[name=q19b]:checked').val() == 'T' && $('input[name=q19c]:checked').val() == 'T' &&
                $('input[name=q19d]:checked').val() == 'T') {
                count++;
                $('#q19r').css('color', 'black');
            } else {
                $('#q19r').css('color', 'red');
            }

            if ($('input[name=q20]:checked').val() == 'F') {
                count++;
                $('#q20r').css('color', 'black');
            } else {
                $('#q20r').css('color', 'red');
            }

            if ($('input[name=q21a]:checked').val() == 'T' && $('input[name=q21b]:checked').val() == 'T' && $('input[name=q21c]:checked').val() == 'F' &&
                $('input[name=q21d]:checked').val() == 'T') {
                count++;
                $('#q21r').css('color', 'black');
            } else {
                $('#q21r').css('color', 'red');
            }

            if ($('input[name=q22]:checked').val() == 'T') {
                count++;
                $('#q22r').css('color', 'black');
            } else {
                $('#q22r').css('color', 'red');
            }


            if ($('input[name=q23a]:checked').val() == 'N' && $('input[name=q23b]:checked').val() == 'N' && $('input[name=q23c]:checked').val() == 'N' &&
                $('input[name=q23d]:checked').val() == 'Y' && $('input[name=q23e]:checked').val() == 'Y' && $('input[name=q23f]:checked').val() == 'N') {
                count++;
                $('#q23r').css('color', 'black');
            } else {
                $('#q23r').css('color', 'red');
            }

            if ($('input[name=q25]:checked').val() == 'T') {
                count++;
                $('#q25r').css('color', 'black');
            } else {
                $('#q25r').css('color', 'red');
            }

            if ($('input[name=q26]:checked').val() == 'T') {
                count++;
                $('#q26r').css('color', 'black');
            } else {
                $('#q26r').css('color', 'red');
            }

            if ($('input[name=q27]:checked').val() == 'T') {
                count++;
                $('#q27r').css('color', 'black');
            } else {
                $('#q27r').css('color', 'red');
            }

            if ($('input[name=q28]:checked').val() == 'F') {
                count++;
                $('#q28r').css('color', 'black');
            } else {
                $('#q28r').css('color', 'red');
            }

            if ($('input[name=q29]:checked').val() == 'T') {
                count++;
                $('#q29r').css('color', 'black');
            } else {
                $('#q29r').css('color', 'red');
            }

            if ($('input[name=q30]:checked').val() == 'T') {
                count++;
                $('#q30r').css('color', 'black');
            } else {
                $('#q30r').css('color', 'red');
            }

            if ($('input[name=q31]:checked').val() == 'T') {
                count++;
                $('#q31r').css('color', 'black');
            } else {
                $('#q31r').css('color', 'red');
            }

            if ($('input[name=q32]:checked').val() == 'F') {
                count++;
                $('#q32r').css('color', 'black');
            } else {
                $('#q32r').css('color', 'red');
            }

            if ($('input[name=q34]:checked').val() == 'T') {
                count++;
                $('#q34r').css('color', 'black');
            } else {
                $('#q34r').css('color', 'red');
            }

            if ($('input[name=q35]:checked').val() == 'T') {
                count++;
                $('#q35r').css('color', 'black');
            } else {
                $('#q35r').css('color', 'red');
            }

            if ($('input[name=q36]:checked').val() == 'T') {
                count++;
                $('#q36r').css('color', 'black');
            } else {
                $('#q36r').css('color', 'red');
            }

            if ($('input[name=q37]:checked').val() == 'T') {
                count++;
                $('#q37r').css('color', 'black');
            } else {
                $('#q37r').css('color', 'red');
            }

            if ($('input[name=q38]:checked').val() == 'T') {
                count++;
                $('#q38r').css('color', 'black');
            } else {
                $('#q38r').css('color', 'red');
            }

            if ($('input[name=q41a]:checked').val() == 'Y' && $('input[name=q41b]:checked').val() == 'Y' && $('input[name=q41c]:checked').val() == 'Y' &&
                $('input[name=q41d]:checked').val() == 'Y' && $('input[name=q41e]:checked').val() == 'Y') {
                count++;
                $('#q41r').css('color', 'black');
            } else {
                $('#q41r').css('color', 'red');
            }

            if ($('input[name=q42a]:checked').val() == 'T' && $('input[name=q42b]:checked').val() == 'T' && $('input[name=q42c]:checked').val() == 'T' &&
                $('input[name=q42d]:checked').val() == 'T') {
                count++;
                $('#q42r').css('color', 'black');
            } else {
                $('#q42r').css('color', 'red');
            }

            if ($('input[name=q43]:checked').val() == 'T') {
                count++;
                $('#q43r').css('color', 'black');
            } else {
                $('#q43r').css('color', 'red');
            }

            if ($('input[name=q44]:checked').val() == 'T') {
                count++;
                $('#q44r').css('color', 'black');
            } else {
                $('#q44r').css('color', 'red');
            }

            if ($('input[name=q45]:checked').val() == 'F') {
                count++;
                $('#q45r').css('color', 'black');
            } else {
                $('#q45r').css('color', 'red');
            }

            if ($('input[name=q46]:checked').val() == 'T') {
                count++;
                $('#q46r').css('color', 'black');
            } else {
                $('#q46r').css('color', 'red');
            }

            if ($('input[name=q47]:checked').val() == 'F') {
                count++;
                $('#q47r').css('color', 'black');
            } else {
                $('#q47r').css('color', 'red');
            }

            if ($('input[name=q48]:checked').val() == 'T') {
                count++;
                $('#q48r').css('color', 'black');
            } else {
                $('#q48r').css('color', 'red');
            }

            if ($('input[name=q49]:checked').val() == 'T') {
                count++;
                $('#q49r').css('color', 'black');
            } else {
                $('#q49r').css('color', 'red');
            }

            if ($('input[name=q50]:checked').val() == 'F') {
                count++;
                $('#q50r').css('color', 'black');
            } else {
                $('#q50r').css('color', 'red');
            }

            //$('#totmarks').val(count);
            if (count == '42') {
                $('#certification-test .wpcf7').show();

            }
            count = count + ' / 42';
            $('.epworth-score-wrapper').show();
            $('.txt-epworth-score').text(count);
        });
    });
    var myModal = new bootstrap.Modal(document.getElementById("facebowModal"), {});
    $('.showFacebowModal').click(function (e) {
        myModal.show();
    });

}(jQuery);

