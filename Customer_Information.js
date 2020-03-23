// Fetching User Information
$(document).ready(function () {
    var rootRef = firebase.database().ref().child("Users");
    rootRef.on("child_added", snap => {
        var child_key = snap.val();
        var email = child_key.email;
        var number = child_key.mobnum;
        var name = child_key.name;
        $("#table_body").append("<tr><td></td><td>" + name + "</td><td>" + email + "</td><td>" + number + "</td></tr>");
        addSerialNumber();
        ///
    });
    ///Table Index
    var addSerialNumber = function () {
        $("#table_body tr").each(function (index) {
            $(this).find('td:nth-child(1)').html(index + 1);
        });
    }
    ///
    //Total Number Of Users in User Node
    var ref = firebase.database().ref("Users");
    ref.once("value").then(function (snapshot) {
        var counter = snapshot.numChildren();
        $("#label").append(counter);
    });
});


