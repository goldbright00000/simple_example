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
    action: function (mode, data) 
        {
        if (mode === 'save') {
            console.log(data);
            source.push(data);
            $.ajax({
                url: a+'insert',
                type:"POST",
                data: {'name': data.name, 'password': data.password,'bith': data.bith,'adress': data.adress,'sex': data.sex},                
            })
        }
        if (mode === 'edit') 
        {
            for (var i = 0; i < source.length; i++) {
                if (source[i].id == data.id) {
                    source[i] = data;
                }
            }

            $.ajax({
            type:"POST",
            url: a+'update',
            data: {'id': data.id, 'name': data.name, 'password': data.password,'bith': data.bith,'adress': data.adress,'sex': data.sex},
            })
        }
        if(mode == 'delete'){
            $.ajax({
            type:"POST",
            url: a+'delete',
            data: {'id': data},
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
        url:a+'showData',
        data: {'index': index, 'start':start},
        dataType: 'json',
        success: function(data){
            source=data.data;
            resetTabullet();
            if (start==0) {$('#pre').hide();}
                else{$('#pre').show();}
            if (start+10>=data.total) {$('#next').hide();}
                else{$('#next').show();}
        }
    })
}

  
