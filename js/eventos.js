window.onload = function(){
    document.addEventListener("deviceready",onDeviceReady,false);
};
 
// Cuando el dispositivo este listo
function onDeviceReady(){
    // accedemos a los eventos de Lungo
    Lungo.Events.init({
 
    });

};
    
    // Lungo.ready(function() {

    //     Lungo.Router.article("main", "art_2");
        
    //     setTimeout(function(){
    //         Lungo.Router.article("main", "art_1");
    //     }, 1000);

    // })