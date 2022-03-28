<?php include 'header.php' ?>

<div class="container mt-3">
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Coder</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Obligatorio.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Consulta</label>
            <input type="text" class="form-control" id="consulta">
            <div id="emailHelp" class="form-text">Obligatorio.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Fecha/Hora</label>
            <input type="datetime-local" class="form-control" id="time">
            <div id="emailHelp" class="form-text">Obligatorio.</div>

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Teléfono</label>
            <input type="number" class="form-control" id="time">
            <div id="emailHelp" class="form-text">Obligatorio.</div>

            <div class="mb-3 mt-4">
                <a href="/CRUDo">
                <button type="button" class="btn btn-secondary align-item-center">Atras</button>
            </a>
            <button type="submit" class="btn btn-primary ">Enviar</button>
        </div>
            

        </div>

        <?php include 'footer.php' ?>