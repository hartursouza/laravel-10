<h1>Dúvida {{ $support->id }}</h1>

<ul>
    <li>
        <strong>Assunto:</strong> {{ $support->subject }}
    </li>
    <li>
        <strong>Status:</strong> {{ $support->status }}
    </li>
    <li>
        <strong>Descrição:</strong> {{ $support->body }}
    </li>
    <li>
        <strong>Criado em:</strong> {{ $support->created_at }}
    </li>
</ul>

<form action=" {{ route('supports.destroy', $support->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Deletar</button>
</form>
