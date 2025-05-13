<h1>Alterar dúvida {{ $support->id }}</h1>

<form action="{{ route('supports.update', $support->id) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="subject" placeholder="Assunto" value="{{ $support->subject }}">
    <textarea name="body" cols="30" rows="5">{{ $support->body }}</textarea>
    <button type="submit">Enviar</button>
</form>
