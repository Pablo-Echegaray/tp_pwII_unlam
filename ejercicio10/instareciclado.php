<?php include('../ejercicio8/header.php'); ?>
    <main>
        <section class="pdf">
            <iframe src="../static/pdfs/enunciado10.pdf" width="100%" height="600px" frameborder="0"></iframe>
        </section>
        <section id="imagenes">
            <?php include('showNameimg.php'); ?>
        </section>
        <br>
        <br>
        <section id="form">
            <br>
            <h3>Inline Form</h3>
            <hr>
            <br>
            <form action="../ejercicio9/upload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="archivo" id="archivo">
                <br>
                <br>
                Nombre: <input type="text" name="nombre">
                <input type="submit" value="Publicar" name="submit">
            </form>
        </section>
    </main>

<?php include('../ejercicio8/footer.php'); ?>