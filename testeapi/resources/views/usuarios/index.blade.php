<ul class="nav-bar">
  <li class="nav-item">
    <a class="nav-link" href="{{ route('usuarios.index') }}">Listar Usuarios</a>
    <a class="nav-link" href="{{ route('usuarios.create') }}">Criar Usuarios</a>
  </li>
</ul>

<div class="container">
  <div class="col">

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Comandos</th>
        </tr>
      </thead>
      <tbody>

        @foreach($usuarios as $usuario)

        <tr>
          <th scope="row">{{$usuario['id']}}</h3>
          </th>
          <td>{{$usuario['name']}}</td>
          <td>
            <a href="{{ route('usuarios.show', ['usuario' => $usuario['id']]) }}">detalhes</a>
            <a href="{{ route('usuarios.edit', ['usuario' => $usuario['id']]) }}">Editar</a>
            <a href="#">Apagar</a>
            <a href="{{ route('rota.posts', ['id' => $usuario['id']]) }}">posts</a>
          </td>
        </tr>

        @endforeach

      </tbody>
    </table>
  </div>
</div>