<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>optional</title>
</head>
<body>
    <fieldset>
        <legend>biodata</legend>
        <table>
            @if ($a == null)
            silahkan isi biodata terlebih dahulu
            @elseif ($a != null)
            <tr>
                <td>nama</td>
                <td>:</td>
                <td>{{$a}}</td>
            </tr>
            @endif
            @if ($b != null)
            <tr>
                <td>alamat</td>
                <td>:</td>
                <td>{{$b}}</td>
            </tr>
            @endif
            @if ($c != null)
            <tr>
                <td>jenis kelamin</td>
                <td>:</td>
                <td>{{$c}}</td>
            </tr>
            @endif
            @if ($d != null)
            <tr>
                <td>tinggi badan</td>
                <td>:</td>
                <td>{{$d}}</td>
            </tr>
            @endif
            @if ($e != null)
            <tr>
                <td>berat badan</td>
                <td>:</td>
                <td>{{$e}}</td>
            </tr>
            @endif


        </table>
    </fieldset>
</body>
</html>