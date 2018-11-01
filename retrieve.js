jsonReporte = [];
fetch('./archivo_plano.php').then((response)=>{
    return response.json()
}).then((data)=> {
    jsonReporte = data.data;
    //console.log(jsonReporte);
    jsonReporte.forEach(function(item) {
        console.log(item);
        var cuenta = item.length;
        
        
               
                if(item[0]== 'CCF69'){
                    
                }
                else{
                    for (var i = 0; i < cuenta; i++) {
                    console.log("Hay un error en la linea: " + i);
                }
                    
                    
                } 
            
            
        
        
        item.forEach(function(objeto){
           
        })
        
        
    });
})

