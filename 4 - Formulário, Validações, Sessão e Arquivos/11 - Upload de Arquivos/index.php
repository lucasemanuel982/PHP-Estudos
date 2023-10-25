<!-- Para realizar o upload de Arquivos é utilizado o método POST e colocar o atributo: "enctype="multipart/form-data""-->

<form method="POST" action="recebedor.php" enctype="multipart/form-data">
    <input type="file" name="arquivo" >
    <input type="submit" value="Enviar">

</form>