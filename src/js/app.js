document.addEventListener('DOMContentLoaded', function(){
    eventListener();

    darkMode();
});

function darkMode(){
    const prefiereDarMode = window.matchMedia('(prefers-color-scheme: dark)');

    if(prefiereDarMode){
        document.body.classList.add('dark-mode');
    }else{
        document.body.classList.remove('dark-mode');
    }

    prefiereDarMode.addEventListener('change', function(){
        if(prefiereDarMode){
            document.body.classList.add('dark-mode');
        }else{
            document.body.classList.remove('dark-mode');
        }
    });


    const darkModeBoton = document.querySelector('.dark-mode-boton');
    darkModeBoton.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode');
    })
}

function eventListener(){
    const mobilMenu = document.querySelector('.mobile-menu');

    mobilMenu.addEventListener('click', navegacionResponsiva);
}

function navegacionResponsiva(){
    const navegacion = document.querySelector('.navegacion');

    if(navegacion.classList.contains('mostrar')){
        navegacion.classList.remove('mostrar');
    }else{
        navegacion.classList.add('mostrar');

    }
}