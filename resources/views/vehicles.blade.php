<head>

</head>
<body>
    <?php
    var_dump($results);
    ?>
    
    <form method="POST" action="./">
    @csrf
        <legend> dodawanie </legend>
<hr>
        <label for="Country">Country</label>
        <select name='Country' id="Country">
        @foreach($collection as $item)
            <option value="{{$item['Country']}}">{{$item['Country']}}</option>
            @endforeach
        </select>
        <br>
<hr>
        <label for="Mfr_CommonName">Mfr_CommonName</label>
        <select name='Mfr_CommonName' id="Mfr_CommonName">
        @foreach($collection as $item)
            <option value="{{$item['Mfr_CommonName']}}">{{$item['Mfr_CommonName']}}</option>
            @endforeach
            </select>
            <br>
<hr>
            <label for="Mfr_ID">Mfr_ID</label>
        <select name='Mfr_ID' id="Mfr_ID">
        @foreach($collection as $item)
            <option value="{{$item['Mfr_ID']}}">{{$item['Mfr_ID']}}</option>
            @endforeach
            </select>
            <br>
<hr>
            <label for="Mfr_Name">Mfr_Name</label>
        <select name='Mfr_Name' id="Mfr_Name">
        @foreach($collection as $item)
            <option value="{{$item['Mfr_Name']}}">{{$item['Mfr_Name']}}</option>
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