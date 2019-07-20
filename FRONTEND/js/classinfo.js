$(document).ready(()=>{



    
$.ajax({
    type: "get",
    url: "./../../BACKEND/excel/LAN.csv",
    data: "text",
    dataType: "text",
    success: function (response) {
       
       

        var rows = response.split('\n');

        var jsonObj = [];
        var headers = rows[0].split(',');
        for(var i = 1; i < rows.length; i++) {
          var data = rows[i].split(',');
          var obj = {};
          for(var j = 0; j < data.length; j++) {
             obj[headers[j].trim()] = data[j].trim();
          }
          jsonObj.push(obj);
        }
        JSON.stringify(jsonObj);

        console.log(jsonObj);
       // console.log(jsonObj[0].Full_name);
        const sparrow=jsonObj[0];
        console.log(sparrow)

        jsonObj.map(spar=>{

            $("#root").append(`
            
            <div class = "formtitle">
	<table>
	
<tr>
<td>`+ spar.Full_name+`</td>
<td>`+ spar.Students_registration_no+`</td>
<td>`+ spar.Timestamp+`</td>
</tr>
    </table>
		</div>
            
            
            `)
   
        })
        
    }
});



$("[rel='reg']").on("click",(evt)=>{
evt.preventDefault();
evt.stopPropagation();
evt.stopImmediatePropagation();


})


})
