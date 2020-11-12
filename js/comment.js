"use strict";


let app = new Vue({
    el: '#vue-task',
    data: {
        tasks: []  
    }
});

document.addEventListener('DOMContentLoaded', () => {
    getTasks();

    document.querySelector('#addComment').addEventListener('submit', e => {
        // evita el envio del form default
        e.preventDefault();

        addTask();
    });

});

function getTasks() {
    let url = "http://localhost/Web2FinalProject/ProyectoWeb2/api/comentario/51";
    fetch(url)
        .then(response => response.json())
        .then(tareas => app.tasks = tareas)
        .catch(error => console.log(error));
}

