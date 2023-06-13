<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoList</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
    <div id="app">
        <div class="container-fluid bg-primary py-5" style="height: 100vh;">
            <div class="container bg-white py-5">
                <div class="row">
                    <div class="col-12 text-center my-3">
                        <h1 class="fw-bold text-danger">ToDoList</h1>
                    </div>
                    <div class="col-12 text-center">
                        <button class="btn btn-primary mx-1" @click="chiamata">Clicca per generare la lista</button>
                        <button class="btn btn-danger mx-1" @click="deleteAllTasks">Elimina tutte le task</button>
                        <div class="col-auto my-3 text-start">
                            <ul>
                                <template v-for="(list, c) in toDo">
                                    <li @click="deleteItem(c)">
                                        <span>
                                            <span v-if="list.status==false" class="text-succes"> {{ list.name }} {{ list.status }}</span> 
                                            <span v-else class="text-danger"><del>{{ list.name }} {{ list.status }}</del></span> 
                                        </span>
                                    </li>
                                </template>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 text-center my-5">
                        <div class="col-8 m-auto">
                            <label for="">Inserisci il titolo della task</label>
                            <input class="form-control mb-3" type="text" placeholder="Titolo" aria-label="default input example" v-model="newTask">
                        </div>
                        <button class="btn btn-success" @click="addNewTask">Clicca per aggiungere una nuova task</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="./main.js"></script>
</body>
</html>

