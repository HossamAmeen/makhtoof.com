$(document).ready(function () {

    (function () {
        'use strict';
        window.addEventListener('load', function () {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

    $("#alert").fadeTo(2000, 500).slideUp(300, function () {
        $("#alert").slideUp(500);
    });



});
function resetNewPostForms() {
    $('#form').trigger('reset');
    $('.option select').removeAttr('name');
    $('.option select').removeAttr('required');
}



function GetPostData(cat, id) {
    //alert(cat+id);
    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url = "getPostInfo/" + id;
    console.log("ffff");
    var asynchronons = true;
    ajax.open(method, url, asynchronons);
    ajax.send();
    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var v = JSON.parse(this.responseText);
            console.log("#policeState" + cat);
            if (cat == 1) {
                $("#relative_relation" + cat).val(v['relative_relation']);
                $("#bloodPopupPost" + cat).val(v['blood_type']);
                $("#streetPopupPost" + cat).val(v['street']);
                $("#policeState" + cat).val(v['police']);
            }
            else if (cat == 3) {
                $("#bloodPopupPost" + cat).val(v['blood_type']);
                $("#streetPopupPost" + cat).val(v['street']);
                $("#ageBeforePopupPost" + cat).val(v['age_before']);
            }

            $("#idPopupPost" + cat).val(id);
            $("#namePopupPost" + cat).val(v['name']);
            $("#agePopupPost" + cat).val(v['age']);
            $("#genderPopupPost" + cat).val(v['gender']);
            $("#govPopupPost" + cat).val(v['governate']);
            
            $('.option select').hide();
            $('.option select').prop("selected", false);
            $('.' + v['governate']).attr("name", "city");
            $('.' + v['governate']).attr("required",'true');
            $('.' + v['governate']).show();

            $("#cityPopupPost"+cat+"."+v['governate']).val(v['city']);
            $("#dit_addressPopupPost" + cat).val(v['detailed_address']);
            $("#other_infoPopupPost" + cat).val(v['other_info']);

            

        }
    }
}
function delPost(id) {
    $("#idDelPost").val(id);
}

function GetID(id) {
    $("#postIdPop").text(id);
}
