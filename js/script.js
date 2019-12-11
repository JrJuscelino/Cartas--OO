jQuery(document).ready(function(){
    jQuery('#reiniciar').submit(function(){
        var dados = jQuery( this ).serialize();
        jQuery.ajax({
            type: "POST",
            url: "reiniciar.php",
            data: dados,
            /*success: function( data )
            {
                alert( data );
            },*/
        })
        
        window.location.reload();

        return false;
    });
    jQuery('#batalhar').submit(function(){
        var dados = jQuery( this ).serialize();
        jQuery.ajax({
            type: "POST",
            url: "batalha.php",
            data: dados,
            /*success: function( data )
            {
                alert( data );
            },*/
        })
        
        .done(function(msg){
            $("#resultado").html(msg);
        });
        
        return false;
    });
    
    jQuery('#personagem').submit(function(){
        var dados = jQuery( this ).serialize();
        jQuery.ajax({
            type: "POST",
            url: "personagem.php",
            data: dados,
            /*success: function( data )
            {
                alert( data );
            },*/
        })
        
        .done(function(msg){
            $("#cartas").append(msg);
        });
        
        return false;
    });

    jQuery('#personagem').submit(function(){
        var dados = jQuery( this ).serialize();
        jQuery.ajax({
            type: "POST",
            url: "cartasBatalha.php",
            data: dados,
            /*success: function( data )
            {
                alert( data );
            },*/
        })
        
        .done(function(msg){
            $("#carta1").html(msg);
            $("#carta2").html(msg);
        });
        
        return false;
    });
    
    jQuery('#local').submit(function(){
        var dados = jQuery( this ).serialize();
        jQuery.ajax({
            type: "POST",
            url: "local.php",
            data: dados,
            /*success: function( data )
            {
                alert( data );
            },*/
        })
        
        .done(function(msg){
            $("#cartas").append(msg);
        });
        
        return false;
    });
    
    jQuery('#local').submit(function(){
        var dados = jQuery( this ).serialize();
        jQuery.ajax({
            type: "POST",
            url: "cartasBatalha.php",
            data: dados,
            /*success: function( data )
            {
                alert( data );
            },*/
        })
        
        .done(function(msg){
            $("#carta1").html(msg);
            $("#carta2").html(msg);
        });
        
        return false;
    });

    jQuery('#veiculo').submit(function(){
        var dados = jQuery( this ).serialize();
        jQuery.ajax({
            type: "POST",
            url: "veiculo.php",
            data: dados,
            /*success: function( data )
            {
                alert( data );
            },*/
        })
        
        .done(function(msg){
            $("#cartas").append(msg);
        });
        
        return false;
    });

    jQuery('#veiculo').submit(function(){
        var dados = jQuery( this ).serialize();
        jQuery.ajax({
            type: "POST",
            url: "cartasBatalha.php",
            data: dados,
            /*success: function( data )
            {
                alert( data );
            },*/
        })
        
        .done(function(msg){
            $("#carta1").html(msg);
            $("#carta2").html(msg);
        });
        
        return false;
    });
});