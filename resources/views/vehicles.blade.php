<head>

</head>
<body>
    <?php
    
    ?>
    
    <form method="POST" action="./">
    @csrf
        <legend> dodawanie </legend>
<hr>
        <label for="Country">Country</label>
        <select name='Country' id="Country">
        @foreach($countries as $item)
            <option value="{{$item}}">{{$item}}</option>
            @endforeach
        </select>
        <br>
<hr>
        <label for="Mfr_CommonName">Mfr_CommonName</label>
        <select name='Mfr_CommonName' id="Mfr_CommonName">
        @foreach($Mfr_CommonName as $item)
            <option value="{{$item}}">{{$item}}</option>
            @endforeach
            </select>
            <br>
<hr>
            <label for="Mfr_ID">Mfr_ID</label>
        <select name='Mfr_ID' id="Mfr_ID">
        @foreach($Mfr_ID as $item)
            <option value="{{$item}}">{{$item}}</option>
            @endforeach
            </select>
            <br>
<hr>
            <label for="Mfr_Name">Mfr_Name</label>
        <select name='Mfr_Name' id="Mfr_Name">
        @foreach($Mfr_Name as $item)
            <option value="{{$item}}">{{$item}}</option>
            @endforeach
            </select>
            <br>
<hr>
            <label for="Vehicle registration number">Vehicle registration number</label>
        <input type="text" id="Vehicle_registration_number" name='Vehicle_registration_number'>
<hr>
    <button>send</button>
    </form>
    
</body>