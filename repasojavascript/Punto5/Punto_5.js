let contador=0;
let quintovalor=0;
while (contador < 4) {
    window.prompt ("Ingrese un número");
    contador = contador + 1;
    
}
if (contador = 4) {
    quintovalor = window.prompt ("Ingrese un número")
    contador = contador + 1;
}
 
document.write("Fin del programa"); 

document.write("<br> Contador ya no es menor a ", contador);

document.write("<br> Último valor ingresado ", quintovalor);