let contactType = "Individual";
let recordID;

function personal_info(val) {

    let node = document.getElementById("appendable");
    let child = " <div class=\"col-md-12\" id=\"custom-data\">\n" +
        "\n" +
        "                                                    <div class=\"form-body\">\n" +
        "\n" +
        "                                                        <div class=\"form-group\">\n" +
        "                                                            <label for=\"projectinput1\">Company Name</label>\n" +
        "                                                            <input type=\"text\" id=\"CompanyName\" required\n" +
        "                                                                   class=\"form-control\"\n" +
        "                                                                   placeholder=\"Company Name\" name=\"Company Name[]\"\n" +
        "                                                                   data-toggle=\"tooltip\" data-trigger=\"hover\"\n" +
        "                                                                   data-placement=\"top\"\n" +
        "                                                                   data-title=\"Issue Title\">\n" +
        "                                                        </div>\n" +
        "\n" +
        "                                                        <div class=\"row\">\n" +
        "                                                            <div class=\"col-md-6\">\n" +
        "                                                                <div class=\"form-group\">\n" +
        "                                                                    <label for=\"projectinput3\">Job Profile</label>\n" +
        "                                                                    <input type=\"text\" id=\"Job Profile\"\n" +
        "                                                                           class=\"form-control\"\n" +
        "                                                                           name=\"Job Profile[]\"\n" +
        "                                                                           data-toggle=\"tooltip\"\n" +
        "                                                                           data-trigger=\"hover\"\n" +
        "                                                                           data-placement=\"top\"\n" +
        "                                                                           data-title=\"Date Opened\">\n" +
        "                                                                </div>\n" +
        "                                                            </div>\n" +
        "                                                            <div class=\"col-md-6\">\n" +
        "                                                                <div class=\"form-group\">\n" +
        "                                                                    <label for=\"projectinput3\">Joining Date</label>\n" +
        "                                                                    <input type=\"date\" id=\"Joining Date\" required\n" +
        "                                                                           class=\"form-control\"\n" +
        "                                                                           name=\"Joining Date[]\"\n" +
        "                                                                           data-toggle=\"tooltip\"\n" +
        "                                                                           data-trigger=\"hover\"\n" +
        "                                                                           data-placement=\"top\"\n" +
        "                                                                           data-title=\"Date Opened\">\n" +
        "                                                                </div>\n" +
        "                                                            </div>\n" +
        "                                                            <div class=\"col-md-12\">\n" +
        "                                                                <div class=\"form-group\">\n" +
        "                                                                    <label for=\"projectinput3\">Leaving Date</label>\n" +
        "                                                                    <input type=\"date\" id=\"Leaving Date\" required\n" +
        "                                                                           class=\"form-control\"\n" +
        "                                                                           name=\"Leaving Date[]\"\n" +
        "                                                                           data-toggle=\"tooltip\"\n" +
        "                                                                           data-trigger=\"hover\"\n" +
        "                                                                           data-placement=\"top\"\n" +
        "                                                                           data-title=\"Date Opened\">\n" +
        "                                                                </div>\n" +
        "                                                            </div>\n" +
        "                                                        </div>\n" +
        "                                                    </div>\n" +
        "\n" +
        "                                                    <div class=\"form-group\">\n" +
        "                                                        <label for=\"projectinput3\">Remarks</label>\n" +
        "                                                        <input type=\"text\" id=\"Remarks\"\n" +
        "                                                               class=\"form-control\"\n" +
        "                                                               name=\"Remarks[]\"\n" +
        "                                                               data-toggle=\"tooltip\"\n" +
        "                                                               data-trigger=\"hover\"\n" +
        "                                                               data-placement=\"top\"\n" +
        "                                                               data-title=\"Date Opened\">\n" +
        "                                                    </div>\n" +
        "\n" +
        "                                                <hr>\n" +
        "\n" +
        "                                            </div>";

    // node.append(child);
    $("#appendable").append(child)
    // $("#appendable").append(document.getElementById(val.parentElement.previousElementSibling.firstElementChild.id));
}

function qualification(val) {
    let node = document.getElementById("appendable_qua");
    let child = "                                            <div class=\"col-md-12\" id=\"custom-data-qua\">\n" +
        "\n" +
        "                                                    <div class=\"form-body\">\n" +
        "\n" +
        "                                                        <div class=\"form-group\">\n" +
        "                                                            <label for=\"projectinput1\">Schoole / University</label>\n" +
        "                                                            <input type=\"text\" id=\"SchooleUniversity\" required\n" +
        "                                                                   class=\"form-control\"\n" +
        "                                                                   placeholder=\"School / University\" name=\"School University[]\"\n" +
        "                                                                   data-toggle=\"tooltip\" data-trigger=\"hover\"\n" +
        "                                                                   data-placement=\"top\"\n" +
        "                                                                   data-title=\"Issue Title\">\n" +
        "                                                        </div>\n" +
        "\n" +
        "                                                        <div class=\"row\">\n" +
        "                                                            <div class=\"col-md-6\">\n" +
        "                                                                <div class=\"form-group\">\n" +
        "                                                                    <label for=\"projectinput3\">Education Level</label>\n" +
        "                                                                    <input type=\"text\" id=\"Education Level\"\n" +
        "                                                                           class=\"form-control\"\n" +
        "                                                                           name=\"Education Level[]\"\n" +
        "                                                                           data-toggle=\"tooltip\"\n" +
        "                                                                           data-trigger=\"hover\"\n" +
        "                                                                           data-placement=\"top\"\n" +
        "                                                                           data-title=\"Date Opened\">\n" +
        "                                                                </div>\n" +
        "                                                            </div>\n" +
        "                                                            <div class=\"col-md-6\">\n" +
        "                                                                <div class=\"form-group\">\n" +
        "                                                                    <label for=\"projectinput3\">Start Date</label>\n" +
        "                                                                    <input type=\"date\" id=\"Start Date\" required\n" +
        "                                                                           class=\"form-control\"\n" +
        "                                                                           name=\"Start Date[]\"\n" +
        "                                                                           data-toggle=\"tooltip\"\n" +
        "                                                                           data-trigger=\"hover\"\n" +
        "                                                                           data-placement=\"top\"\n" +
        "                                                                           data-title=\"Date Opened\">\n" +
        "                                                                </div>\n" +
        "                                                            </div>\n" +
        "                                                            <div class=\"col-md-12\">\n" +
        "                                                                <div class=\"form-group\">\n" +
        "                                                                    <label for=\"projectinput3\">End Date</label>\n" +
        "                                                                    <input type=\"date\" id=\"End Date\" required\n" +
        "                                                                           class=\"form-control\"\n" +
        "                                                                           name=\"End Date[]\"\n" +
        "                                                                           data-toggle=\"tooltip\"\n" +
        "                                                                           data-trigger=\"hover\"\n" +
        "                                                                           data-placement=\"top\"\n" +
        "                                                                           data-title=\"Date Opened\">\n" +
        "                                                                </div>\n" +
        "                                                            </div>\n" +
        "                                                            <div class=\"col-md-6\">\n" +
        "                                                                <div class=\"form-group\">\n" +
        "                                                                    <label for=\"projectinput3\">Professional Course (if any)</label>\n" +
        "                                                                    <input type=\"date\" id=\"End Date\" required\n" +
        "                                                                           class=\"form-control\"\n" +
        "                                                                           name=\"Professional Course[]\"\n" +
        "                                                                           data-toggle=\"tooltip\"\n" +
        "                                                                           data-trigger=\"hover\"\n" +
        "                                                                           data-placement=\"top\"\n" +
        "                                                                           data-title=\"Date Opened\">\n" +
        "                                                                </div>\n" +
        "                                                            </div>\n" +
        "                                                            <div class=\"col-md-6\">\n" +
        "                                                                <div class=\"form-group\">\n" +
        "                                                                    <label for=\"projectinput3\">Remarks</label>\n" +
        "                                                                    <input type=\"text\" id=\"Remarks\"\n" +
        "                                                                           class=\"form-control\"\n" +
        "                                                                           name=\"courseRemarks[]\"\n" +
        "                                                                           data-toggle=\"tooltip\"\n" +
        "                                                                           data-trigger=\"hover\"\n" +
        "                                                                           data-placement=\"top\"\n" +
        "                                                                           data-title=\"Date Opened\">\n" +
        "                                                                </div>\n" +
        "                                                            </div>\n" +
        "                                                        </div>\n" +
        "                                                    </div>\n" +
        "\n" +
        "\n" +
        "\n" +
        "                                                <hr>\n" +
        "\n" +
        "                                            </div>\n";

    $("#appendable_qua").append(child)
}

function individualRadio(id) {
    document.getElementById('contact-hyperlink').style.display = 'none';
    document.getElementById('contact-target').style.display = 'none';
    document.getElementById('individual-basic-info').style.display = 'block';
    document.getElementById('company-basic-info').style.display = 'none';
    document.getElementById('business-classifications').style.display = 'none';
    document.getElementById('address-type').style.display = 'none';
    document.getElementById('more-address').style.display = 'none';
    document.getElementById('website').style.display = 'none';


    contactType = 'Individual';
}

function companyRadio(id) {
    document.getElementById('contact-hyperlink').style.display = 'block';
    document.getElementById('contact-target').style.display = 'block';
    document.getElementById('individual-basic-info').style.display = 'none';
    document.getElementById('company-basic-info').style.display = 'block';
    document.getElementById('business-classifications').style.display = 'block';
    document.getElementById('address-type').style.display = 'block';
    document.getElementById('more-address').style.display = 'block';
    document.getElementById('website').style.display = 'block';
    contactType = 'Company';
}

$(document).on('change', '.country-change', function() {
    var countrySelect = $(this);
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: $.trim(getStates) + '/' + countrySelect.val(),
        method: 'get',
        success: function (result) {
            if (result != "error") {
                countrySelect.parents('.country-parent').next().find('.state-change').html(
                    '<option selcetd> Select state</option>'
                );
                $.each(result, function (key, value) {
                    countrySelect.parents('.country-parent').next().find('.state-change').append(
                        '<option value=' + value.id + '>' + value.value + '</option>'
                    );
                });
            } else {
                 countrySelect.parents('.country-parent').next().find('.state-change').html(
                    '<option selected disabled>Record not found</option>'
                );
            }
        }
    });
});

$(document).on('change', '.state-change', function() {
    var stateSelect = $(this);
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: $.trim(getCities) + '/' + stateSelect.val(),
        method: 'get',
        success: function (result) {
            if (result != "error") {
                stateSelect.parents('.state-parent').next().find('.city-change').html(
                    '<option selcetd> Select City</option>'
                );
                $.each(result, function (key, value) {
                    stateSelect.parents('.state-parent').next().find('.city-change').append(
                        '<option value=' + value.id + '>' + value.value + '</option>'
                    );
                });
            } else {
                countrySelect.parents('.state-parent').next().find('.city-change').html(
                    '<option selected disabled>Record not found</option>'
                );
            }
        }
    });
});

function postDetail(contactInfo) {
    if (document.getElementById('record-id').value == '') {
        if (contactType === 'Individual') {
            let firstName = document.getElementById('first-name').value;
            let lastName = document.getElementById('last-name').value;

            if (firstName && lastName) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: contactInfo,
                    method: 'post',
                    data: {'first-name': firstName, 'last-name': lastName, 'contact-type': contactType},
                    success: function (result) {
                        if (result != "error") {
                            document.getElementById('record-id').value = result;
                        } else {

                        }
                    }
                });
            } else {
                document.getElementById('error-for-first-name').style.display = 'block';
                document.getElementById('error-for-last-name').style.display = 'block';
                setTimeout(function () {
                    document.getElementById('error-for-first-name').style.display = 'none';
                    document.getElementById('error-for-last-name').style.display = 'none';
                }, 3000);
            }
        } else if (contactType === 'Company') {
            let companyName = document.getElementById('company-name').value;
            if (companyName) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: contactInfo,
                    method: 'post',
                    data: {'company-name': companyName, 'contact-type': contactType},
                    success: function (result) {
                        if (result != "error") {
                            recordID = result;
                            document.getElementById('record-id').value = result;
                            document.getElementById('parentID').value = result;
                        } else {
                        }
                    }
                });
            } else {
                document.getElementById('error-for-company-name').style.display = 'block';
                setTimeout(function () {
                    document.getElementById('error-for-company-name').style.display = 'none';
                }, 3000);
            }
        } else {
            document.getElementById('error-for-individual-company').style.display = 'block';
            setTimeout(function () {
                document.getElementById('error-for-individual-company').style.display = 'none';
            }, 3000);
        }
    }
}

function previewImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(input).parent().find('img').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

function childForm(route) {
    console.log(route);
    $.get(route, function (data) {
        $(".child-form").html(data);
        $(".tags").tagging();
    });
}

$('#create-modal').on('shown.bs.modal', function (e) {
    childForm(createForm);
})

function selectMoreCountry(countryID, route) {
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: route,
        method: 'get',
        data: {'id': countryID},
        success: function (result) {
            if (result != "error") {
                document.getElementById('putMoreState').innerText = "";
                $("#putMoreState").append(
                    '<option selcetd>Select City</option>'
                );
                $.each(result, function (key, value) {
                    $("#putMoreState").append(
                        '<option value=' + value.id + '>' + value.value + '</option>'
                    );
                });


            } else {
                document.getElementById('putMoreState').innerText = "";
                $("#putMoreState").append(
                    '<option selected disabled>Record not found</option>'
                );
            }
        }
    });
}

function selectMoreState(stateID, route) {
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: route,
        method: 'get',
        data: {'id': stateID},
        success: function (result) {
            if (result != "error") {
                document.getElementById('putMoreCity').innerText = "";
                $("#putMoreCity").append(
                    '<option selcetd>Select City</option>'
                );
                $.each(result, function (key, value) {
                    $("#putMoreCity").append(
                        '<option value=' + value.id + '>' + value.value + '</option>'
                    );
                });


            } else {
                document.getElementById('putMoreCity').innerText = "";
                $("#putMoreCity").append(
                    '<option selected disabled>Record not found</option>'
                );
            }
        }
    });
}

$(document).ready(function (e) {
    $(".tags").tagging();

    $('#child-form').on('submit', (function (e) {
        let companyName = document.getElementById('company-name').value;
        if (companyName) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: 'POST',
                url: $(this).attr('action'),
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    $("#child-contact-section").append('<div class="col-md-4 col-sm-6">\n' +
                        '                                                                <div class="card mb-1 contactbox-m">\n' +
                        '                                                                    <div class="card-body p-0">\n' +
                        '                                                                        <div class="row">\n' +
                        '                                                                            <div class="col-4">\n' +
                        '                                                                                <div class="border-left-radius-palette">\n' +
                        '                                                                                    <img src=' + data.picture + '\n' +
                        '                                                                                         class="rounded-squre img-fluid img-border height-120 mt-0"\n' +
                        '                                                                                         alt="Card image">\n' +
                        '                                                                                </div>\n' +
                        '                                                                            </div>\n' +
                        '                                                                            <div class="col-8 pl-0">\n' +
                        '                                                                                <div class="p-0">\n' +
                        '                                                                                    <div class="float-right">\n' +
                        '                                                                                        <button type="button"\n' +
                        '                                                                                                class="close_btn close"\n' +
                        '                                                                                                data-toggle="modal"\n' +
                        '                                                                                                data-target="#close_modal">\n' +
                        '                                                                                            <span aria-hidden="true">×</span>\n' +
                        '                                                                                        </button>\n' +
                        '                                                                                        <p>' + data.name + '</p>\n' +
                        '                                                                                        <a href="#">' + data.email + '</a>\n' +
                        '                                                                                    </div>\n' +
                        '                                                                                </div>\n' +
                        '                                                                            </div>\n' +
                        '                                                                        </div>\n' +
                        '                                                                    </div>\n' +
                        '                                                                </div>\n' +
                        '                                                            </div>');


                    // document.getElementById('child-form').reset();
                    $(".child-form").html("");
                    document.getElementById('success-sub-child').style.display = 'block';
                    setTimeout(function () {
                        document.getElementById('success-sub-child').style.display = 'none';
                    }, 3000);

                },
                error: function (data) {
                    // console.log(printErrorMsg(data.error));
                    conosle.log('error');
                    $.each(data.error, function (key, value) {
                        console.log('abdullah', value);
                    });

                    // document.getElementById('error-for-sub-child').style.display = 'block';
                    // setTimeout(function () {
                    //     document.getElementById('error-for-sub-child').style.display = 'block';
                    // }, 3000);
                }
            });
        } else {
            document.getElementById('error-for-sub-child').style.display = 'block';
            window.stop();
            setTimeout(function () {
                document.getElementById('error-for-sub-child').style.display = 'block';
            }, 3000);
        }
    }));
    $("#ImageBrowse").on("change", function () {
        $("#imageUploadForm").submit();
    });
});

$(document).ready(function (e) {
    $('#child-address').on('submit', (function (e) {
        let companyName = document.getElementById('company-name').value;
        if (companyName) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: 'POST',
                url: $(this).attr('action'),
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {

                    // document.getElementById('child-form').reset();
                    $("#child-form").trigger("reset");
                    document.getElementById('success-address').style.display = 'block';
                    setTimeout(function () {
                        document.getElementById('success-address').style.display = 'none';
                    }, 3000);

                },
                error: function (data) {
                    // console.log(printErrorMsg(data.error));
                    conosle.log('error');
                    $.each(data.error, function (key, value) {
                        console.log('abdullah', value);
                    });

                    // document.getElementById('error-for-sub-child').style.display = 'block';
                    // setTimeout(function () {
                    //     document.getElementById('error-for-sub-child').style.display = 'block';
                    // }, 3000);
                }
            });
        } else {
            alert('company name must be required for adding the company address.');
            window.stop();
        }
    }));
});

function checkAddressType(id) {
    let checkBox = document.getElementById(id);
    let condition = checkBox.firstElementChild.checked;
    if (condition) {
        if (checkBox.firstElementChild.value == 'Correspondence') {
            document.getElementById('correspondence-more').setAttribute("disabled", "");
        } else if (checkBox.firstElementChild.value == 'Invoice') {
            document.getElementById('invoice-more').setAttribute("disabled", "");
        } else if (checkBox.firstElementChild.value == 'Registered') {
            document.getElementById('registered-more').setAttribute("disabled", "");
        } else if (checkBox.firstElementChild.value == 'Shipping') {
            document.getElementById('shipping-more').setAttribute("disabled", "");
        } else if (checkBox.firstElementChild.value == 'Other') {
            document.getElementById('other-more').setAttribute("disabled", "");
        }
    } else {
        if (checkBox.firstElementChild.value == 'Correspondence') {
            document.getElementById('correspondence-more').removeAttribute("disabled");
        } else if (checkBox.firstElementChild.value == 'Invoice') {
            document.getElementById('invoice-more').removeAttribute("disabled");
        } else if (checkBox.firstElementChild.value == 'Registered') {
            document.getElementById('registered-more').removeAttribute("disabled");
        } else if (checkBox.firstElementChild.value == 'Shipping') {
            document.getElementById('shipping-more').removeAttribute("disabled");
        } else if (checkBox.firstElementChild.value == 'Other') {
            document.getElementById('other-more').removeAttribute("disabled");
        }
    }
}

function moreAddressType(id) {
    let checkBox = document.getElementById(id);
    let condition = checkBox.firstElementChild.checked;
    if (condition) {
        if (checkBox.firstElementChild.value == 'Correspondence') {
            document.getElementById('Correspondence').setAttribute("disabled", "");
        }
        else if (checkBox.firstElementChild.value == 'Invoice') {
            document.getElementById('Invoice').setAttribute("disabled", "");
        }
        else if (checkBox.firstElementChild.value == 'Registered') {
            document.getElementById('Registered').setAttribute("disabled", "");
        }
        else if (checkBox.firstElementChild.value == 'Shipping') {
            document.getElementById('Shipping').setAttribute("disabled", "");
        }
        else if (checkBox.firstElementChild.value == 'Other') {
            document.getElementById('other').setAttribute("disabled", "");
        }
    }
    else {
        if (checkBox.firstElementChild.value == 'Correspondence') {
            document.getElementById('Correspondence').removeAttribute("disabled");
        } else if (checkBox.firstElementChild.value == 'Invoice') {
            document.getElementById('Invoice').removeAttribute("disabled");
        } else if (checkBox.firstElementChild.value == 'Registered') {
            document.getElementById('Registered').removeAttribute("disabled");
        } else if (checkBox.firstElementChild.value == 'Shipping') {
            document.getElementById('Shipping').removeAttribute("disabled");
        } else if (checkBox.firstElementChild.value == 'Other') {
            document.getElementById('other').removeAttribute("disabled");
        }
    }
}

function moreAddress(route) {
    // alert('hi');
    $.get(route, function (data) {
        $("#append-address-fields").html(data);
    });
}

$('#moreAddress').on('shown.bs.modal', function (e) {
    //alert('hi');
    moreAddress(moreAddressRoute);
})





// function ShowHideDiv(chkPassport) {
//     var dvPassport = document.getElementById("dvPassport");
//     dvPassport.style.display = chkPassport.checked ? "block" : "none";
// }










