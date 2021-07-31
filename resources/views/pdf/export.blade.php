<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pdf Usuarios</title>
    <style>
        #us {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100;
        }
        #us td, #us th{
            border: 1px solid #ddd;
            padding: 8px;

        }
        #us th{
            padding-top: 12px;
            padding-bottom: 12px;
            text-align:left;
            background-color: #4CAF50;
            color: #fff;
        }
        
        
    </style>
</head>
<body>
    
    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="us">
                                <thead class="thead">
                                    <tr>
                                        <th>Id</th>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Correo</th>
										<th>Clave</th>
										<th>Grupo</th>
										<th>Empresa</th>
                                            

                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            
                                            <td>{{ $user->id }}</td>
											<td>{{ $user->nombre }}</td>
											<td>{{ $user->apellido }}</td>
											<td>{{ $user->correo }}</td>
											<td>{{ $user->clave }}</td>
											<td>{{ $user->grupo }}</td>
											<td>{{ $user->empresa_id }}</td>
                                            

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


</body>
</html>