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
                <div class="row gap-5">
                    <div class="col-12 text-center">
                        <h1 class="fw-bold text-danger">ToDoList</h1>
                    </div>
                    <div class="col-12 text-center">
                    <button class="btn btn-primary" @click="chiamata">Clicca per generare la lista</button>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-6">
                        <ul>
                            <template v-for="element in toDo">
                                <li>
                                    <span>{{ element.name }}</span>
                                </li>
                            </template>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul>
                            <template v-for="list in toDoBtn">
                                <li>
                                    <span>
                                        {{ list.name }} , {{ list.description }} :
                                        <span v-if="list.status==false" class="text-danger">{{ list.status }} &cross;</span> 
                                        <span v-if="list.status==true" class="text-success">{{ list.status }} &#10003;</span> 
                                    </span>
                                </li>
                            </template>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="./main.js"></script>
</body>
</html>

