<h1>Fornecedor</h1>

{{-- COMENTÁRIOS --}}

@php
    
@endphp

{{-- RETORNA TRUE SE A VARIÁVEL ESTIVER VAZIA --}}
{{-- NO PHP O EMPTY ENTENDE COMO VAZIO '', 0, 0.0, null, false, array(), $var --}}
Fornecedor: {{ $fornecedores[1]['nome']}}
<br>
Status: {{ $fornecedores[1]['status']}}
<br>
@isset($fornecedores[1]['cnpj'])
    CNPJ: {{ $fornecedores[1]['cnpj']}}
    @empty($fornecedores[1]['cnpj'])
        Vazio
    @endempty
    <br>
@endisset

{{-- VERIFICA SE ESTÁ DEFINIDA, VÁLIDO PARA POSSIÇÃO DE ARRAY TAMBÉM --}}
{{-- @isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome']}}
    <br>
    Status: {{ $fornecedores[0]['status']}}
    <br>
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[1]['cnpj']}}
        <br>
    @endisset
@endisset --}}

{{-- O INVERSO DO IF, VERIFICA SE A CONDIÇÃO FOR FALSE --}}
{{-- @unless($fornecedores[0]['status'] == 'A')
    <P>Fornecedor Inativo</P>
@endunless --}}

{{-- CONDIÇÃO NORMAL, IF, ELSEIF E ELSE - VERIFICA SE A CONDIÇÃO É TRUE --}}
{{-- @if(count($fornecedores) > 0 && count($fornecedores) <= 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>    
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif --}}