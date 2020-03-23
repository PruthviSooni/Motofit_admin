
    ///Table Index
    var addSerialNumber = function () {
        $("#table_body tr").each(function (index) {
            $(this).find('td:nth-child(1)').html(index + 1);
        });
    };


//Fectching Breakdown Service
$(document).ready(function ()
{
    var db = firebase.database();
    var ref1 = db.ref("BreakDown_Service");
    var addSerial_Number = function ()
    {
        $("#breakdown_service_table_body tr").each(function (index)
        {
            $(this).find('td:nth-child(1)').html(index + 1);
        });
    };
    ref1.orderByKey().on("value", (snapshot) =>
    {
        snapshot.forEach((childSnapshot) =>
        {
            childSnapshot.forEach((childrenSnapshot) =>
            {   if (childrenSnapshot.val()== null){
                $("#notfound").append("Data Is Null");
            }else{
                var name = childrenSnapshot.child("User_Name").val();
                var date_and_time = childrenSnapshot.child("Date_and_Time").val();
                var bike_brand = childrenSnapshot.child("Brand").val();
                var bike_model = childrenSnapshot.child("Model").val();
                var type_service = childrenSnapshot.child("Dropdown_service").val();
                var location = childrenSnapshot.child("Location").val();
                $("#breakdown_service_table_body").append("<tr><td></td><td>" + name + "</td><td>" + date_and_time + "</td><td style=\"white-space:pre-wrap; word-wrap:break-word\">" + bike_brand + "</td><td>" + bike_model + "</td><td>" + type_service + "</td><td>" + location + "</td>");
                addSerial_Number();
            }
                ///
            });
        });
    });
});

