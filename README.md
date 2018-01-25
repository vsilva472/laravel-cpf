# Validação CPF com Laravel

## Descrição

LaravelCPF é uma extensão do validator do Laravel para validar CPFs (independente se o valor possui máscara aplicada 999.999.999-99 ou não) de forma simples.


## Requisitos
* [PHP](https://php.net) 5.6+
* [Laravel](https://laravel.com/) 5.1+


## Instalação 

+ Executando o comando para adicionar a dependência automaticamente
```php
composer require vsilva472/laravel-cpf
```

* Baseado em uma instalação limpa abra o arquivo `config/app.php` navegue até a seção `providers` e insira no final
```php
 Vsilva472\LaravelCPF\LaravelCPFServiceProvider::class,
 ``` 
 
* Publicar os arquivos de idiomas com as mensagens de erro:
```php
 php artisan vendor:publish --tag=lcpf_lang
```



> Você poderá customizar as mensagens de erro. Para isso, abra o arquivo `/resources/lang/{lang}/cpf.php`, onde **{lang}** é o código do idioma (ex: pt-br) que você deseja alterar.



## Como utilizar
A forma de utilização é a mesma de qualquer outra regra pré-existente. O nome do validador para cpf é "cpf". Veja um exemplo básico:

```php
$request->validate([
    'field_name' => ['cpf'],
]);
```

Este pacote funciona também com [Form Resquest Validations](https://laravel.com/docs/5.5/validation#form-request-validation), veja um exemplo abaixo

```php
/**
 * Get the validation rules that apply to the request.
 *
 * @return array
 */
public function rules()
{
    return [
        'title' => 'required|unique:posts|max:255',
        'body' => 'required',
        
        // ... some other rules here
        
        'field_name' => 'cpf'
    ];
}
```

Para mais informações sobre outras formas de validação consulte a [documentação oficial](https://laravel.com/docs/5.5/validation) do Laravel.


## Changelog
Para consultar o log de alterações acesse o arquivo [CHANGELOG.md](https://github.com/vsilva472/laravel-cpf/blob/master/CHANGELOG.md)

## Licença
MIT