
    ///Table Index
    var addSerialNumber = function () {
        $("#table_body tr").each(function (index) {
            $(this).find('td:nth-child(1)').html(index + 1);
        });
    };



// Fetching User Services
$(document).ready(function ()
{
    var db = firebase.database();
    var ref1 = db.ref("Services");
    var addSerial_Number = function ()
    {
        $("#service_table_body tr").each(function (index)
        {
            $(this).find('td:nth-child(1)').html(index + 1);
        });
    };
    ref1.orderByKey().on("value", (snapshot) =>
    {
        snapshot.forEach((childSnapshot) =>
        {
            childSnapshot.forEach((childrenSnapshot) =>
            {
                var name = childrenSnapshot.child("name").val();
                var date = childrenSnapshot.child("date").val();
                var location = childrenSnapshot.child("location").val();
                var odometer = childrenSnapshot.child("odometer").val();
                var time = childrenSnapshot.child("time").val();
                var type_service = childrenSnapshot.child("type_service").val();
                var notes = childrenSnapshot.child("notes").val();
                $("#service_table_body").append("<tr><td></td><td>" + name + "</td><td>" + date + "</td><td style=\"white-space:pre-wrap; word-wrap:break-word\">" + location + "</td><td>" + odometer + "</td><td>" + time + "</td><td>" + type_service + "</td><td>" + notes + "</td>");
                addSerial_Number();

            });
        });
    });
});




