<form method="POST" action="{{ route('site.contact') }}" >
    @csrf
    <input type="text" name="name" placeholder="Nome" class="borda-preta">
    <br>
    <input type="text" name="tel" placeholder="Telefone" class="borda-preta">
    <br>
    <input type="text" name="email" placeholder="E-mail" class="borda-preta">
    <br>
    <select name="subject" class="borda-preta">
        <option value="1">Qual o motivo do contato?</option>
        <option value="2">Dúvida</option>
        <option value="3">Elogio</option>
        <option value="4">Reclamação</option>
    </select>
    <br>
    <textarea name="msg" class="borda-preta">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>
