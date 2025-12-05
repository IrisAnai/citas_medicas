<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>Document</title>
</head>
<body>
<center>
    <h1>Agendar cita</h1>
    <a href="./menu.php"><button>Regresar</button></a>
    <form action="../php/proceso.php" method="post">
        <table>
            <tr>
                <td>Paciente:</td>
                <td><input id="paciente" name="paciente" type="text"></td>
            </tr>
            <tr>
                <td>Medico:</td>
                <td><input id="medico" type="text" name="medico"></td>
            </tr>
            <tr>
                <td>Fecha:</td>
                <td><input id="fecha" type="date" name="fecha"></td>
            </tr>
            <tr>
                <td>Hora:</td>
                <td><input id="hora" type="time" name="hora"></td>
            </tr>
            <tr>
                <td>Especialidad del medico:</td>
                <td>
                   <select name="profesion" id="profesion">
                        <option value="medico_familiar">Médico familiar</option>
                        <option value="medico_interno">Médico interno</option>
                        <option value="pediatria">Pediatría</option>
                        <option value="ginecologo">Ginecólogo</option>
                        <option value="cirujano_general">Cirujano general</option>
                        <option value="dermatologo">Dermatólogo</option>
                        <option value="cardiologo">Cardiólogo</option>
                        <option value="otorrinolaringologo">Otorrinolaringólogo</option>
                        <option value="oftalmologo">Oftalmólogo</option>
                        <option value="psiquiatra">Psiquiatra</option>
                        <option value="ortopedista">Ortopedista</option>
                        <option value="psicologo">Psicólogo</option>
                    </select>
                </td>
            </tr>
        </table>
        Registrar:<input id="Boton" name="Boton" type="submit">
    </form>
</center>
</body>
</html>
