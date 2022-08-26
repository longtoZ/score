const userInfoData = JSON.stringify({
    'language': window.navigator.language,
    'userAgent': window.navigator.userAgent,
    'mobile': window.navigator.userAgentData.mobile,
    'screen': {
        'width': window.screen.width,
        'height': window.screen.height,
        'colorDepth': window.screen.colorDepth,
        'orientation': window.screen.orientation.type
    }
})

const time = (new Date()).toString()

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
            data: dataString,
            userInfo: userInfoData,
            time: time
        },
        success: function(data) {
            
        }
    })

});