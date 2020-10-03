<main>
<form action="save" method="POST">
       <h1>Ingrese los datos</h1>
       <label for="nombre">Nombre</label>
        <input  type="text" name="nombre" require> 
        <label for="apellido">Apellido:</label>
        <input  type="text"  name="apellido" require>
        <label for="edad">Edad:</label>
        <input  type="number" name="edad" require>
        <label for="email">Email:</label>
        <input  type="text"  name="email" require>
        <div>
        <button class="btnGuardar" type="submit" value="Guardar">Guardar</button>
        <button class="btnBorrar" type="submit">Borrar</button>
        </div>
   

    </form>
</main>