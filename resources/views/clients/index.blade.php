@section('content')
    @extends('layout')
    <style>
        .container {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 0;
            margin-bottom: 1.5rem;
        }


        .btn {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            margin-bottom: 20px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }


        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th {
            background-color: #f8f9fa;
            color: #555;
            font-weight: 600;
            text-align: left;
            padding: 12px;
            border-bottom: 2px solid #ddd;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #eee;
            color: #333;
        }

        tr:hover td {
            background-color: #f1f7ff;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: white;
            margin: 15% auto;
            padding: 20px;
            border-radius: 8px;
            width: 90%;
            max-width: 400px;
            text-align: center;
        }

        .modal-buttons {
            margin-top: 20px;
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        .modal-btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s;
        }

        .modal-btn-cancel {
            background-color: #6c757d;
            color: white;
        }

        .modal-btn-cancel:hover {
            background-color: #5a6268;
        }

        .modal-btn-confirm {
            background-color: #dc3545;
            color: white;
        }

        .modal-btn-confirm:hover {
            background-color: #c82333;
        }
    </style>

    <div class="container">
        <h1>Clientes</h1>

        <a href="{{ route('clients.create') }}" class="btn">Añadir Cliente</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Edad</th>
                    <th>Altura</th>
                    <th>Peso</th>
                    <th>Objetivo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->id }}</td>
                        <td>{{ $client->nombre }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->edad}}</td>
                        <td>{{ $client->altura }}</td>
                        <td>{{ $client->peso }}</td>
                        <td>{{ $client->objetivo}}</td>
                        <td>
                            <a href="{{ route('clients.edit', $client->id) }}" class="btn-action btn-edit">Editar</a>
                            <button onclick="openDeleteModal({{ $client->id }}, '{{ $client->nombre }}')"
                                class="btn-action btn-delete">Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div id="deleteModal" class="modal">
        <div class="modal-content">
            <h3>¿Confirmar eliminación?</h3>
            <p>¿Estás seguro de que deseas eliminar al cliente <strong id="clientName"></strong>?</p>

            <div class="modal-buttons">
                <button class="modal-btn modal-btn-cancel" onclick="closeDeleteModal()">Cancelar</button>
                <form id="deleteForm" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="modal-btn modal-btn-confirm">Eliminar</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function openDeleteModal(clientId, clientName) {
            document.getElementById('clientName').textContent = clientName;
            document.getElementById('deleteForm').action = '/clients/' + clientId;
            document.getElementById('deleteModal').style.display = 'block';
        }

        function closeDeleteModal() {
            document.getElementById('deleteModal').style.display = 'none';
        }
    </script>

@endsection