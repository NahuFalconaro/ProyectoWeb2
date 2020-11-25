"use strict";
let app = new Vue({
    el: '#vue-task',
    data: {
        tasks: [],
        loged: "loged"
    },
    methods: {
        deleteComment: function (id){
            //let id = document.querySelector('.elComentario').id;//lo trae, hay que arreglar el tema del id, trae todos, por el hecho que tienen todos el msimo name
           //obtuve el id pero con onclick, buscar forma de hacerlo sin eso
           let url = "api/comen/" + id;
           console.log(url);
           fetch(url, {
                    method:'DELETE'
            })
        
            .then(function(r){
                getTasks();
                })
            .catch(error => console.log(error));
        }
      }  
});


document.addEventListener('DOMContentLoaded', () => {
    getTasks();
    document.querySelector('#form-comment').addEventListener('submit', e => {
        // evita el envio del form default
        e.preventDefault();
        
        addTask();
    });
    

    
});

function getTasks() {
    let id = document.querySelector(".ids").id;
    let log = document.querySelector(".loged").id;
    let url = "api/comentario/" + id;
    fetch(url)
    .then(response => response.json())
    .then(tareas => app.tasks = tareas)
    //.then(function(json){
        //console.log(json.length);//devuelve cantidad del contenido de este llamado api, en este caso tiene un id, solo trae los que tiene id
      //  console.log(json);//este devuelve el contenido en forma de arreglo de json
    //})
    .catch(error => console.log(error));

    app.loged = log;
}

function addTask(){
    
    let task = {
            comment: document.querySelector('#comment').value,
            score: document.querySelector('#score').value,
            id_product: document.querySelector(".ids").id 
    }
    console.log(task);
    fetch("api/comentario", {
        method: 'POST',
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(task)
    })

    .then(response => response.json())
    .then(function(r){
        getTasks();
        })
    .catch(error => console.log(error));
}


