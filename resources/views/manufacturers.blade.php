<head>
</head>
<h1>Manufacturer list</h1>
<table border="2"> 
    <tr> 
        <td> Country </td>
        <td> Mfr_CommonName </td>
        <td> Mfr_ID </td>
        <td> Mfr_Name </td>
        <td> VehicleTypes </td>
    </tr>
    @foreach($collection as $item)
    <tr>
        <td> {{$item['Country']}} </td>
        <td> {{$item['Mfr_CommonName']}} </td>
        <td> {{$item['Mfr_ID']}} </td>
        <td> {{$item['Mfr_Name']}} </td>
        @foreach($item['VehicleTypes'] as $type)
        <td> 
          <table >
            <tr> <td> IsPrimary </td> <td> Name </td> </tr>
            <tr> <td> {{$type['IsPrimary']}} </td> <td> {{$type['Name']}} </td> </tr>
            </table>
        </td>
        @endforeach
    </tr>
    @endforeach
</table>
