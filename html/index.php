<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtro con DIV y SPAN</title>
    
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f4f4f9;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .filters button {
            padding: 10px 15px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #28a745; /* Nuevo color para diferenciar */
            color: white;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .filters button:hover {
            background-color: #1e7e34;
        }
        
        /* Estilo para el contenedor de los spans */
        #itemContainer {
            display: flex;
            flex-wrap: wrap; /* Para que los elementos se organicen en varias líneas */
            justify-content: center;
            margin-top: 20px;
        }
        
        /* Estilo para cada elemento span */
        #itemContainer span {
            background-color: #e9ecef;
            margin: 8px;
            padding: 10px 15px;
            border-radius: 5px;
            text-align: center;
            /* Estos estilos hacen que el span se comporte como un bloque */
            display: inline-block; 
            min-width: 100px;
            transition: opacity 0.3s, transform 0.3s;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        /* Clase para ocultar los elementos */
        .hidden {
            display: none !important;
        }
    </style>
    </head>
<body>

    <div class="container">
        <h2>Filtro de Alimentos (DIV/SPAN)</h2>

        <div class="filters">
            <button onclick="filterItems('fruta')">Mostrar Frutas 🍎</button>
            <button onclick="filterItems('verdura')">Mostrar Verduras 🥕</button>
            <button onclick="filterItems('todos')">Mostrar Todos 🧺</button>
        </div>

        <div id="itemContainer">
            <span data-category="fruta">Manzana</span>
            <span data-category="verdura">Brócoli</span>
            <span data-category="fruta">Naranja</span>
            <span data-category="verdura">Zanahoria</span>
            <span data-category="fruta">Plátano</span>
            <span data-category="verdura">Espinaca</span>
        </div>
    </div>

    <script>
        /**
         * Filtra los elementos (spans) basándose en la categoría.
         * Se usa '#itemContainer span' para seleccionar todos los spans dentro del div.
         * @param {string} category - La categoría a mostrar ('fruta', 'verdura', o 'todos').
         */
        function filterItems(category) {
            // 1. Obtener todos los elementos span dentro del div contenedor
            // NOTA: El selector ha cambiado de '#itemList li' a '#itemContainer span'
            const items = document.querySelectorAll('#itemContainer span');

            // 2. Iterar sobre cada elemento
            items.forEach(item => {
                const itemCategory = item.getAttribute('data-category');

                // 3. Lógica de filtrado
                if (category === 'todos' || itemCategory === category) {
                    // Mostrar: Quitar la clase 'hidden'
                    item.classList.remove('hidden');
                } else {
                    // Ocultar: Añadir la clase 'hidden'
                    item.classList.add('hidden');
                }
            });
        }
    </script>
    </body>
</html>
