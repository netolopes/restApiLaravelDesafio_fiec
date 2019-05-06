{{$aux=0}}

            @foreach($clientes as $cli)

            <div class="form-group">
                <strong>ENDEREÇO ------- {{$aux +=1}} -------</strong>
            </div>
            <div class="form-group">
                <strong>cep:</strong>
                <input type="text" class="" id=""  name="cep" value="{{$cli->cep}}">
            </div>
            <div class="form-group">
                <strong>Logradouro:</strong>
                <input type="text" class="" id=""  name="logradouro" value="{{$cli->logradouro}}">
            </div>
            <div class="form-group">
                <strong>Complemento:</strong>
                <input type="text" class="" id=""  name="complemento" value="{{$cli->complemento}}">
            </div>
            <div class="form-group">
                <strong>Localidade:</strong>
              <input type="text" class="" id=""  name="localidade" value="{{$cli->localidade}}">
            </div>
            <div class="form-group">
                <strong>UF:</strong>
              <input type="text" class="" id=""  name="uf" value="{{$cli->uf}}">
            </div>
            <div class="form-group">
                <strong>Tipo:</strong>
              Res=1,Com=2<input type="text" class="" id=""  name="tipo" value="{{$cli->tipo}}">
            </div>

              @endforeach
