$(document).ready(function(){
    var index=10;
    var start=0;
    page_load(index,start);
        
    $('#pre').on('click',function(){
        start=start-10;
        page_load(index,start);
    });
    $('#next').on('click',function(){
        start=start+10;
        page_load(index,start);
    });
    
});

var source;
function resetTabullet() {
$("#table").tabullet({
    data: source,
    action: function (mode, data) {
        console.dir(mode);
        if (mode === 'save') {
            source.push(data);
            
            $.ajax({
            type:"POST",
            url:"dBinsert.php",
            data: {'name': data.name, 'password': data.password,'bith': data.bith,'adress': data.adress,'sex': data.sex},
            dataType: 'json',
            success: function(data){
                
        }
    })
        }
        if (mode === 'edit') {
            for (var i = 0; i < source.length; i++) {
                if (source[i].id == data.id) {
                    source[i] = data;
                }
            }

            $.ajax({
            type:"POST",
            url:"update.php",
            data: {'id': data.id, 'name': data.name, 'password': data.password,'bith': data.bith,'adress': data.adress,'sex': data.sex},
            dataType: 'json',
            success: function(data){
                
            }
        })
    }
        if(mode == 'delete'){
            $.ajax({
            type:"POST",
            url:"delete.php",
            data: {'id': data},
            dataType: 'json',
            success: function(data){
                
            }
            })
            for (var i = 0; i < source.length; i++) {
                if (source[i].id == data) {
                    source.splice(i,1);
                    break;
                }
            }

        }
        resetTabullet();
     }
  })
}


    
// });

function page_load(index,start) {
    $.ajax({
        type:"POST",
        url:"showData.php",
        data: {'index': index, 'start':start},
        dataType: 'json',
        success: function(data){
            // source={'data':data.data, 'index':start+1};
            source=data.data;
            resetTabullet();
            if (start==0) {$('#pre').hide();}
                else{$('#pre').show();}
            if (start+10>=data.total) {$('#next').hide();}
                else{$('#next').show();}
        }
    })
}

var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  
