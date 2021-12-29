@extends('master')


@section('content')

<form class="print_order">
        <input class="btn btn-success" type="button" onClick="PrintDiv();" value="Print">
    </form>
    <div id="divToPrint">

    <h1>Product Details</h1>

    <p>
    <img src="{{asset('/uploads/'.$item->image)}}" alt="" style="width:100px">

    </p>
<p>Product Name: {{$item->product_name}}</p>
<p>Product Type: {{$item->product_type}}</p>
<p>Starting Price: {{$item->starting_price}}</p>
<p>Starting time: {{$item->starting_time}}</p>
<p>Ending time: {{$item->ending_time}}</p>

@endsection


<script language="javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=1100,height=700');
        popupWin.document.open();
        popupWin.document.write('<html><head><link href="http://127.0.0.1:8000/css/style.css" rel="stylesheet"></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>