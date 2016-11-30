var username=document.getElementById("name").value;
var pw= document.getElementById("pw").value;

$.ajax({
      type:"GET",
      url:"http://hostname/projectfolder/webservicename.php?callback=jsondata&web_name="+name+"&web_address="+address+"&web_age="+age,
      crossDomain:true,
      dataType:'jsonp',
      success: function jsondata(data)
           {

            var parsedata=JSON.parse(JSON.stringify(data));
            var logindata=parsedata["Status"];

            if("sucess"==logindata)
            {   
                alert("success");
            }
            else
            {
                alert("failed");
            }
          }  
    }); 