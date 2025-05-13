<h1>
    Listagem de Suportes
</h1>

<a href="{{ route('supports.create') }}">Nova Dúvida</a>

<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
        <th></th>
    </thead>
    <tbody>
        @foreach ($supports as $support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->status }}</td>
                <td>{{ $support->body }}</td>
                <td>
                    <a href=" {{ route('supports.show', $support->id) }}"> > </a>
                    <a href=" {{ route('supports.edit', $support->id) }}">edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
