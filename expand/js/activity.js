var dataString = ""
$.get("https://freeipapi.com/api/json", function (datas) {
    for (const i in datas) {
        dataString += `"${i}": "${datas[i]}",\n`

    }
    
    $.ajax({
        url: "../expand/activity.php",
        method: "POST",
        data: {
            ip: datas["ipAddress"],
            data: dataString
        },
        success: function(data) {
            console.log(data)
        }
    })

});