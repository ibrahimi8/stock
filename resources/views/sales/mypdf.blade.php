<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        HTML CSS JSResult Skip Results Iframe
EDIT ON
body{
  font:1.2em normal Arial,sans-serif;
  color:#34495E;
}

h1{
  text-align:center;
  text-transform:uppercase;
  letter-spacing:-2px;
  font-size:2.5em;
  margin:20px 0;
}

.container{
  width:90%;
  margin:auto;
}

table{
  border-collapse:collapse;
  width:100%;
}

.blue{
  border:2px solid #1ABC9C;
}

.blue thead{
  background:#1ABC9C;
}

.purple{
  border:2px solid #9B59B6;
}

.purple thead{
  background:#9B59B6;
}

thead{
  color:white;
}

th,td{
  text-align:center;
  padding:5px 0;
}

tbody tr:nth-child(even){
  background:#ECF0F1;
}

tbody tr:hover{
background:#BDC3C7;
  color:#FFFFFF;
}

.fixed{
  top:0;
  position:fixed;
  width:auto;
  display:none;
  border:none;
}

.scrollMore{
  margin-top:600px;
}

.up{
  cursor:pointer;
}


Resources1× 0.5× 0.25×Rerun

    </style>
</head>
<body>
<h1>&darr; SALES &darr;</h1>
<table class="blue">
  <thead>
    <tr>
                    <th># </th>
                    <th>Product</th>
                    <th>Tax</th>
                    <th>Total</th>
                    <th>Discount</th>
                    <th>Note</th>
                  </tr>
  </thead>
  <tbody>
    @foreach($sales as $saless)
            <tr>
                <td>{{$saless->refrences_no}}</td>
                <td>{{$saless->product}}</td>
                <td>{{$saless->tax}}</td>
                <td>{{$saless->total}}</td>
                <td>{{$saless->discount}}</td>
                <td>{{$saless->note}}</td>
            </tr>
            @endforeach
  </tbody>
</table>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</body>
</html>
