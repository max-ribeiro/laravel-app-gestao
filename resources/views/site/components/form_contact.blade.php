{{ $slot }}
<form method="POST" action="{{ route('site.contact') }}" >
    @csrf
    <input value="{{old('name')}}" type="text" name="name" placeholder="Nome" class="{{ $class }}">
    <br>
    <input value="{{old('tel')}}" type="text" name="tel" placeholder="Telefone" class="{{ $class }}">
    <br>
    <input value="{{old('email')}}" type="text" name="email" placeholder="E-mail" class="{{ $class }}">
    <br>
    <select name="subject" class="{{ $class }}">
        @foreach ($subjects as $key => $subject)
            <option value="{{$key}}" selected="{{old('subject') == $key}}">{{$subject}}</option>
        @endforeach
    </select>
    <br>
    <textarea name="" class="{{ $class }}">
        @if(old('message'))
            {{old('message')}}
        @else
            Preencha aqui sua mensagem
        @endif
    </textarea>
    <br>
    <button type="submit" class="{{ $class }}">ENVIAR</button>
</form>

<div style="position:absolute;top: 0; left:0; width:100%; background-color:#000; color:red">
    {{ print_r($errors) }}
</div>
