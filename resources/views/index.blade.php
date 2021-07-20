{{-- @extends('layouts.hello')
<style>
    th {
        background-color: black;
        color: white;
        padding: 5px 30px;
    }
    td {
        border: 1px solid black;
        padding: 5px 30px;
        text-align: center;
    }
    button {
        padding: 10px 20px;
        background: black;
        color: white;
        }
</style> --}}
@section('title', 'index.blade.php')

@section('content')
<form action="/index" method="">
<table>
    @csrf
    <tr>
        <th>
            氏名
        </th>
    </tr>
    <tr>
        <td>
            <input type="text" name="name">
        </td>
    </tr>
    <tr>
        <th>
            メールアドレス
        </th>
    </tr>
    <tr>
        <td>
            <input type="email" name="email">
        </td>
    </tr>
</table>
<button>送信する</button>
</form>
@endsection