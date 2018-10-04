document.addEventListener('DOMContentLoaded', function() {

    var animate = anime({
                targets: '.logodiv #aniframe_logo',
                strokeDashoffset: [anime.setDashoffset, 0],
                fill: [{value: 'rgba(0, 0, 0, 0)'}, {value: '#ff0000'}],
                easing: 'easeInOutSine',
                duration: 1500,                            
                loop: false
            }) 
    
    var continueButton = document.getElementById("continue");

    continueButton.addEventListener('click', function() {        
        continueButton.setAttribute("style", "background-color: #ff0000; border: #ff0000");        
        console.log(continueButton.attributes);
    });   
});
            

    