const encabezados = document.querySelectorAll('.contenedor .encabezado');

const observer = new IntersectionObserver((entradas, observador) => {
    entradas.forEach(entrada => {
        if(entrada.isIntersecting){
        const id = '#' + entrada.target.id;
        console.log(id);
        }
    });
},{ 
    threshold: 1,
    rootMargin: '0px'
});

encabezados.forEach(encabezado => {
    obrserver.observe(encabezado);
});