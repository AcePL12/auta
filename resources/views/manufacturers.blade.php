<h1>Manufacturer list</h1>
<table border="1"> 
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
        <td> </td>
    </tr>
    @endforeach
</table>
