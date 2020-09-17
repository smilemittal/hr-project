let contactType;
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

function selectCountry(countryID , route) {
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: route,
        method: 'get',
        data: {'id': countryID},
        success: function (result) {
            if (result != "error") {
                document.getElementById('putState').innerText = "";
                $.each(result, function (key, value) {
                    $("#putState").append(
                        '<option value=' + value.id + '>' + value.value + '</option>'
                    );
                });


            } else {
                document.getElementById('putState').innerText = "";
                $("#putState").append(
                    '<option selected disabled>Record not found</option>'
                );
            }
        }
    });
}

function selectState(stateID , route) {
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: route,
        method: 'get',
        data: {'id': stateID},
        success: function (result) {
            if (result != "error") {
                document.getElementById('putCity').innerText = "";
                $.each(result, function (key, value) {
                    $("#putCity").append(
                        '<option value=' + value.id + '>' + value.value + '</option>'
                    );
                });


            } else {
                document.getElementById('putCity').innerText = "";
                $("#putCity").append(
                    '<option selected disabled>Record not found</option>'
                );
            }
        }
    });
}

function postDetail(contactInfo) {
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
                // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
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
                        recordID=result;
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

function previewImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#targetImage').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

function previewChildImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#targetChildImage').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

function selectChildCountry(countryID , route) {
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: route,
        method: 'get',
        data: {'id': countryID},
        success: function (result) {
            if (result != "error") {
                document.getElementById('putChildState').innerText = "";
                $.each(result, function (key, value) {
                    $("#putChildState").append(
                        '<option value=' + value.id + '>' + value.value + '</option>'
                    );
                });


            } else {
                document.getElementById('putChildState').innerText = "";
                $("#putChildState").append(
                    '<option selected disabled>Record not found</option>'
                );
            }
        }
    });
}

function selectChildState(stateID , route) {
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: route,
        method: 'get',
        data: {'id': stateID},
        success: function (result) {
            if (result != "error") {
                document.getElementById('putChildCity').innerText = "";
                $.each(result, function (key, value) {
                    $("#putChildCity").append(
                        '<option value=' + value.id + '>' + value.value + '</option>'
                    );
                });


            } else {
                document.getElementById('putCity').innerText = "";
                $("#putChildCity").append(
                    '<option selected disabled>Record not found</option>'
                );
            }
        }
    });
}

function childForm(route) {
    let companyName = document.getElementById('company-name').value;
    if(companyName) {
        let form = $("#child-form").serialize();
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: route,
            method: 'get',
            enctype:'multipart/form-data',
            data: {'data': form},
            success: function (result) {
                if (result != "error") {

                } else {

                }
            }
        });
    }
    else {
        document.getElementById('error-for-sub-child').style.display = 'block';
        setTimeout(function () {
            document.getElementById('error-for-sub-child').style.display = 'block';
        }, 3000);
    }
}

function selectMoreCountry(countryID , route) {
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: route,
        method: 'get',
        data: {'id': countryID},
        success: function (result) {
            if (result != "error") {
                document.getElementById('putMoreState').innerText = "";
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

function selectMoreState(stateID , route) {
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: route,
        method: 'get',
        data: {'id': stateID},
        success: function (result) {
            if (result != "error") {
                document.getElementById('putMoreCity').innerText = "";
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








