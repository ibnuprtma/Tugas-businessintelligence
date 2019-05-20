<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    </head>
    <body>
       
        <h1 class="text-center">Businness Intelegent</h1><hr>
        <div class="container">
            <div class="row p-5">
                <div class="col-md-5">
                    <div class="card">
                        <h5 class="card-header">Transaction</h5>
                        <div class="card-body">
                            <div class="container">
                                <form action="{{ route('dashboard.store')}}" method="POST">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="Transaction">Code</label>
                                        <input type="text" class="form-control" name="code" placeholder="code">
                                        <hr>
                                        <label for="Transaction">Transaction</label>
                                        <input type="text" class="form-control" name="name" placeholder="Transaction">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <h5 class="card-header"></h5>
                        <div class="card-body">
                            <div class="container">
                                <div class="form-group">
                                    <input type="hidden" id="nasgor" value="{{$countnasgor}}">
                                    <input type="hidden" id="miegoreng" value="{{$countmiegoreng}}">
                                    <input type="hidden" id="esteh" value="{{$countesteh}}">
                                    <input type="hidden" id="esdegan" value="{{$countesdegan}}">
                                    <input type="hidden" id="cTransaction" value="{{$counttransaction}}">
                                    <label for="Transaction">Name</label>
                                    <input type="text" class="form-control" name="name1" id="name1" required>
                                    <hr>
                                    <label for="Transaction">Name</label>
                                    <input type="text" class="form-control" name="name2" id="name2" required>
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <button onclick="myFunction()" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-1">
                        <h5 class="card-header">Result</h5>
                        <div class="card-body">
                            <div class="container">
                                <h4>Support : <span id="support"></span>%</h4>
                                <h4>Confidence : <span id="confidence"></span>%</h4>
                                <h4>Support x Confidence : <span id="sc"></span>%</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">List Transaction</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p>Jumlah Nasi Goreng : <span>{{$countnasgor}}</span></p>
                                    <p>Jumlah Mie Goreng : <span>{{$countmiegoreng}}</span></p>
                                </div>
                                <div class="col"> 
                                    <p>Jumlah Es Teh : <span>{{$countesteh}}</span></p>
                                    <p>Jumlah Es Degan : <span>{{$countesdegan}}</span></p>
                                </div>
                            </div>
                            <table id="table_transaction" class="table table-striped table-bordered second" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>code</th>
                                            <th>name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transaction as $item)
                                        <tr>
                                            <td>{{ $item->code}}</td>
                                            <td>{{ $item->name}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>code</th>
                                            <th>name</th>
                                        </tr>
                                    </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script>
            $(document).ready( function () {
                $('#table_transaction').DataTable();
            } );
        </script>
        <script>
            function myFunction() {
                var x = document.getElementById("name1").value;
                var y = document.getElementById("name2").value;
                var nasgor = document.getElementById("nasgor").value;
                var miegoreng = document.getElementById("miegoreng").value;
                var esteh = document.getElementById("esteh").value;
                var esdegan = document.getElementById("esdegan").value;
                var cTransaction = document.getElementById("cTransaction").value;

                if (x == "Nasi Goreng" && y == "Mie Goreng") {
                        support = miegoreng/cTransaction
                        confidence = miegoreng/nasgor
                        sc= support*confidence
                } else if(x == "Nasi Goreng" && y == "Es Teh" || x == "Es Teh" && y == "Nasi Goreng") {
                        support = esteh/cTransaction
                        confidence = esteh/nasgor
                        sc= support*confidence
                }
                else if(x == "Nasi Goreng" && y == "Es Degan" || x == "Es Degan" && y == "Nasi Goreng") {
                        support = esdegan/cTransaction
                        confidence = esdegan/nasgor
                        sc= support*confidence
                }
                if(x == "Mie Goreng" && y == "Es Teh" || x == "Es Teh" && y == "Mie Goreng") {
                        support = esteh/cTransaction
                        confidence = esteh/miegoreng
                        sc= support*confidence
                }
                else if(x == "Mie Goreng" && y == "Es Degan" || x == "Es Degan" && y == "Mie Goreng") {
                        support = esdegan/cTransaction
                        confidence = esdegan/miegoreng
                        sc= support*confidence
                }
                if(x == "Es Degan" && y == "Es Teh" || x == "Es Teh" && y == "Es Degan") {
                        support = esteh/cTransaction
                        confidence = esteh/esdegan
                        sc= support*confidence
                }
                
                document.getElementById("support").innerHTML = (support*100);
                document.getElementById("confidence").innerHTML = (confidence*100);
                document.getElementById("sc").innerHTML = (sc*100);
            }
        </script>

        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    </body>
</html>
