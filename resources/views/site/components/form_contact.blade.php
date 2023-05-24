{{ $slot }}
<form method="POST" action="{{ route('site.contact') }}" >
    @csrf
    <input type="text" name="name" placeholder="Nome" class="{{ $class }}">
    <br>
    <input type="text" name="tel" placeholder="Telefone" class="{{ $class }}">
    <br>
    <input type="text" name="email" placeholder="E-mail" class="{{ $class }}">
    <br>
    <select name="subject" class="{{ $class }}">
        <option value="1">Qual o motivo do contato?</option>
        <option value="2">Dúvida</option>
        <option value="3">Elogio</option>
        <option value="4">Reclamação</option>
    </select>
    <br>
    <textarea name="message" class="{{ $class }}">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="{{ $class }}">ENVIAR</button>
</form>

<div style="position:absolute;top: 0; left:0; width:100%; background-color:#000; color:red">
    {{ print_r($errors) }}
</div>
